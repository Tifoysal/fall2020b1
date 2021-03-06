<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $products=Product::all();

        return view('frontend.layouts.home',compact('products'));
    }

    public function productsUnderCategory($id)
    {
        $products=Product::where('category_id',$id)->get();

        return view('frontend.layouts.categorywise_product',compact('products'));
    }
}
