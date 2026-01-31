<?php

return [

    'disks' => [
        'private' => [
            'driver' => 'local',
            'root' => storage_path('app/private'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'private',
            'throw' => false,
        ],
    ],

];
