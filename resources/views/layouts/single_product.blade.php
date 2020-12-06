@extends('master')

@section('page')

<h3>single product</h3>


    <div class="form-group">
        <p>
        <label for="">Product Name:</label>{{$product->name}}
        </p>

        <p>
        <label for="">Product Price:</label> {{$product->price}}
        </p>

        <p>
        <label for="">Product Price:</label> {{$product->status}}
        </p>

        <p>
        <label for="">Product Description:</label>{{$product->description}}
        </p>

<p>
    Lorem Ipsum is simply dummy text of the printing and typesetting <b>{{$product->name}}</b>. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
</p>
    </div>
@stop
