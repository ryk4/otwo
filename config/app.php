<?php

use Illuminate\Support\Facades\Facade;

return [
    'aliases' => Facade::defaultAliases()->merge([
        // 'Example' => App\Facades\Example::class,
        'PDFMerger' => Webklex\PDFMerger\Facades\PDFMergerFacade::class,
    ])->toArray(),

    'timezone' => env('APP_TIMEZONE', 'Europe/Vilnius'),

];

