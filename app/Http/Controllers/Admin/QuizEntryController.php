<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Book\AssociateGeneratedBookWithQuiz;
use App\Actions\Book\GeneratePlanAction;
use App\Actions\Excel\Exports\PaymentsExport;
use App\Actions\Quiz\GetAllQuizEntriesAction;
use App\Actions\Quiz\GetPurchasedProductAction;
use App\Enums\ProductCategoryType;
use App\Http\Controllers\Controller;
use App\Jobs\GeneratePlanJob;
use App\Models\Product;
use App\Models\QuizEntry;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Inertia\Inertia;

class QuizEntryController extends Controller
{
    public function index()
    {
        $quizEntries = app(GetAllQuizEntriesAction::class)->handle(includeUnpaid: false);

        $quizEntries->map(function ($quizEntry) {
            if ($quizEntry->payment == null) {
                return null;
            }

            $upsell1 = Product::query()
                ->where('category_type', ProductCategoryType::ADDON_MEDITATION)
                ->where('type', $quizEntry->payment->product->type)
                ->first();

            $upsell2 = Product::query()
                ->where('category_type', ProductCategoryType::ADDON_PRIORITY)
                ->where('type', $quizEntry->payment->product->type)
                ->first();

            $quizEntry->status_title = $quizEntry->status->title();
            $quizEntry->locale_title = $quizEntry->language->title();
            $quizEntry->language_title = $quizEntry->language->value;
            $quizEntry->type_title = $quizEntry->type->title();
            $quizEntry->created_at_readable = $quizEntry->created_at->toDateTimeString();
            $quizEntry->product_name = app(GetPurchasedProductAction::class)->handle($quizEntry)?->name;
            $quizEntry->purchased_upsell1 = $quizEntry->additionalPayments()->where('product_id', $upsell1->id)->exists();
            $quizEntry->is_plan_generated = $quizEntry->hasMedia(QuizEntry::GENERATED_PLAN_PDF);

            return $quizEntry;
        });

        $paginatedQuizEntries = $quizEntries->through(fn($item) => $item->toArray());

        return Inertia::render('Admin/QuizEntry/Index', [
            'quizEntries' => $paginatedQuizEntries,
        ]);
    }

    public function generate(QuizEntry $quizEntry)
    {
        GeneratePlanJob::dispatch($quizEntry);

        return redirect()->back();
    }

    public function download(QuizEntry $quizEntry)
    {
        $file = $quizEntry->getFirstMediaPath(QuizEntry::GENERATED_PLAN_PDF);

        return response()->download($file);
    }


    public function generateInvoices(Request $request)
    {
        $dateFrom = $request->date_from === null ? null : Carbon::parse($request->date_from);
        $dateTo = $request->date_to === null ? null : Carbon::parse($request->date_to);

        return (new PaymentsExport(dateFrom: $dateFrom, dateTo: $dateTo))->download('payments.xlsx');
    }
}
