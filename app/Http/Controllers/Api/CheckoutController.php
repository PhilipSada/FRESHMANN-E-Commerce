<?php

namespace App\Http\Controllers\Api;

use App\ConfirmationMail as AppConfirmationMail;
use App\Http\Controllers\Controller;
use App\Order;
use App\Payment;
use Exception;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use Stripe\Customer;
use Stripe\PaymentIntent;
use Stripe\PaymentMethod;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConfirmationMail;

class CheckoutController extends Controller
{
    public function getToken(Request $request){
        
        try{ 

            $secretKey = env('STRIPE_SECRET');
          
            Stripe::setApiKey($secretKey);

            // $validator = Validator::make($request->json()->all(), [
            //     'street' => ['required', 'string', 'max:255'],
            //     'lastname' => ['required', 'string', 'max:255'],
            //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // ]);
    
            // if($validator->fails()){
            //     return response()->json($validator->errors()->toJson(), 400);
            // }

            $customer = Customer::create([
                'email'=>$request->json()->get('customer_email'),
                'source'=>$request->json()->get('token')
            ]);

            Charge::create([
                'customer'=>$customer->id,
                'amount' => $request->json()->get('order_total')*100,
                'currency' => 'USD',
                'description' => $request->json()->get('customer_firstname')
            ]);
            
          
            $order = new Order();
            $order->cart= serialize($request->json()->get('cart'));
            $order->order_total = $request->json()->get('order_total');
            $order->order_subTotal = $request->json()->get('order_subTotal');
            $order->order_tax = $request->json()->get('order_tax');
            $order->customer_firstname = $request->json()->get('customer_firstname');
            $order->customer_lastname = $request->json()->get('customer_lastname');
            $order->customer_email = $request->json()->get('customer_email');
            $order->street_address = $request->json()->get('street_address');
            $order->city = $request->json()->get('city');
            $order->state= $request->json()->get('state');
            $order->zipcode = $request->json()->get('zipcode');
            $order->order_ref = $request->json()->get('order_ref');
            $order->save();
        
            $cart = json_decode($request->json()->get('cart'));
            $details = [
                'customerEmail'=>$request->json()->get('customer_email'),
                'firstname'=>$request->json()->get('customer_firstname'),
                'lastname'=>$request->json()->get('customer_lastname'),
                'orderTotal'=>$request->json()->get('order_total'),
                'orderSubTotal'=>$request->json()->get('order_subTotal'),
                'orderTax'=> $request->json()->get('order_tax'),
                'orderRef'=> $request->json()->get('order_ref')

            ];


            Mail::to($request->json()->get('customer_email'))->send(new ConfirmationMail($details, $cart));
          
            
            //successful
            return response()->json(['success'=>'Payment Successful', 'result'=>$cart]);
        }catch(Exception $e){
             
        }
    }
}
