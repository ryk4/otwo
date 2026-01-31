<?php

namespace App\Services\Providers\GoogleExcel\Resources;

class RowsResource
{
    public function __construct(
        private readonly \Google_Service_Sheets $service
    ) {}

    public function appendRows(string $spreadSheetId, array $rows, string $range = 'Sheet1', array $options = ['valueInputOption' => 'USER_ENTERED']): void
    {
        $valueRange = new \Google_Service_Sheets_ValueRange;
        $valueRange->setValues($rows);

        $this->service->spreadsheets_values->append($spreadSheetId, $range, $valueRange, $options);
    }

    public function deleteRows(string $spreadSheetId, string $range = 'Sheet1!2:10000'): void
    {
        $clear = new \Google_Service_Sheets_ClearValuesRequest;

        $this->service->spreadsheets_values->clear($spreadSheetId, $range, $clear);
    }
}
