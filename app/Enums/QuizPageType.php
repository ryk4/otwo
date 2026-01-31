<?php

namespace App\Enums;

enum QuizPageType: string
{
    use EnumTrait;

    case single_select = 'single_select';
    case multi_select = 'multi_select';
    case text_input = 'text_input';
    case dynamic_loader = 'dynamic_loader';
    case information_page = 'information_page';
    case results_page = 'results_page';
    case video_page = 'video_page';

    public function title(): string
    {
        return match ($this) {
            self::single_select => __('Single select'),
            self::multi_select => __('Multi select'),
            self::dynamic_loader => __('Dynamic loader'),
            self::information_page => __('Information page'),
            self::results_page => __('Results page'),
            self::video_page => __('Video page'),
        };
    }
}
