<?php

namespace App\Models;

use App\Actions\Product\FetchProductInfo;
use App\Enums\LanguageType;
use App\Enums\PaymentStatusType;
use App\Enums\ProductCategoryType;
use App\Enums\QuizStatusType;
use App\Enums\QuizType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class QuizEntry extends Model implements HasMedia
{
    use InteractsWithMedia;

    public const MEDIA_GENERATED_BOOK = 'media_generated_book';

    public const DEFAULT_LOCALE_CODE = 'en-usd';
    public const GENERATED_PLAN_PDF = 'generated_plan_pdf';

    public const ALL_PLAN_PARTS = [
        self::PLAN_PART_1,
        self::PLAN_PART_2,
        self::PLAN_PART_3,
        self::PLAN_PART_4,
    ];

    public const PLAN_PART_1 = 'plan_part_1';
    public const PLAN_PART_2 = 'plan_part_2';
    public const PLAN_PART_3 = 'plan_part_3';
    public const PLAN_PART_4 = 'plan_part_4';

    public const QUIZ_ID_SESSION = 'quiz_id'; //we do not want to store entire Quiz, since its data can change

    protected $fillable = [
        'type',
        'status',
        'email',
        'ip_address',
        'book_type',
        'selections',
        'uuid',
        'language',
    ];

    protected function casts(): array
    {
        return [
            'selections' => 'array',
            'type' => QuizType::class,
            'status' => QuizStatusType::class,
            'language' => LanguageType::class,
        ];
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection($this::MEDIA_GENERATED_BOOK)
            ->singleFile();

        $this->addMediaCollection($this::GENERATED_PLAN_PDF)
            ->singleFile();

        foreach (self::ALL_PLAN_PARTS as $planPart) {
            $this->addMediaCollection($planPart)
                ->singleFile();
        }
    }

    public function payment(): HasOne
    {
        $productIDs = Product::query()
            ->where('category_type', ProductCategoryType::MAIN_PRODUCT)
            ->pluck('id');

        return $this->hasOne(Payment::class)->where('status', PaymentStatusType::successful)->whereIn('product_id', $productIDs);
    }

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }

    public function additionalPayments(): HasMany
    {
        $productIDs = Product::query()
            ->where('category_type', ProductCategoryType::MAIN_PRODUCT)
            ->pluck('id');

        return $this->hasMany(Payment::class)
            ->where('status', PaymentStatusType::successful)
            ->whereNotIn('product_id', $productIDs);
    }

    public function summaryUrl(): string
    {
        return route('summary.quiz.show', ['quiz' => $this->uuid]);
    }

    public function priorityUpsellUrl(): string
    {
        return route('priority.index', $this->uuid);
    }

    public function meditationsUpsellUrl(): ?string
    {
        $product = Product::query()
            ->where('category_type', ProductCategoryType::ADDON_MEDITATION)
            ->where('is_active', true)
            ->first();

        $locale = LocaleSetting::query()
            ->firstWhere('language', $this->language);


        $meditationsProduct = app(FetchProductInfo::class)->handle($product->id, $locale->code);

        if ($meditationsProduct === null) {
            return null;
        }

        return route('meditations.index', $this->uuid);
    }

    public function userAreaUrl(): string
    {
        return route('user.dashboard', $this->uuid);
    }

    public function getUserName(): string
    {
        return $this->getQuestionAnswers(15)[0];
    }

    public function getQuizTypeReadable(): string
    {
        return $this->type === QuizType::vaping ? 'vaping' : 'smoking';
    }

    public function isValueSelectedInAnswer(int $questionPosition, int|string $answerValue): bool
    {
        return in_array($answerValue, $this->getQuestionAnswers($questionPosition));
    }

    public function getSelectedValuesInAnswer(int $questionPosition): string
    {
        $answers = collect($this->getQuestionAnswers($questionPosition));

        if ($answers->count() === 1 && $answers->first() === "other") {
            return "Other";
        }

        $answers = $answers->map(function ($selectionId) use ($questionPosition) {
            $record = $this->selections[$questionPosition - 1];

            return __($record['question']['answers'][$selectionId]);
        });

        return $answers->implode(', ');
    }

    public function getNumberOfSelectionForSingleQuestion(int $questionPosition): int
    {
        return count($this->getQuestionAnswers($questionPosition));
    }

    public function getQuestionAnswers(int $questionId): array
    {
        return $this->selections[$questionId - 1]['answer'];
    }

    public function getMoneySpentEstimates(string $type): string
    {
        $averageSpendingCost = match ($this->getQuestionAnswers(17)[0]) {
            0 => [
                'daily' => '$1-3',
                'monthly' => '$20-$50',
                'annually' => '$600',
                'tenYears' => '$6,000',
            ],
            1, 'other' => [
                'daily' => '$3-10',
                'monthly' => '$50-$150',
                'annually' => '$1,800',
                'tenYears' => '$18,000',
            ],
            2 => [
                'daily' => '$10-20',
                'monthly' => '$150-$300',
                'annually' => '$3,000',
                'tenYears' => '$30,000',
            ],
            3 => [
                'daily' => '$20-25',
                'monthly' => '$300-$350',
                'annually' => '$3,600',
                'tenYears' => '$36,000',
            ],
            default => [
                'daily' => '$20-25',
                'monthly' => '$300-$350',
                'annually' => '$3,600',
                'tenYears' => '$36,000',
            ]
        };

        return $averageSpendingCost[$type];
    }
}
