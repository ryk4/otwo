<?php

namespace App\Http\Controllers;

use App\Actions\Product\GetAvailableProductsAction;
use App\Actions\Quiz\FetchQuizFromActiveSessionAction;

class CheckoutController extends Controller
{
    public function index(FetchQuizFromActiveSessionAction $fetchQuizFromActiveSession, GetAvailableProductsAction $getAvailableProducts)
    {
        $quiz = $fetchQuizFromActiveSession->handle();

        $products = $getAvailableProducts->handle();

        return inertia('Checkout/CheckoutPage', compact('quiz', 'products'));
    }
}
