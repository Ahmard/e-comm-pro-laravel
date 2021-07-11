<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>e-comm-pro</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
</head>
<body>
{{View::make('header') }}
@yield('content')
{{View::make('footer') }}
</body>
<style>
    .custom-login {
        height: 500px;
        padding-top: 100px;
    }
    .whole-product-slider{
        margin-left: 0px;
        margin-bottom: 10px;
    }
    img.slider-image{
        height: 450px !important;
        width: 850px !important;
        padding-left:290px;
       
    }
    .carousel-caption{
        background-color: gray;
        border-radius: 10px;
        color: red;
        opacity:0.5;
        
        
    }
    .pro-style {
        margin-top: 20px;
    }
    
    
    img.img-latest{
        height: 350px !important;
        width: 400px !important;
    }
    .img-latest-all{
        margin:10px;
        float:left;
        
        box-shadow: 0 0 10px 5px;
    }
    
    .detail-img{
        height: 400px;
        margin-bottom: 30px;
        box-shadow: 0 0 10px 5px;
    }
    .search-box{
        width:500px !important;
    }
    img.img-search{
        width: 200px !important;
        box-shadow: 0 0 10px 5px;
    }
    .search-product{
        margin-bottom: 15px;
    }
    .trending-product-title{
        margin-left:105px;
        width:460px;
        padding: 5px;
        border-bottom: 2px solid black;
    }
    .cart-list-delivider{
        border-bottom:1px solid #ccc;
        margin-bottom:20px;
        padding-bottom:20px;
        margin-left:20px;
    }
</style>
</html>
