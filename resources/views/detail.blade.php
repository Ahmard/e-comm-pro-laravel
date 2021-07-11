@extends('master')
@section('content')
    <div class ="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="img-detail">
                <img class="detail-img" src="{{ url($product->gallery) }}" alt="">

                </div>
            </div>
        
            <div class="col-sm-4">
                <a href="/"><button class="btn btn-warning">Go Back</button></a><br><br>
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

                   

@endsection


