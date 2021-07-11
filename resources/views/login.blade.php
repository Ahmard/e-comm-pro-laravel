@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="container custom-login" style="padding-top: 150px">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-uppercase font-weight-bold">Customer Login</div>
                    <div class="card-body">
                        @if(session()->get('msg:error'))
                            <div class="alert alert-danger">{{session()->get('msg:error')}}</div>
                        @endif
                        <form action="" method="POST">
                            <div class="form-group">
                                @csrf
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                       placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                                       placeholder="Password">
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


