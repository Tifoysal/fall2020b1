<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list()
    {
        return view('layouts.product');
    }

    public function createProduct(Request $request)
    {
        //query builder

        //ORM
        Product::create([
            'name'=>$request->product_name,
            'price'=>$request->price,
            'description'=>$request->description
        ]);

        return redirect()->back();

    }
}
