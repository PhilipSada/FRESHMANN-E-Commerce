<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $products = Product::paginate(8);
        return view('admin/inventory/all',[
            'products'=>$products
        ]);
    }
    
    public function create(){
        $productCategories = Category::all();
        return view('admin/inventory/create',[
            'productCategories'=>$productCategories
        ]);
    }

    public function store(){
        request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'image_url_1' => ['required', 'string'],
            'image_url_1' => ['required', 'string'],
            'fit_1' => ['required', 'string'],
            'fit_2' => ['required', 'string'],
            'price' => ['required'],  
            'category_id' => ['required']
        ]);
        
        $product = new Product();
        $product->title = request('title');
        $product->image_url_1= request('image_url_1');
        $product->image_url_2= request('image_url_2');
        $product->fit_1 = request('fit_1');
        $product->fit_2 = request('fit_2');
        $product->size_1= request('size_1');
        $product->size_2= request('size_2');
        $product->size_3= request('size_3');
        $product->size_4= request('size_4');
        $product->brand = request('brand');
        $product->featured = request('featured');
        $product->category_id = request('category_id');
        $product->price = request('price');
        $product->quantity = request('quantity');
        $product->description = request('description');
        $product->colour = request('colour');
        $product->save();

        return redirect('/admin/inventory-items');
    }
    public function edit($id){
        $product = Product::find($id);
        $productCategories = Category::all();

        return view('admin/inventory/edit', [
            'product'=>$product,
            'productCategories'=>$productCategories
        ]);
    }

    public function update($id){
        request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'image_url_1' => ['required', 'string'],
            'image_url_1' => ['required', 'string'],
            'fit_1' => ['required', 'string'],
            'fit_2' => ['required', 'string'],
            'price' => ['required'],  
            'category_id' => ['required']
        ]);

        $product = Product::find($id);
        $product->title = request('title');
        $product->image_url_1= request('image_url_1');
        $product->image_url_2= request('image_url_2');
        $product->fit_1 = request('fit_1');
        $product->fit_2 = request('fit_2');
        $product->size_1= request('size_1');
        $product->size_2= request('size_2');
        $product->size_3= request('size_3');
        $product->size_4= request('size_4');
        $product->brand = request('brand');
        $product->featured = request('featured');
        $product->category_id = request('category_id');
        $product->price = request('price');
        $product->quantity = request('quantity');
        $product->description = request('description');
        $product->colour = request('colour');
        $product->save();

        return redirect('/admin/inventory-items');
    }
    
    public function delete($id){
        $product = Product::find($id);
        $product->delete();

        return redirect('/admin/inventory-items');
    }
}
