<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $productCategories = Category::paginate(10);
        return view('admin/categories/all',[
            'productCategories'=>$productCategories
        ]);
    }
    
    public function create(){
        return view('admin/categories/create');
    }

    public function store(){
        request()->validate([
            'title' => ['required', 'string', 'max:255']
        ]);
        
        $productCategory = new Category();
        $productCategory->title = request('title');
        $productCategory->save();

        return redirect('/admin/categories');
    }
    public function edit($id){
        $productCategory = Category::find($id);

        return view('admin/categories/edit', [
            'productCategory'=>$productCategory
        ]);
    }

    public function update($id){
        request()->validate([
            'title' => ['required', 'string', 'max:255'],  
        ]);

        $productCategory = Category::find($id);
        $productCategory->title = request('title');
        $productCategory->save();

        return redirect('/admin/categories');
    }
    
    public function delete($id){
        $productCategory = Category::find($id);
        $productCategory->delete();

        return redirect('/admin/categories');
    }

}
