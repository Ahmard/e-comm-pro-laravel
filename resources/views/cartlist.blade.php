@extends('layouts.app')

@section('content')
    <div class="container-fluid" style="padding-top: 150px">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="trending-wrapper">
                    <div class="card mb-4">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <h4 class="text-uppercase">Shopping Cart</h4>
                                <a href="ordernow" role="button" class="btn btn-success">Order Now</a>
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered table-responsive-md">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>IMAGE</th>
                            <th>NAME</th>
                            <th>PRICE</th>
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
                                <td>{{$product->name}}</td>
                                <td>{{$product->price}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
