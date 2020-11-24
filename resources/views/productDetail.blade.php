<!DOCTYPE html>
<html>
<head>
    <title>Product Details</title>
    <meta charset="UTF-8">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body style="background-image: url('images/main_bg3.jpg');">
<!--Main Navigation-->
<header>

    <nav class="navbar navbar-expand-lg navbar-dark pink scrolling-navbar" style="background-color: #93BDBD; height: 40px;">
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
                <a class="navbar-brand" href="#"><strong>Navbar</strong></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="md-form my-0" style="margin-left: 350px">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" style="width: 500px">
                <button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3 text-white" type="submit">Search</button>
            </div>
            <div class="md-form" style="margin-left: 250px">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                </svg>
            </div>
        </form>
    </nav>

</header>
<!--Main Navigation-->

<div class="container">
    <div class="column" style="margin-top: 50px">
        <div class="container d-flex justify-content-center">
            <h3>Manufacturer name</h3>
        </div>
        <div>
            <nav class="navbar navbar-expand-lg navbar-dark pink scrolling-navbar" style="background-color: #31837D; height: 40px; width: 1200px;  margin-top: 30px">
                <div class="collapse navbar-collapse offset-4" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Main Page</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                Products
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Support</a>
                                <a class="dropdown-item" href="#">Disputes and complaints</a>
                                <a class="dropdown-item" href="#">Report copyright violation</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#modalLoginForm">Top sells</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                Reviews
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
        </div>
        <div class="row">
            <div class="card" style="width: 14rem;">
                <div class="card-header">
                    Categories
                </div>
                <div class="list-group">
                    <a href="#!" class="list-group-item list-group-item-action">
                        Women's fashion
                    </a>
                    <a href="#!" class="list-group-item list-group-item-action">Men's fashion</a>
                    <a href="#!" class="list-group-item list-group-item-action">Phones & Telecommunications</a>
                    <a href="#!" class="list-group-item list-group-item-action">Computer, office & Security</a>
                    <a href="#!" class="list-group-item list-group-item-action disabled">Consumer Electronics</a>
                    <a href="#!" class="list-group-item list-group-item-action">Jewerly & Watches</a>
                    <a href="#!" class="list-group-item list-group-item-action">Home, Pet & Appliences</a>
                    <a href="#!" class="list-group-item list-group-item-action disabled">Bags & shoes</a>
                    <a href="#!" class="list-group-item list-group-item-action">Jewerly & Watches</a>
                    <a href="#!" class="list-group-item list-group-item-action">Home, Pet & Appliences</a>

                </div>
            </div>
            <div class="container" style="width:400px; margin-top: 75px;">
                <!-- Card -->
                <div class="card card-cascade wider reverse">
                    <!-- https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg -->
                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src="images/wch.jpg"
                             alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!-- Card content -->
                    <div class="card-body card-body-cascade text-center">

                        <!-- Title -->
                        <h4 class="card-title"><strong>Product Information of: {{$productID }}</strong></h4>
                        <!-- Subtitle -->
                        <h6 class="font-weight-bold indigo-text py-2">KZT 545.43 - 1,138.47</h6>
                        <!-- Text -->
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem perspiciatis
                            voluptatum a, quo nobis, non commodi quia repellendus sequi nulla voluptatem dicta reprehenderit, placeat
                            laborum ut beatae ullam suscipit veniam.
                        </p>

                        <!-- Linkedin -->
                        <a class="px-2 fa-lg li-ic"><i class="fab fa-linkedin-in"></i></a>
                        <!-- Twitter -->
                        <a class="px-2 fa-lg tw-ic"><i class="fab fa-twitter"></i></a>
                        <!-- Dribbble -->
                        <a class="px-2 fa-lg fb-ic"><i class="fab fa-facebook-f"></i></a>

                    </div>

                </div>
                <!-- Card -->
            </div>
            <div class="container" style="width: 450px; margin-top: 75px">
                <div class="jumbotron">
                    <h1 class="display-4">Product Name</h1>
                    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                    <hr class="my-4">
                    <h5>KZT 545.43 - 1,138.47</h5>
                    <p>Size</p>
                    <p>Color</p>
                    <a class="btn btn-primary btn-lg" href="#" role="button">Buy</a>
                    <a class="btn btn-primary btn-lg" href="{{route('index')}}" role="button">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Footer -->
<footer class="page-footer font-small blue-grey lighten-5">

    <div style="background-color: #93BDBD; margin-top: 75px">
        <div class="container">

            <!-- Grid row-->
            <div class="row py-4 d-flex align-items-center">

                <!-- Grid column -->
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                    <h6 class="mb-0" style="color: white">Get connected with us on social networks!</h6>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6 col-lg-7 text-center text-md-right">

                    <!-- Facebook -->
                    <a class="fb-ic">
                        <i class="fab fa-facebook-f white-text mr-4"> </i>
                    </a>
                    <!-- Twitter -->
                    <a class="tw-ic">
                        <i class="fab fa-twitter white-text mr-4"> </i>
                    </a>
                    <!-- Google +-->
                    <a class="gplus-ic">
                        <i class="fab fa-google-plus-g white-text mr-4"> </i>
                    </a>
                    <!--Linkedin -->
                    <a class="li-ic">
                        <i class="fab fa-linkedin-in white-text mr-4"> </i>
                    </a>
                    <!--Instagram-->
                    <a class="ins-ic">
                        <i class="fab fa-instagram white-text"> </i>
                    </a>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row-->

        </div>
    </div>

    <!-- Footer Links -->
    <div class="container text-center text-md-left mt-5">

        <!-- Grid row -->
        <div class="row mt-3 dark-grey-text">

            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

                <!-- Content -->
                <h6 class="text-uppercase font-weight-bold">Company name</h6>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
                    consectetur
                    adipisicing elit.</p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">Products</h6>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a class="dark-grey-text" href="#!">IITU</a>
                </p>
                <p>
                    <a class="dark-grey-text" href="#!">Aliexpress</a>
                </p>
                <p>
                    <a class="dark-grey-text" href="#!">Online shop</a>
                </p>
                <p>
                    <a class="dark-grey-text" href="#!">Internet Shopping</a>
                </p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">Useful links</h6>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a class="dark-grey-text" href="#!">Your Account</a>
                </p>
                <p>
                    <a class="dark-grey-text" href="#!">Become an Affiliate</a>
                </p>
                <p>
                    <a class="dark-grey-text" href="#!">Shipping Rates</a>
                </p>
                <p>
                    <a class="dark-grey-text" href="#!">Help</a>
                </p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">Contact</h6>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <i class="fas fa-home mr-3"></i> Almaty, Manasa, 57</p>
                <p>
                    <i class="fas fa-envelope mr-3"></i> 26502@edu.iitu.kz</p>
                <p>
                    <i class="fas fa-phone mr-3"></i> + 7 707 500 4071</p>
                <p>
                    <i class="fas fa-print mr-3"></i> + 7 707 500 4071</p>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center text-black-50 py-3">© 2020 Copyright:
        <a class="dark-grey-text" href="https://mdbootstrap.com/"> oyazbayev.com</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->
</body>
</html>
