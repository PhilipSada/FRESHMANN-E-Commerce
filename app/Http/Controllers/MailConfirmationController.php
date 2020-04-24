<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConfirmationMail;

class MailConfirmationController extends Controller
{
   
    public function sendMail(){


        return view('emails.order-confirmation');
    }
    public function testMail(Request $request){

        $cart = json_decode('[{"id":13,"title":"Tan Textured Baseball T-Shirt","image_url_1":"/images/tshirts/Tan Textured Baseball T-Shirt.png","image_url_2":"/images/tshirts/Tan Textured Baseball T-Shirt-1.png","fit_1":"Regular Fit","fit_2":"Slim Fit","size_1":"S","size_2":"M","size_3":"L","size_4":"XL","brand":"Topman","colour":"Tan","featured":"true","description":"This product is made with a unique 100% cotton that is smooth inside and out and just slightly stretchy. It is so stylish, you will love it","price":27.99,"quantity":20,"category_id":5,"created_at":"2020-04-09T08:07:59.000000Z","updated_at":"2020-04-09T08:07:59.000000Z","count":1,"total":27.99},{"id":22,"title":"Pink Stripe Polo","image_url_1":"/images/poloshirts/Pink Stripe Polo.png","image_url_2":"/images/poloshirts/Pink Stripe Polo-1.png","fit_1":"Regular Fit","fit_2":"Slim Fit","size_1":"S","size_2":"M","size_3":"L","size_4":"XL","brand":"Topman","colour":"Pink","featured":"true","description":"This product is made with a unique 100% cotton that is smooth inside and out and just slightly stretchy. It is so stylish, you will love it","price":27.99,"quantity":20,"category_id":4,"created_at":"2020-04-09T09:40:02.000000Z","updated_at":"2020-04-09T09:40:02.000000Z","count":1,"total":27.99}]');
        $details = [
            'title'=> 'hi',
            'body'=>'hello',

        ];

        // dd($cart);
        return view('test-email', compact('cart', 'details'));
    }
}
