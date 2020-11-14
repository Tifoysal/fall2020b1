@extends('master')

@section('page')
    <h1>Add new Category</h1>
    <form action="{{route('category.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="category_name">Enter Category Name</label>
            <input name="category_name" required placeholder="Enter Category name" type="text" class="form-control" id="category_name" aria-describedby="emailHelp">

        </div>

        <div class="form-group">
            <label for="price">Description</label>
            <textarea placeholder="Enter Category Description" class="form-control" name="description"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@stop
