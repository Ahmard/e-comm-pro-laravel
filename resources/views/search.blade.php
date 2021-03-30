@extends('master')
@section('content')
    
<div class="custom-product">
    <div class="trending-product">
        <h3>Trending Products</h3>
        @foreach ($products as $item)
                
                    <div class="img-latest-all">
                        <a href="detail/{{ $item['id'] }}">
                        <img class="img-latest" src="{{ url($item->gallery) }}">
                        <div >
                            <h2>{{ $item->name }}</h2>
                            <h5>{{ $item->description }}</h5>

                        </div>
                        </a>
                    </div>  
                        
                   
        @endforeach
    </div>
</div>                   

@endsection


