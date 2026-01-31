<?php

namespace App\Enums;

enum CurrencyType: string
{
    use EnumTrait;

    case ARGENTINE_PESO = 'argentine_peso';
    case AUSTRALIAN_DOLLAR = 'australian_dollar';
    case BRITISH_STERLING_POUND = 'british_sterling';
    case BULGARIAN_LEV = 'bulgarian_lev';
    case COLUMBIAN_PESO = 'columbian_peso';
    case EURO = 'euro';
    case DOLLAR = 'dollar';
    case ISRAELI_NEW_SHEKEL = 'israeli_new_shekel';
    case CHILEAN_PESO = 'chilean_peso';
    case MEXICAN_PESO = 'mexican_peso';
    case INDIAN_RUPEE = 'indian_rupee';
    case NORWEGIAN_KRONE = 'norwegian_krone';
    case POLISH_ZLOTY = 'polish_zloty';
    case HUNGARIAN_FORINT = 'hungarian_forint';
    case ROMANIAN_LEU = 'romanian_leu';
    case SERBIAN_DINAR = 'serbian_dinar';

    public function title(): string
    {
        return match ($this) {
            self::ARGENTINE_PESO => 'Argentine peso',
            self::AUSTRALIAN_DOLLAR => 'Australian dollar',
            self::BRITISH_STERLING_POUND => 'British sterling pound',
            self::BULGARIAN_LEV => 'Bulgarian lev',
            self::COLUMBIAN_PESO => 'Columbian peso',
            self::EURO => 'Euro',
            self::DOLLAR => 'Dollar',
            self::ISRAELI_NEW_SHEKEL => 'Israeli new shekel',
            self::CHILEAN_PESO => 'Chilean peso',
            self::NORWEGIAN_KRONE => 'Norwegian Krone',
            self::MEXICAN_PESO => 'Mexican peso',
            self::INDIAN_RUPEE => 'Indian Rupee',
            self::POLISH_ZLOTY => 'Polish zloty',
            self::HUNGARIAN_FORINT => 'Hungarian forint',
            self::ROMANIAN_LEU => 'Romanian leu',
            self::SERBIAN_DINAR => 'Serbian dinar',
        };
    }

    public function symbol(): string
    {
        return match ($this) {
            self::ARGENTINE_PESO => '$',
            self::AUSTRALIAN_DOLLAR => '$',
            self::BRITISH_STERLING_POUND => '£',
            self::BULGARIAN_LEV => 'lv',
            self::COLUMBIAN_PESO => '$',
            self::EURO => '€',
            self::INDIAN_RUPEE => '₹',
            self::ISRAELI_NEW_SHEKEL => '₪',
            self::DOLLAR => '$',
            self::CHILEAN_PESO => '$',
            self::NORWEGIAN_KRONE => 'kr',
            self::MEXICAN_PESO => '$',
            self::POLISH_ZLOTY => 'zł',
            self::HUNGARIAN_FORINT => 'Ft',
            self::ROMANIAN_LEU => 'L',
            self::SERBIAN_DINAR => 'РСД',
        };
    }

    public function IsoCode(): ?string
    {
        return match ($this) {
            self::AUSTRALIAN_DOLLAR => 'AUD',
            self::EURO => 'EUR',
            self::DOLLAR => 'USD',
            self::BRITISH_STERLING_POUND => 'GBP',
            self::ISRAELI_NEW_SHEKEL => 'ILS',
            self::MEXICAN_PESO => 'MXN',
            self::POLISH_ZLOTY => 'PLN',
            self::HUNGARIAN_FORINT => 'HUF',
            self::NORWEGIAN_KRONE => 'NOK',
            default => null
        };
    }

    public function isoCodeInvoiceMap(): ?string
    {
        return match ($this) {
            self::ARGENTINE_PESO => 'ARS',
            self::AUSTRALIAN_DOLLAR => 'AUD',
            self::BRITISH_STERLING_POUND => 'GBP',
            self::BULGARIAN_LEV => 'BGN',
            self::COLUMBIAN_PESO => 'COP',
            self::EURO => 'EUR',
            self::INDIAN_RUPEE => 'INR',
            self::ISRAELI_NEW_SHEKEL => 'ILS',
            self::DOLLAR => 'USD',
            self::CHILEAN_PESO => 'CLP',
            self::MEXICAN_PESO => 'MXN',
            self::NORWEGIAN_KRONE => 'NOK',
            self::POLISH_ZLOTY => 'PLN',
            self::HUNGARIAN_FORINT => 'HUF',
            self::ROMANIAN_LEU => 'RON',
            self::SERBIAN_DINAR => 'RSD',
            default => null
        };
    }
}
