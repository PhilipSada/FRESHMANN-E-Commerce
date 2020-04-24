<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function show(){

     
        $estimated_revenue = DB::select(DB::raw('SELECT sum(order_total) as total FROM freshmann.orders'));
        $total_customers = DB::select(DB::raw('SELECT count(*) as total FROM freshmann.orders'));

        $latestOrders = Order::where('order_total','>',0)->orderBy('created_at','desc')->paginate(10);

        return view('admin/dashboard',[
            'latestOrders'=>$latestOrders,
            'estimated_revenue'=>$estimated_revenue[0]->total,
            'total_customers'=>$total_customers[0]->total,
        ]);
    }
}
