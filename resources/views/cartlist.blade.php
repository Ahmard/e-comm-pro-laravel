@extends('master')
@section('content')
    <div class="custom-product">
        <div class="col-sm-10">
            <div class="trending-wrapper">
                <div class="container">
                    <h4>Result for Products</h4>
                </div>
                <a href="ordernow" class="btn btn-success">Order Now</a><br><br>

                @foreach ($products as $item)
                    <div class="row searched-item cart-list-delivider">
                        <div class="col-sm-3">
                            <a href="detail/{{ $item->id }}">
                                <img class="img-search" src="{{ url($item->gallery)}}" alt="">
                
                                </a>
                        </div>

                        <div class="col-sm-4">
                                <div class="">
                                    <h2>{{ $item->name }}</h2>
                                    <h5>{{ $item->description }}</h5>
        
                                </div>
                        </div>

                        <div class="col-sm-3">
                            <a href="/removecart/{{ $item->cart_id }}" class="btn btn-warning">Remove From Cart</a>
                        </div>
                    </div>
                    
                @endforeach
            </div>
            <a href="ordernow" class="btn btn-success">Order Now</a><br><br>

        </div>
</div>    

@endsection
