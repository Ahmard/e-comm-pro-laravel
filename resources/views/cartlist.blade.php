@extends('layouts.app')

@section('title', 'Shopping Cart')

@section('content')
    <div class="container-fluid" style="padding-top: 150px">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="trending-wrapper">
                    <div class="card mb-4">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <h4 class="text-uppercase">Shopping Cart</h4>
                                <a href="{{route('order.now')}}" role="button" class="btn btn-success">Proceed To Payment</a>
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered table-responsive-md">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>IMAGE</th>
                            <th>NAME</th>
                            <th>QUANTITY</th>
                            <th>PRICE</th>
                            <th>TOTAL PRICE</th>
                            <th>ACTION</th>

                        </tr>
                        </thead>

                        <tbody>

                        @php($count = 0)
                        @foreach ($products as $product)
                            @php($count += 1)
                            <tr>
                                <td>{{$count}}</td>
                                <td>
                                    <img src="{{$product->gallery}}" alt="{{$product->name}}"
                                         class="img-fluid img-thumbnail" style="width: 100px; height: 100px">
                                </td>
                                <td>
                                    <a href="{{route('product.info', $product->id)}}" class="text-uppercase">{{$product->name}}</a>
                                </td>
                                <td>{{$product->quantity}}</td>
                                <td>&#8358; {{\App\Models\Product::formatMoney($product->price)}}</td>
                                <td>&#8358; {{\App\Models\Product::formatMoney($product->price * $product->quantity)}}</td>
                                <td>
                                
                                    <form action="{{route('cart.remove' , $product->id)}}" method="POST">
                                    @csrf
                                    <div class="text-right">
                                        <a href="/removecart/{{ $product->id }}" class="btn btn-warning">Remove</a>
                                    </div>

                                    <div class="text-right">
                                        <a href="/removecart/{{ $product->id }}" class="btn btn-primary">Save for later</a>
                                    </div>

                                    </form>
                               
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
