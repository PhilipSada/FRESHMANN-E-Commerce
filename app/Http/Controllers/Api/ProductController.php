<?php

namespace App\Http\Controllers\Api;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function all(){
        $storeProducts = Product::all();

        return response()->json([
            'storeProducts'=>$storeProducts
        ]);
    }
    public function category(){
        $category = Category::all();

        return response()->json([
            'category'=>$category
        ]);
    }

}
