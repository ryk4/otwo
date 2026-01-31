<?php

namespace App\Http\Controllers;

use App\Actions\LocaleSetting\GetLocaleSettingAction;
use App\Actions\LocaleSetting\SaveLocaleInSessionAction;
use App\Actions\Product\GetAvailableProductsAction;
use App\Actions\Quiz\FetchQuizFromActiveSessionAction;
use App\Actions\Quiz\StoreQuizInActiveSessionAction;
use App\Enums\VersionType;
use App\Models\LocaleSetting;
use App\Models\QuizEntry;
use Carbon\CarbonPeriod;

class SummaryController extends Controller
{
    public function index(FetchQuizFromActiveSessionAction $fetchQuizFromActiveSession, GetAvailableProductsAction $getAvailableProducts,GetLocaleSettingAction $getLocaleSettingAction)
    {
        $quizEntry = $fetchQuizFromActiveSession->handle();

        $locale = $getLocaleSettingAction->handle();

        $summaryPageViewPath = sprintf('Summary/%s', $quizEntry->language->websiteLayout());

        if ($locale->version !== VersionType::VERSION_1) {
            $summaryPageViewPath = sprintf('Summary/%s%s', $quizEntry->language->websiteLayout(),$locale->version->value);
        }

        return inertia($summaryPageViewPath, [
                'products' => $getAvailableProducts->handle(),
                'quiz' => $quizEntry,
                'bookCoverUrl' => $quizEntry->language->bookCoverUrl(),
                'graphDates' => $this->generateGraphDates($quizEntry->language->isoCode())
            ]
        );
    }

    public function show(QuizEntry $quiz)
    {
        app(StoreQuizInActiveSessionAction::class)->handle($quiz);

        $locale = LocaleSetting::query()
            ->firstWhere('language', $quiz->language->value)->code ?? QuizEntry::DEFAULT_LOCALE_CODE;

        app(SaveLocaleInSessionAction::class)->handle($locale);

        return redirect()->route('summary.index');
    }

    private function generateGraphDates(string $isoLocale): array
    {
        return collect(
            CarbonPeriod::create(now()->addDay(), now()->addDays(5))
                ->toArray()
        )
            ->map(function ($date) use ($isoLocale) {
                return $date->locale($isoLocale)->translatedFormat('d M');
            })
            ->toArray();
    }
}
