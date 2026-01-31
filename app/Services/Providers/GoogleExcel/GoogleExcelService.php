<?php

namespace App\Services\Providers\GoogleExcel;

use App\Services\Providers\GoogleExcel\Resources\RowsResource;

class GoogleExcelService
{
    protected \Google_Service_Sheets $service;

    public function __construct(
        private readonly string $pathToConfigFile
    ) {
        $client = new \Google_Client;
        $client->setApplicationName('Google Sheets API');
        $client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
        $client->setAccessType('offline');
        $client->setAuthConfig($pathToConfigFile);

        $this->service = new \Google_Service_Sheets($client);
    }

    public function rows(): RowsResource
    {
        return new RowsResource(
            service: $this->service
        );
    }
}
