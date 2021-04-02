@extends('master')
@section('content')
    
<div class="custom-product">
    <div class="trending-product">
        <h3 class="trending-product-title">Trending Products</h3>
        @foreach ($products as $item)
        <div class ="container search-product">
            
            <div class="row">
                     <div class="col-sm-3">
                        <a href="detail/{{ $item['id'] }}">
                        <img class="img-search" src="{{ url($item->gallery) }}">
                        </div>   
                        <div class="col-sm-2" >
                            <h2>{{ $item->name }}</h2>
                            <h5>{{ $item->description }}</h5>

                        </div>
                        </a>
                    </div>  
                        
        </div>
    </div>          
        @endforeach
    </div>
                   

@endsection


