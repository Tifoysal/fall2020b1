@extends('frontend.master')

@section('content')
<section class="jumbotron text-center">
    <div class="container">
        <h1>slider image will be here </h1>
    </div>
</section>

<div class="album py-5 bg-light">
    <div class="container">

        <div class="row">

            @foreach($products as $product)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                             xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
                             focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>
                                Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"/>
                            <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                        </svg>
                        <div class="card-body">
                            <p class="card-text">{{$product->name}}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart
                                    </button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Buy Now</button>
                                </div>
                                <small class="text-muted">{{$product->price}} BDT</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
</div>

    @stop
