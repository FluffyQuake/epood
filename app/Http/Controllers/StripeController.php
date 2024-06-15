<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

use Illuminate\Http\RedirectResponse;
use Stripe\Checkout\Session;
use Stripe\Exception\ApiErrorException;
use Stripe\Stripe;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class StripeController extends Controller
{
    public function index() {
        $user = Auth::user();
        $carts = Cart::where('user_id', $user->id)->get();
        return view('dashboard', compact('user', 'carts'));
        // return view('dashboard');
    }

    public function checkout() {
        \Stripe\Stripe::setApiKey('sk_test_51PRfNJ09lfrj6iZvLlq0Mb2KGEDbtZHmaoQUJg3j1Lqw16OV607HMr0WmaTVojSSgNLV6fHE9x5yN3CHfdCYvV2V00u7HgbINf');

        $session = Session::create([
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'gbp',
                        'product_data' => [
                            'name' => 'T-shirt',
                        ],
                        'unit_amount'  => 500,
                    ],
                    'quantity'   => 1,
                ],
            ],
            'mode'        => 'payment',
            'success_url' => route('success'),
            'cancel_url'  => route('payment.store'),
        ]);

        return redirect()->away($session->url);
    }

    public function success() {
        $user = Auth::user();
        $carts = Cart::where('user_id', $user->id)->get();
        return view('dashboard', compact('user', 'carts'));
        // return view('dashboard');
    }
}
