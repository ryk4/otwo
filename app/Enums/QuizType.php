<?php

namespace App\Enums;

use App\Actions\Quiz\Questions\FetchQuizQuestionsForOtherAlternatives;
use App\Actions\Quiz\Questions\FetchQuizQuestionsForTobacco;
use App\Actions\Quiz\Questions\FetchQuizQuestionsForVaping;

enum QuizType: string
{
    use EnumTrait;

    case tobacco = 'tobacco';
    case vaping = 'vaping';
    case other = 'other';

    public function title(): string
    {
        return match ($this) {
            self::tobacco => __('Classic tobacco'),
            self::vaping => __('Vaping'),
            self::other => __('Other alternatives'),
        };
    }

    public function planType(): string
    {
        return match ($this) {
            self::vaping => 'vaping',
            default => 'smoking'
        };
    }

    public function questionnaireClass(): string
    {
        return match ($this) {
            self::tobacco => FetchQuizQuestionsForTobacco::class,
            self::vaping => FetchQuizQuestionsForVaping::class,
            self::other => FetchQuizQuestionsForOtherAlternatives::class,
        };
    }
}
