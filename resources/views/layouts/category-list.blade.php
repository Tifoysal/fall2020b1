@extends('master')

@section('page')

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Category Name</th>
            <th scope="col">status</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($list as $data)
        <tr>
            <th scope="row">1</th>
            <td>{{$data->name}}</td>
            <td>{{$data->status}}</td>
            <td>
                <a class="btn btn-primary" href="{{route('category.product.list',$data->id)}}">View all Product</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@stop
