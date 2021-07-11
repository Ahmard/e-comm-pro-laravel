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
                    <a href="/" class="btn btn-outline-secondary mb-3">
                        <i class="fa fa-chevron-left text-uppercase"></i> Go Back
                    </a>
                    <div class="list-group list-group-flush">
                        <div class="list-group-item"><b>Name:</b> {{ $product->name }}</div>
                        <div class="list-group-item"><b>Price:</b> &#8358;{{ $product->price }}</div>
                        <div class="list-group-item"><b>Details:</b> {{ $product->description }}</div>
                        <div class="list-group-item"><b>Category:</b> {{ \App\Models\Category::getName($product->category) }}</div>
                    </div>
                    <form action="{{route('cart.add')}}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <div class="mt-3">
                            <div class="input-group d-flex justify-content-end">
                                <input type="number" class="form-control" name="quantity" placeholder="Quantity">
                                <div class="input-group-append">
                                    <button class="btn btn-primary text-uppercase m-0">
                                        <i class="fa fa-cart-plus"></i> Add To Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @else
        <div style="padding: 150px 50px 0">
            <div class="alert alert-danger shadow">Such product does not exists</div>
        </div>
    @endisset


@endsection


