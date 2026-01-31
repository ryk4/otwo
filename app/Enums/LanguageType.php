<?php

namespace App\Enums;

enum LanguageType: string
{
    use EnumTrait;

    case ARABIC_USD = 'ar-usd';
    case BULGARIAN = 'bg';
    case ENGLISH = 'en';
    case ENGLISH_UNITED_KINGDOM = 'en-gbp';
    case ENGLISH_AUSTRALIA = 'en-aud';
    case ENGLISH_INR = 'en-inr';
    case FINNISH_EURO = 'fi-eur';
    case FRENCH = 'fr';
    case GERMAN = 'de';
    case GERMAN_EURO = 'de-eur';
    case GREEK = 'gr';
    case HEBREW = 'he-ils';
    case ITALIAN = 'it';
    case HUNGARIAN = 'hu';
    case NORWEGIAN = 'no-nok';
    case ROMANIAN = 'ro';
    case ROMANIAN_EURO = 'ro-eur';
    case SERBIAN = 'rs';
    case SPANISH_CHILE = 'es-clp';
    case SPANISH_SPAIN = 'es-es';
    case SPANISH_MEXICO = 'es-mx';
    case SPANISH_ARGENTINA = 'es-ars';
    case SPANISH_COLUMBIA = 'es-cop';
    case SPANISH_WORLDWIDE = 'es-usd';

    public function title(): string
    {
        return match ($this) {
            self::ARABIC_USD => __("Arabic"),
            self::BULGARIAN => __('Bulgarian'),
            self::ENGLISH => __('English'),
            self::ENGLISH_UNITED_KINGDOM => __('English (United Kingdom)'),
            self::ENGLISH_AUSTRALIA => __('English'),
            self::ENGLISH_INR => __('English (INR)'),
            self::FINNISH_EURO => __('Finnish'),
            self::FRENCH => __('French'),
            self::GERMAN => __('German'),
            self::GERMAN_EURO => __('German'),
            self::GREEK => __('Greek'),
            self::HEBREW => __('Hebrew'),
            self::ITALIAN => __('Italian'),
            self::HUNGARIAN => __('Hungarian'),
            self::NORWEGIAN => __('Norwegian'),
            self::ROMANIAN => __('Romanian'),
            self::ROMANIAN_EURO => __('Romanian'),
            self::SERBIAN => __('Serbian'),
            self::SPANISH_CHILE => __('Spanish'),
            self::SPANISH_SPAIN => __('Spanish'),
            self::SPANISH_MEXICO => __('Spanish'),
            self::SPANISH_ARGENTINA => __('Spanish'),
            self::SPANISH_COLUMBIA => __('Spanish'),
            self::SPANISH_WORLDWIDE => __('Spanish '),
        };
    }

    public function bookCoverUrl(): string
    {
        $lang = match ($this) {
            self::SPANISH_CHILE => 'es',
            self::SPANISH_SPAIN => 'es',
            self::SPANISH_MEXICO => 'es',
            self::SPANISH_COLUMBIA => 'es',
            self::SPANISH_WORLDWIDE => 'es',
            default => 'en'
        };

        return sprintf('%s-cover', $lang);
    }

    public function planCoverLanguageIsoCode(): string
    {
        return match ($this) {
            self::SPANISH_CHILE => 'es',
            self::SPANISH_SPAIN => 'es',
            self::SPANISH_MEXICO => 'es',
            self::SPANISH_COLUMBIA => 'es',
            self::SPANISH_WORLDWIDE => 'es',
            default => 'en'
        };
    }

    public function planLanguageIsoCode(): string
    {
        return match ($this) {
            self::ARABIC_USD => 'ar',
            self::SPANISH_CHILE => 'es',
            self::SPANISH_SPAIN => 'es',
            self::SPANISH_MEXICO => 'es',
            self::SPANISH_COLUMBIA => 'es',
            self::SPANISH_WORLDWIDE => 'es',
            self::ITALIAN => 'it',
            self::FRENCH => 'fr',
            self::HEBREW => 'he',
            self::GREEK => 'gr',
            self::GERMAN => 'de',
            self::GERMAN_EURO => 'de',
            self::BULGARIAN => 'bg',
            self::ROMANIAN, self::ROMANIAN_EURO => 'ro',
            default => 'en'
        };
    }

    public function stripeLang(): string
    {
        return match ($this) {
            self::BULGARIAN => 'bg',
            self::FINNISH_EURO => 'fi',
            self::FRENCH => 'fr',
            self::ENGLISH => 'en',
            self::GERMAN => 'de',
            self::GERMAN_EURO => 'de',
            self::GREEK => 'el',
            self::ITALIAN => 'it',
            self::HUNGARIAN => 'hu',
            self::ROMANIAN => 'ro',
            self::SERBIAN => 'en',
            self::NORWEGIAN => 'nb',
            self::SPANISH_CHILE, self::SPANISH_SPAIN, self::SPANISH_MEXICO, self::SPANISH_ARGENTINA, self::SPANISH_COLUMBIA, self::SPANISH_WORLDWIDE => 'es',
            default => 'en'
        };
    }

    public function isoCode(): string
    {
        return match ($this) {
            self::ARABIC_USD => 'ar',
            self::BULGARIAN => 'bg',
            self::FINNISH_EURO => 'fi',
            self::FRENCH => 'fr',
            self::ENGLISH => 'en',
            self::HEBREW => 'he',
            self::GERMAN => 'de',
            self::GERMAN_EURO => 'de',
            self::GREEK => 'el',
            self::ITALIAN => 'it',
            self::HUNGARIAN => 'hu',
            self::ROMANIAN => 'ro',
            self::SERBIAN => 'en',
            self::NORWEGIAN => 'nb',
            self::SPANISH_CHILE, self::SPANISH_SPAIN, self::SPANISH_MEXICO, self::SPANISH_ARGENTINA, self::SPANISH_COLUMBIA, self::SPANISH_WORLDWIDE => 'es',
            default => 'en'
        };
    }

    public function isInverseTextRightToLeft(): bool
    {
        return match ($this) {
            self::ARABIC_USD, self::HEBREW => true,
            default => false
        };
    }

    public function websiteLayout(): string
    {
        return match ($this) {
            self::ARABIC_USD => 'SummaryPageArabic',
            self::HEBREW => 'SummaryPageArabic',
            default => 'SummaryPage'
        };
    }
}
