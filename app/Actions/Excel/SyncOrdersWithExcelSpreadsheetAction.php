<?php

namespace App\Actions\Excel;

use App\Actions\Quiz\GetAllQuizEntriesCollectionAction;
use App\Enums\ProductCategoryType;
use App\Models\LocaleSetting;
use App\Models\Product;
use App\Models\QuizEntry;
use App\Services\Providers\GoogleExcel\GoogleExcelService;

class SyncOrdersWithExcelSpreadsheetAction
{
    public function __construct(
        private readonly GetAllQuizEntriesCollectionAction $getAllQuizEntriesCollectionAction,
        private readonly GoogleExcelService $googleExcelService
    ) {}

    public function handle(): void
    {
        $quizEntries = $this->getAllQuizEntriesCollectionAction->handle()
            ->map(function (QuizEntry $quizEntry) {
                $quizEntry->updated_at = $quizEntry->payment?->created_at;

                $revenue = 0;

                //main product price
                if ($quizEntry->payment === null) {
                    return null;
                }

                $localeSetting = LocaleSetting::firstWhere('language', $quizEntry->language);

                $price = $localeSetting->products()
                    ->where('product_id', $quizEntry->payment->product->id)
                    ->first();

                if ($price === null) {
                    $price = $quizEntry->payment->product;
                } else {
                    $price = $price->pivot;
                }

                $revenue += $price->price_including_vat - $price->discount_amount;

                $upsell1 = Product::query()
                    ->where('category_type', ProductCategoryType::ADDON_MEDITATION)
                    ->where('type', $quizEntry->payment->product->type)
                    ->first();

                $meditationProductId = $quizEntry->additionalPayments()->where('product_id', $upsell1->id)->first()?->product_id;

                if ($meditationProductId !== null) {
                    $price = $localeSetting->products()
                        ->where('product_id', $meditationProductId)
                        ->first();

                    if ($price === null) {
                        $price = $quizEntry->additionalPayments()->first()->product;
                    } else {
                        $price = $price->pivot;
                    }

                    $revenue += $price->price_including_vat - $price->discount_amount;
                }

                $upsell2 = Product::query()
                    ->where('category_type', ProductCategoryType::ADDON_PRIORITY)
                    ->where('type', $quizEntry->payment->product->type)
                    ->first();

                $priorityProductId = $quizEntry->additionalPayments()->where('product_id', $upsell2->id)->first()?->product_id;

                if ($priorityProductId !== null) {
                    $price = $localeSetting->products()
                        ->where('product_id', $priorityProductId)
                        ->first();

                    if ($price === null) {
                        $price = $quizEntry->additionalPayments()->first()->product;
                    } else {
                        $price = $price->pivot;
                    }

                    $revenue += $price->price_including_vat - $price->discount_amount;
                }

                return [
                    $quizEntry->updated_at->format('Y-m-d'),
                    $quizEntry->type->title(),
                    $quizEntry->email,
                    $quizEntry->payment?->product?->type->title() ?? '',
                    $localeSetting->code,
                    $priorityProductId !== null ? 'Yes' : 'No',
                    $meditationProductId !== null ? 'Yes' : 'No',
                    $revenue ?? '',
                    $quizEntry->status->title(),
                ];
            })
            ->sortByDesc('0') //0 is 'updated_at'
            ->filter()
            ->values()
            ->toArray();

        $this->googleExcelService->rows()->deleteRows(spreadSheetId: config('services.googleExcel.spreadSheetId'));

        $this->googleExcelService->rows()->appendRows(spreadSheetId: config('services.googleExcel.spreadSheetId'), rows: $quizEntries);
    }
}
