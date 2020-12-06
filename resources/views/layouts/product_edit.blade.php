@extends('master')

@section('page')
<h1>Add new product</h1>

@if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
@endif

@if($errors->any())
    @foreach($errors->all() as $er)
        <p class="alert alert-danger">{{$er}}</p>
    @endforeach
@endif

    <form action="{{route('product.update',$product->id)}}" method="post">
        @method('put')
        @csrf
        <div class="form-group">
            <label for="product_name">Enter Product Name</label>
            <input value="{{$product->name}}" name="product_name" placeholder="Enter product name" type="text" class="form-control" id="product_name" aria-describedby="emailHelp">

        </div>

        <div class="form-group">
            <label for="cat">Select Category Name:</label>
            <select class="form-control" name="category_id" id="cat">
                @foreach($categories as $category)
                <option @if($product->category_id===$category->id)  selected @endif value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input value="{{$product->price}}" name="price" placeholder="Enter Price" type="text" class="form-control" id="price">
        </div>
        <div class="form-group">
            <label for="price">Description</label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10"> {{$product->description}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@stop
