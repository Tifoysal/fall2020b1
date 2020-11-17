<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showForm()
    {
        $categories=Category::all();
//        dd($categories);
        return view('layouts.product',compact('categories'));
    }

    public function createProduct(Request $request)
    {
        $request->validate([
            'product_name'=>'required',
            'price'=>'required|min:5',
            'category_id'=>'required|numeric'
        ]);

        //query builder

        //ORM
        Product::create([
            'name'=>$request->product_name,
            'price'=>$request->price,
            'description'=>$request->description,
            'category_id'=>$request->category_id
        ]);

        return redirect()->back()->with('message','Product Created Successfully.');

    }

    public function list()
    {
        $list=Product::all();

        return view('layouts.product-list',compact('list'));
    }
}
