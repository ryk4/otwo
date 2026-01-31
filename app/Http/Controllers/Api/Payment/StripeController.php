<?php

namespace App\Http\Controllers\Api\Payment;

use App\Actions\Payment\GetPaymentFromUUIDAction;
use App\Actions\Payment\UpdatePaymentCountryCodeAction;
use App\Actions\Payment\UpdatePaymentResponseFromSupplierAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function __construct(
        private readonly GetPaymentFromUUIDAction $getPaymentFromUUIDAction,
        private readonly UpdatePaymentCountryCodeAction $updatePaymentCountryCodeAction,
        private readonly UpdatePaymentResponseFromSupplierAction $updatePaymentResponseFromSupplierAction
    ) {}

    public function webhook(Request $request)
    {
        try {
            if ($request['type'] === 'checkout.session.completed') {
                $countryCode = $request['data']['object']['customer_details']['address']['country'];

                if ($countryCode !== null) {
                    $paymentUuid = $request['data']['object']['client_reference_id'];

                    $payment = $this->getPaymentFromUUIDAction->handle($paymentUuid);

                    $this->updatePaymentResponseFromSupplierAction->handle(payment: $payment, responseFromProvider: $request->all());

                    $this->updatePaymentCountryCodeAction->handle(payment: $payment, countryCode: $countryCode);
                }
            }
        } catch (\Exception $e) {
        }

        return response()->json([
            'data' => [
                'message' => 'webhook received',
            ],
        ]);
    }
}
