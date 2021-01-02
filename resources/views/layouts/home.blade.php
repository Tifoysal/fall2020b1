@extends('master')

@section('page')
    @if(session()->has('message'))
        <p class="alert alert-success">{{session()->get('message')}}</p>
    @endif

    @if($errors->any())
        @foreach($errors->all() as $er)
            <p class="alert alert-danger">{{$er}}</p>
        @endforeach
    @endif

    <h1>hello</h1>
@stop
