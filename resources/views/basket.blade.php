<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Basket</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
{{--<?php--}}
{{--@include('header.php');--}}
{{--?>--}}

<!--Main Navigation-->
<header>

    <nav class="navbar navbar-expand-lg navbar-dark pink scrolling-navbar" style="background-color: #93BDBD; height: 40px">
        <div class="collapse navbar-collapse offset-9" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">About us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Help
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Support</a>
                        <a class="dropdown-item" href="#">Disputes and complaints</a>
                        <a class="dropdown-item" href="#">Report copyright violation</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#modalLoginForm">Sign in</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Sign up
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalBuyerRegisterForm">Sign up as a buyer</a>
                        <a class="dropdown-item" href="#">Sign up as a seller</a>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item">
                    <a class="nav-link"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"><i class="fab fa-twitter"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"><i class="fab fa-instagram"></i></a>
                </li>
            </ul>
        </div>
    </nav>

    <nav class="navbar navbar-dark default-color " style="background-color: #A9CCCC;">
        <form class="form-inline">
            <div class="">
                <a class="navbar-brand" href="{{route('home')}}"><strong>Navbar</strong></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="md-form my-0" style="margin-left: 350px">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" style="width: 500px">
                <button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3 text-white" type="submit">Search</button>
            </div>
            <div class="md-form" style="margin-left: 220px">
                <a href="/basket" style="color: white">
                    <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-basket2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 10a1 1 0 0 1 2 0v2a1 1 0 0 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 0 1-2 0v-2zm3 0a1 1 0 1 1 2 0v2a1 1 0 0 1-2 0v-2z"/>
                        <path fill-rule="evenodd" d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-.623l-1.844 6.456a.75.75 0 0 1-.722.544H3.69a.75.75 0 0 1-.722-.544L1.123 8H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172zM2.163 8l1.714 6h8.246l1.714-6H2.163z"/>
                    </svg> Basket (3)
                </a>
            </div>
        </form>
    </nav>

</header>
<!--Main Navigation-->


<div class="container">
    <div class="row" style="padding-top:25px">
        <!-- <div class="container"> -->
        <div class="column">
            <div class="card" style="margin-bottom:25px">
                <div class="card-body">
                    <div class="container">
                        <h3>Basket (3)</h3>
                        <p class="lead">Choose all</p>
                    </div>
                </div>
            </div>
            @if($basket == null)
                <div class="card mb-3" style="max-width: 750px;">
                    <h1>Pustoy</h1>
                </div>
                @else
                    @foreach($basket->products as $product)
                        <div class="card mb-3" style="max-width: 750px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="{{$product->smallPictureURL}}" class="card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h6 class="card-title">Added product</h6>
                                        <h5 class="card-title">{{$product->name}}</h5>
                                        <p class="card-text">{{$product->description}}</p>
                                        <p class="card-text">Price: {{$product->price}}</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        <hr>
                                        <a href="#" class="btn btn-primary">Order from this seller</a>
                                        <a href="{{route('deletefrombasket', $product->id)}}" class="btn btn-primary">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
            @endif
{{--                <?php for ($i=0; $i < 3; $i++) { ?>--}}
{{--                <div class="card mb-3" style="max-width: 750px;">--}}
{{--                    <div class="row no-gutters">--}}
{{--                        <div class="col-md-4">--}}
{{--                            <img src="https://m.buro247.ru/images/senina/iPhone-12-black_large455678.jpg" class="card-img" alt="...">--}}
{{--                        </div>--}}
{{--                        <div class="col-md-8">--}}
{{--                            <div class="card-body">--}}
{{--                                <h5 class="card-title">Product name</h5>--}}
{{--                                <p class="card-text">Description: This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>--}}
{{--                                <p class="card-text">Price: 231$</p>--}}
{{--                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>--}}
{{--                                <hr>--}}
{{--                                <a href="#" class="btn btn-primary">Order from this seller</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <?php } ?>--}}
            </div>
        <!-- </div> -->

        <div class="column">
            <!-- <div class="container"> -->
            <div class="card" style="margin-left:60px; width:300px">
                <div class="card-body">
                    <h5 class="card-title">Order price</h5>
                    <p class="card-text">The cost:</p>
                    <p class="card-text">Delivery:</p>
                    <hr>
                    <p class="card-text">To pay:</p>
                    <a href="#" class="btn btn-primary">Buy</a>
                </div>
            </div>
            <!-- </div> -->
        </div>
    </div>
</div>

</body>
</html>
