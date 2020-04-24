<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function show(){
        return view('checkout-page');
    }
    public function thanks(){
        return view('thank-you');
    }
}
