@extends('layouts.app')

@section('title', 'Order')

@section('content')
    <div class="container-fluid" style="padding-top: 150px">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-uppercase font-weight-bold">Order Summary</div>
                    <div class="card-body">
                        <table class="table table-borderless">
                            <tbody>
                            <tr>
                                <td>Delivery</td>
                                <td><i>Free Delivery</i></td    >
                            </tr>
                            <tr>
                                <td>Total Amount</td>
                                <td>&#8358;{{ \App\Models\Product::formatMoney($total) }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body">
                        <form action="/orderplace" method="POST">
                            @csrf
                            <div class="form-group">
                                <input name="address" placeholder="Enter your address" class="form-control">
                            </div>
                            <div class="form-group">
                                <input name="mobile_number" placeholder="Enter phone number" class="form-control">
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary"> Order Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
