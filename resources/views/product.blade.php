@extends('master')
@section('content')
    <b>Hello world</b>
    <div class="container custom-product">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">

                @foreach ($products as $item)
                    <div class="item {{ $item->id==1? 'active': ''}}">
                        <img src="{{ url($item->gallery) }}" alt="fuck" width="250" height="250">
                        <div class="carousel-caption">
                            <h3>{{ $item->name }}</h3>
                            <p>{{ $item->description }}</p>

                        </div>
                    </div>
            </div>
        @endforeach




        <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    @foreach ($products as $item)
        <div class="container pro-style">
            <table border="1">
                <tr>
                    <td>Product ID:</td>
                    <td>{{ $item->id }}</td>
                </tr>
                <tr>
                    <td>Product Name:</td>
                    <td>{{ $item->name }}</td>
                </tr>
                <tr>
                    <td>Product Price:</td>
                    <td>{{ $item->price }}</td>
                </tr>
                <tr>
                    <td>Product Description:</td>
                    <td>{{ $item->description }}</td>
                </tr>
                <tr>
                    <td>Product ID:</td>
                    <td>{{ $item->category }}</td>
                </tr>
                <tr>
                    <td>Product ID:</td>
                    <td><img src="{{  }}" alt="error"></td>
                </tr>
            </table>
        </div>

    @endforeach

@endsection


