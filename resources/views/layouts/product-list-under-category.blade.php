@extends('master')

@section('page')

    @if(session()->has('message'))
        <p class="alert alert-success">{{session()->get('message')}}</p>
    @endif

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Product Name</th>
            <th scope="col">Category Name</th>
            <th scope="col">Product Price</th>
            <th scope="col">status</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $key=>$data)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$data->name}}</td>
                <td>{{$data->categoryRelation->name}}</td>
                <td>{{$data->price}}</td>
                <td>{{$data->status}}</td>
                <td>
                    <a class="btn btn-warning" href="{{route('product.edit',$data->id)}}">Edit</a>
                    <a class="btn btn-danger" href="{{route('product.delete',$data->id)}}">Delete</a>
                    <a class="btn btn-info" href="{{route('product.view',$data->id)}}">View</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$products->links()}}
@stop
