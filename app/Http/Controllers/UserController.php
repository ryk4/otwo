<?php

namespace App\Http\Controllers;

use App\Enums\LanguageType;
use App\Enums\ProductCategoryType;
use App\Enums\QuizStatusType;
use App\Models\Product;
use App\Models\QuizEntry;
use Inertia\Inertia;

class UserController extends Controller
{
    public function index(QuizEntry $quizEntry)
    {
//        if ($quizEntry->status !== QuizStatusType::PAID && $quizEntry->status !== QuizStatusType::BOOK_DELIVERED) {
//            return Inertia::render('User/Dashboard');
//        }

        app()->setLocale($quizEntry->language->value);

        $meditationAddon = Product::query()
            ->where('category_type', ProductCategoryType::ADDON_MEDITATION)
            ->where('type', $quizEntry->payment->product->type)
            ->first();

        $quizEntry->main_product = $quizEntry->payment->product->name;
        $quizEntry->main_product_type = $quizEntry->payment->product->type->title();
        $quizEntry->language_title = $quizEntry->language->title();
        $quizEntry->type_title = $quizEntry->type->title();
        $quizEntry->status_title = $quizEntry->status->title();
        $quizEntry->purchased_meditation_addon_product = $quizEntry->additionalPayments()->where('product_id', $meditationAddon->id)->exists();
        $quizEntry->meditations_link = $this->getMeditationsLink($quizEntry->language);
        $quizEntry->meditations_upsell_link = $quizEntry->meditationsUpsellUrl();
        $quizEntry->audio_book_link = $this->getAudioBookLink($quizEntry->language);

        $quizEntry->can_download_book_now = $quizEntry->hasMedia(QuizEntry::GENERATED_PLAN_PDF);

        return Inertia::render('User/Dashboard', compact('quizEntry'));
    }

    public static function getAudioBookLink(LanguageType $languageType): string
    {
        return match ($languageType) {
            LanguageType::SPANISH_ARGENTINA,
            LanguageType::SPANISH_WORLDWIDE,
            LanguageType::SPANISH_COLUMBIA,
            LanguageType::SPANISH_MEXICO,
            LanguageType::SPANISH_SPAIN,
            LanguageType::SPANISH_CHILE => 'https://we.tl/t-7d9RailvHn',
            LanguageType::FRENCH => 'https://we.tl/t-Pzbl2higsK',
            LanguageType::ROMANIAN,
            LanguageType::ROMANIAN_EURO => 'https://we.tl/t-YKXiAqcUsA',
            LanguageType::ITALIAN => 'https://we.tl/t-9oUTnrvkkN',
            LanguageType::GREEK => 'https://we.tl/t-YDtt7fLXlE',
            default => 'https://we.tl/t-65tkqNLODz'
        };
    }

    public static function getMeditationsLink(LanguageType $languageType): string
    {
        return match ($languageType) {
            LanguageType::ENGLISH => 'https://we.tl/t-kYVRgkD0bB',
            LanguageType::SPANISH_WORLDWIDE => 'https://we.tl/t-NpHR0NjCAA',
            LanguageType::SPANISH_MEXICO => 'https://we.tl/t-NpHR0NjCAA',
            LanguageType::FRENCH => 'https://we.tl/t-aWwo3ikIOj',
            LanguageType::GERMAN, LanguageType::GERMAN_EURO => 'https://we.tl/t-GQPeROiYtV',
            LanguageType::GREEK => 'https://we.tl/t-cF5Fi3cuxr',
            default => 'https://we.tl/t-kYVRgkD0bB'
        };
    }
}
