<?php

namespace App\Actions\Payment;

use App\Models\Payment;

class GetPaymentFromUUIDAction
{
    public function handle(string $uuid, bool $excludeAlreadyPaid = false): ?Payment
    {
        return Payment::query()
            ->where('uuid', $uuid)
            ->when($excludeAlreadyPaid, fn ($query) => $query->where('status', '!=', 'successful'))
            ->first();
    }
}
