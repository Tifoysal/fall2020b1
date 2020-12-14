<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showCreateForm()
    {
        return view('layouts.category');
    }

    public function store(Request $request)
    {
        $data=$request->except('_token');

        //if input field name and column name are same
        // Category::create($data);

       Category::create([
           'name'=>$request->category_name,
           'description'=>$request->description
       ]);

       return redirect()->back();
    }

    public function list()
    {
        $list=Category::all();
        return view('layouts.category-list',compact('list'));
    }

    public function viewAllProduct($id)
    {
        $products=Product::where('category_id',$id)->paginate(10);
       return view('layouts.product-list-under-category',compact('products'));
    }
}
