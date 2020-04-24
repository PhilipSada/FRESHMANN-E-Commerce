<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id){
     

        return view('single-product-page',[
            'id'=>$id,
        ]);
    }

    public function showAll($id){
     
        return view('product-page',[
            'id'=>$id,
        ]);
    }
}
