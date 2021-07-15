@extends('layouts.app')

@php($navs['in_home'] = true)
@section('title', 'Homepage')

@section('content')
<?php
use App\Http\Controllers\ProductController;
$total =0;
if(Session::has('user'))
{
    $total = ProductController::cartItem();
}

?>
    <!-- Banner Starts Here -->
    <div class="banner header-text">
        <div class="owl-banner owl-carousel">
            <div class="banner-item-01">
                <div class="text-content">
                    <h4>Best Offer</h4>
                    <h2>New Arrivals On Sale</h2>
                </div>
            </div>
            <div class="banner-item-02">
                <div class="text-content">
                    <h4>Flash Deals</h4>
                    <h2>Get your best products</h2>
                </div>
            </div>
            <div class="banner-item-03">
                <div class="text-content">
                    <h4>Last Minute</h4>
                    <h2>Grab last minute deals</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Latest Products</h2>
                        <a href="{{url('products')}}">view all products <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                @foreach($products as $product)
                    <div class="col-md-4">
                        <div class="product-item">
                            <a href="{{route('product.info', $product['id'])}}"><img src="{{$product['gallery']}}"
                                                                                     alt=""></a>
                            <div class="down-content">
                                <a href="{{route('product.info', $product['id'])}}"><h4>{{$product['name']}}</h4></a>
                                <h6>&#8358;{{$product->getFormattedMoney()}}</h6>
                                <p>{{$product['description']}}</p>
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span>Reviews (24)</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection


