<?php

namespace App\Actions\Excel\Exports;

use App\Enums\BillingCountryType;
use App\Enums\CurrencyType;
use App\Enums\LanguageType;
use App\Enums\PaymentStatusType;
use App\Enums\ProductCategoryType;
use App\Models\LocaleSetting;
use App\Models\Payment;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Carbon;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class PaymentsExport implements FromCollection, WithHeadingRow, WithHeadings, WithMapping
{
    use Exportable;

    public function __construct(
        protected ?Carbon $dateFrom,
        protected ?Carbon $dateTo
    ) {}

    public function collection(): Collection
    {
        return Payment::query()
            ->where('status', PaymentStatusType::successful)
            ->when($this->dateFrom !== null, fn ($query) => $query->where('created_at', '>=', $this->dateFrom))
            ->when($this->dateTo !== null, fn ($query) => $query->where('created_at', '<=', $this->dateTo))
            ->orderByDesc('created_at')
            ->get();
    }

    public function map($row): array
    {
        $countryCode = BillingCountryType::tryFrom($row->billing_country_code);
        $localeCurrency = LocaleSetting::firstWhere('language', $row->quizEntry->language)->currency_type ?? null;

        $client = self::mapClient($countryCode, $localeCurrency);

        $vatCode = self::mapVat($countryCode, $row->product->category_type);

        $priceWithVat = $row->getPriceWithDiscount();
        $priceWithoutVat = number_format($row->getPriceWithDiscount() / (1 + ($vatCode / 100)), 2);

        return [
            '',
            '',
            '',
            strtoupper($countryCode?->value),
            $row->invoice_number,
            $row->quizEntry->email,
            $row->created_at->format('Y-m-d'),
            $client,
            $priceWithVat,
            $priceWithoutVat,
            self::mapVatReadable($countryCode, $row->product->category_type),
            $row->product->name,
            5001,
        ];
    }

    public function headings(): array
    {
        return [
            'Dim',
            'Dim2',
            'Dim3',
            'Šalis',
            'SF nr.',
            'El paštas',
            'Data',
            'Klientas',
            'su PVM',
            'be PVM',
            'PVM kodas',
            'Tekstas',
            'DK',
            'Dokumento numeris',
        ];
    }

    private function mapCountry(LanguageType $languageType): string
    {
        return match ($languageType) {
            LanguageType::BULGARIAN => 'Bulgarija',
            LanguageType::ENGLISH => 'Jungtinės Valstijos',
            LanguageType::ENGLISH_UNITED_KINGDOM => 'Jungtinės Karalystė',
            LanguageType::GERMAN => 'Vokietija',
            LanguageType::ITALIAN => 'Italija',
            LanguageType::HUNGARIAN => 'Vengrija',
            LanguageType::ROMANIAN => 'Romunija',
            LanguageType::SERBIAN => 'Serbija',
            LanguageType::SPANISH_CHILE => 'Chilė',
            LanguageType::SPANISH_SPAIN => 'Ispanija',
            LanguageType::SPANISH_MEXICO => 'Meksika',
            LanguageType::SPANISH_ARGENTINA => 'Argentina',
            LanguageType::SPANISH_COLUMBIA => 'Kolumbija',
            LanguageType::SPANISH_WORLDWIDE => 'Ispanija',
            default => 'N/A'
        };
    }

    private function mapClient(?BillingCountryType $languageType, ?CurrencyType $currencyType): string
    {
        if ($languageType === null || $currencyType === null) {
            return '';
        }

        if (collect([CurrencyType::EURO, CurrencyType::DOLLAR])->contains($currencyType)) {
            if ($languageType->isEuropeanCountry()) {
                return sprintf('%s iš ES', $currencyType->isoCodeInvoiceMap());
            }

            return sprintf('%s iš 3', $currencyType->isoCodeInvoiceMap());
        }

        return $currencyType->isoCodeInvoiceMap();
    }

    private function mapVat(?BillingCountryType $countryCode, ProductCategoryType $productCategoryType): int
    {
        if ($countryCode === null) {
            return 0;
        }

        if ($countryCode->isEuropeanCountry()) {
            if ($productCategoryType === ProductCategoryType::MAIN_PRODUCT) {
                return 9;
            }

            return 21;
        } else {
            return 0;
        }
    }

    private function mapVatReadable(?BillingCountryType $countryCode, ProductCategoryType $productCategoryType): string
    {
        if ($countryCode === null) {
            return '';
        }

        if ($countryCode->isEuropeanCountry()) {
            if ($productCategoryType === ProductCategoryType::MAIN_PRODUCT) {
                return 'PVM_9';
            }

            return 'PVM_21';
        } else {
            return 'PVM_PASL_UZS';
        }
    }
}
