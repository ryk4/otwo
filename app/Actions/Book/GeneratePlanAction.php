<?php

namespace App\Actions\Book;

use App\Models\QuizEntry;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;
use Webklex\PDFMerger\Facades\PDFMergerFacade as PDFMerger;

/**
 * NOTE: Use QUEUE_CONNECTION=database , it might not work if using SYNC due to the mergePDF saves file
 */
class GeneratePlanAction
{
    public function handle(QuizEntry $quizEntry): void
    {
        $bookName = $quizEntry->email . '-' . $quizEntry->type->value . '-' . $quizEntry->language->value . '.pdf';

        app()->setLocale($quizEntry->language->value);

        self::generatePdfParts($quizEntry);

        $mergedPdf = self::mergePdfFiles($quizEntry);
        $mergedPdf->save(Storage::disk('public')->path('temporary-' . $bookName));

        self::saveGeneratedPlan($quizEntry, $bookName);

//        self::deleteTemporaryFiles($quizEntry, $bookName);
    }

    private function generatePdfParts(QuizEntry $quizEntry): void
    {
        $pdfParts = [
            'part1' => QuizEntry::PLAN_PART_1,
            'part2' => QuizEntry::PLAN_PART_2,
            'part3' => QuizEntry::PLAN_PART_3,
            'part4' => QuizEntry::PLAN_PART_4
        ];

        $planType = $quizEntry->type->planType();

        foreach ($pdfParts as $pdfPart => $planPart) {
            $generatedPdf = Pdf::loadHTML(view("plan.$planType.$pdfPart", ['quizEntry' => $quizEntry]));
            $quizEntry->addMediaFromStream($generatedPdf->stream())
                ->setFileName("$pdfPart.pdf")
                ->toMediaCollection($planPart);
        }
    }

    private function mergePdfFiles(QuizEntry $quizEntry): \Webklex\PDFMerger\PDFMerger
    {
        $language = $quizEntry->language;

        $languageIsoCode = $language->planLanguageIsoCode();
        $languageCoverIsoCode = $language->planCoverLanguageIsoCode();

        $quizEntry->refresh();

        $merger = PDFMerger::init();

        $merger->addPdf(public_path(sprintf('assets/plan/cover/%s.pdf', $languageCoverIsoCode)));
        $merger->addPdf($quizEntry->getFirstMediaPath(QuizEntry::PLAN_PART_1));
        $merger->addPdf(public_path(sprintf('assets/plan/diagram1/%s.pdf', $languageIsoCode)));
        $merger->addPdf($quizEntry->getFirstMediaPath(QuizEntry::PLAN_PART_2));
        $merger->addPdf(public_path(sprintf('assets/plan/diagram2/%s.pdf', $languageIsoCode)));
        $merger->addPdf($quizEntry->getFirstMediaPath(QuizEntry::PLAN_PART_3));
        $merger->addPdf(public_path(sprintf('assets/plan/diagram3/%s.pdf', $languageIsoCode)));
        $merger->addPdf($quizEntry->getFirstMediaPath(QuizEntry::PLAN_PART_4));

        $merger->merge();

        return $merger;
    }

    private function saveGeneratedPlan(QuizEntry $quizEntry, string $bookName): void
    {
        $file = Storage::disk('public')->get('temporary-' . $bookName);

        $quizEntry->addMediaFromStream($file)
            ->setFileName($bookName)
            ->toMediaCollection(QuizEntry::GENERATED_PLAN_PDF);
    }

    private function deleteTemporaryFiles(QuizEntry $quizEntry, string $bookName)
    {
        foreach (QuizEntry::ALL_PLAN_PARTS as $planPart) {
            $quizEntry->clearMediaCollection($planPart);
        }

        Storage::disk('public')->delete('temporary-' . $bookName);
    }
}
