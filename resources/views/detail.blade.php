@extends('layouts.app')

@section('title', $title)

@section('content')

    @isset($product)
        <div class="container-fluid" style="padding-top: 150px">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <div class="img-detail">
                        <img style="width: 500px; height: 500px" class="detail-img"
                             src="{{ url($product->gallery) }}" alt="">

                    </div>
                </div>

                <div class="col-md-4">
                    <a href="/">
                        <button class="btn btn-warning">Go Back</button>
                    </a><br><br>
                    <h2>Name: {{ $product->name }}</h2>
                    <h3>Price: {{ $product->price }}</h3>
                    <h4>Details: {{ $product->description }}</h4>
                    <h4>Category: {{ $product->category }}</h4>

                    <br><br>
                    <form action="/add_to_cart" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <button class="btn btn-primary">Add To Cart</button>
                    </form>
                    <br><br>
                    <br><br>
                </div>
            </div>
        </div>
    @else
        <div style="padding: 150px 50px 0">
            <div class="alert alert-danger shadow">Such product does not exists</div>
        </div>
    @endisset


@endsection


