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
            'price'=>'required',
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
        $list=Product::with('categoryRelation')->paginate(10);
//        dd($list);
        return view('layouts.product-list',compact('list'));
    }

    public function delete($id)
    {
       $product=Product::find($id);
       if(!empty($product))
       {
           $product->delete();
           $message="Product deleted Successfully";
       }else{
           $message="No data found.";
       }
        return redirect()->back()->with('message',$message);
    }

    public function viewProduct($p_id)
    {
            $product=Product::find($p_id);
            return view('layouts.single_product',compact('product'));
    }

    public function editProduct($p_id)
    {
        $product=Product::find($p_id);
        $categories=Category::all();
        return view('layouts.product_edit',compact('categories','product'));

    }

    public function updateProduct(Request $request,$id)
    {
        $request->validate([
            'product_name'=>'required',
            'price'=>'required',
            'category_id'=>'required|numeric'
        ]);
       $product=Product::find($id);
       $product->update([
           'name'=>$request->product_name,
           'price'=>$request->price,
           'description'=>$request->description,
           'category_id'=>$request->category_id
       ]);

       return redirect()->back()->with('message','Product Updated Successfully.');
    }


}
