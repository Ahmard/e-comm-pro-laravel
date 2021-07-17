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
                                <td>Number of item(s)</td>
                                <td>#</td>
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
                                <input name="fullname" placeholder="Enter your fullname" class="form-control" required="required">
                            </div>

                            <div class="form-group">
                                <input name="state" placeholder="Enter your state" class="form-control" required="required">
                            </div>

                            <div class="form-group">
                                <input name="city" placeholder="Enter your city" class="form-control" required="required">
                            </div>

                            <div class="form-group">
                                <input name="fulladdress" placeholder="Enter your address" class="form-control" required="required">
                            </div>

                            <div class="form-group">
                                <input name="zip" placeholder="Enter your zip-code" class="form-control" required="required">
                            </div>

                            <div class="form-group">
                                <input name="mobile_number" placeholder="Enter phone number" class="form-control" required="required">
                            </div>

                            <h4>Payment Option</h4>
                            <br>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="paymentmethod" id="" value="cash_on_delivery" >
                                    Cash on delivery
                                </label>
                            </div>

                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="paymentmethod" id="" value="Paypal">
                                    Paypal
                                </label>
                            </div>
                            <div>
                                <br>
                            </div>
                          <table>
                            <tr>
                                    <td>
                                          <div class="text-left">
                                        <a href="/"  class="btn btn-primary" style="margin-right:30px;"> Continue Shopping</a>
                                    </td>
                            </div>    
                                    <td>
                                         <div class="text-right">
                                        <a href="{{route('check.out')}}"  class="btn btn-primary"> Procede to Order</a>
                                    </td>
                            </div>
                            </tr>
                         </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
