<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Profile Page</title>

    <meta charset="UTF-8">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>
<body style="background-image: url('images/main_bg.jpg');">
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
                    <a class="nav-link" href="#">Download App</a>
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

    <nav class="navbar navbar-dark default-color " style="background-color: #A9CCCC; height:75px">
        <form class="form-inline">
            <div class="">
                <a class="navbar-brand" href="#"><strong>SATU</strong></a>
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

<!--  -->
<div class="container">
    <div class="column">
        <div class="w-100 p-3 h-25">
            <nav class="navbar navbar-expand-lg navbar-dark pink scrolling-navbar" style="background-color: darkcyan; margin-top: 30px">
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
    </div>
</div>
<!--  -->

<div class="container">
    <div class="row mt-5">
        <div class="col-lg-3">
            <div class="card bg-light mb-5" style="max-width: 18rem;">
                <div class="card-header" style="background-color: darkcyan;  color: white">Latest birthdays</div>
                <div class="card-body">
                    <h5 class="card-title">Menu</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: black">My orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: black">Feedback Management</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: black">My coupons</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: black">Privilege Center</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: black">You recently viewed</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: black">Delivery addresses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: black">Change password</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: black">Complaints management</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card bg-light mb-5" style="max-width: 18rem;">
                <div class="card-header" style="background-color: darkcyan; color: white">My Games</div>
                <div class="card-body">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: midnightblue">FOOTBALL ONLINE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: midnightblue">ING PONG ONLINE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: midnightblue">CHESS MASTERS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: midnightblue">RACES ONLINE</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-9">
            <div class="column">

                <div class="container mb-5">
                    <div class="card mb-3" style="max-width: 800px;">
                        <div class="row no-gutters">
                            <div class="col-md-3">
                                <img src="https://simpleicon.com/wp-content/uploads/user1.png" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{$current_user->fname}} {{$current_user->mname}} {{$current_user->lname}}</h5>
                                    <h6>Address: {{$current_user->address}}</h6>
                                    <h6>Phone Number: {{$current_user->phone_number}}</h6>
                                    <ul class="nav mt-5">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" style="color: grey">All Orders</a>
                                        </li>
                                        <hr noshade style="height: 20px; width: 1px;">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" style="color: grey">Awaiting Payment</a>
                                        </li>
                                        <hr noshade style="height: 20px; width: 1px;">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" style="color: grey">Awaiting Shipment</a>
                                        </li>
                                        <hr noshade style="height: 20px; width: 1px;">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" style="color: grey">Awaiting delivery</a>
                                        </li>
                                        <hr noshade style="height: 20px; width: 1px;">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" style="color: grey">Awaiting Feedback</a>
                                        </li>
                                        <hr noshade style="height: 20px; width: 1px;">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" style="color: grey">Disputes</a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container mb-5">
                        <div class="card mb-3" style="max-width: 800px;">
                            <div class="row no-gutters">
                                <div class="col-md-14">
                                    <div class="card-body">

                                        <ul class="nav mt-7">
                                            <li class="nav-item">
                                                <a class="nav-link" href="#" style="color: grey">All Orders: 0</a>
                                            </li>
                                            <hr noshade style="height: 20px; width: 1px;">
                                            <li class="nav-item">
                                                <a class="nav-link" href="#" style="color: grey">Awaiting Payment: 0</a>
                                            </li>
                                            <hr noshade style="height: 20px; width: 1px;">
                                            <li class="nav-item">
                                                <a class="nav-link" href="#" style="color: grey">Awaiting Shipment: 0</a>
                                            </li>
                                            <hr noshade style="height: 20px; width: 1px;">
                                            <li class="nav-item">
                                                <a class="nav-link" href="#" style="color: grey">Awaiting delivery: 0</a>
                                            </li>
                                            <!-- <hr noshade style="height: 20px; width: 1px;">
                                            <li class="nav-item">
                                              <a class="nav-link" href="#" style="color: grey">Awaiting Feedback</a>
                                            </li> -->
                                            <hr noshade style="height: 20px; width: 1px;">
                                            <li class="nav-item">
                                                <a class="nav-link" href="#" style="color: grey">Disputes: 0</a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mb-5">
            <div class="card mb-3" style="max-width: 800px;">
                <div class="row no-gutters">
                    <div class="col-md-12">
                        <div class="card-body">

                            <ul class="nav mt-5">
                                <li class="nav-item">
                                    <a class="nav-link" href="#" style="color: grey">All Orders</a>
                                </li>
                                <hr noshade style="height: 20px; width: 1px;">
                                <li class="nav-item">
                                    <a class="nav-link" href="#" style="color: grey">Awaiting Payment</a>
                                </li>
                                <hr noshade style="height: 20px; width: 1px;">
                                <li class="nav-item">
                                    <a class="nav-link" href="#" style="color: grey">Awaiting Shipment</a>
                                </li>
                                <hr noshade style="height: 20px; width: 1px;">
                                <li class="nav-item">
                                    <a class="nav-link" href="#" style="color: grey">Awaiting delivery</a>
                                </li>
                                <!-- <hr noshade style="height: 20px; width: 1px;">
                                <li class="nav-item">
                                  <a class="nav-link" href="#" style="color: grey">Awaiting Feedback</a>
                                </li> -->
                                <hr noshade style="height: 20px; width: 1px;">
                                <li class="nav-item">
                                    <a class="nav-link" href="#" style="color: grey">Disputes</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mb-5">
            <form action="/updateprofile" method="post">
                <h4>Edit Profile</h4>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="{{$current_user->email}}" aria-describedby="emailHelp" disabled>
                </div>
                <div class="form-group">
                    <label for="exampleInputFullName1">Full Name</label>
                    <input type="text" class="form-control" name="full_name" id="exampleInputFullName1" value="{{$current_user->fname}} {{$current_user->mname}}">
                    <small id="emailHelp4" class="form-text text-muted">Change your full name</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputBirthdate2">Birthdate</label>
                    <input type="text" class="form-control" name="birthdate" id="exampleInputBirthdate2" value="{{$current_user->birth_date}}">
                    <small id="emailHelp5" class="form-text text-muted">Change your birthdate</small>
                </div>
                <button type="submit" name="action" value="update_profile" class="btn btn-primary" style="background-color: midnightblue">Update Profile</button>
            </form>
        </div>

        <div class="container mb-5">
            <form action="/updateprofile" method="post">
                <h4>Edit Picture</h4>
                <div class="form-group">
                    <label for="exampleInputPicture1">URL</label>
                    <input type="text" class="form-control" id="exampleInputPicture1" name="picture_url" value="<%=user.getPicture_url()%>">
                    <small id="emailHelp" class="form-text text-muted">Input url of your profile photo</small>
                </div>
                <button type="submit" name="action" value="update_url" class="btn btn-primary" style="background-color: midnightblue">Update URL</button>
            </form>
        </div>

        <div class="container mb-5">
            <form action="/updateprofile" method="post">
                <h4>Update Password</h4>
                <div class="form-group">
                    <label for="exampleInputPassword1">Old Password</label>
                    <input type="password" class="form-control" name="old_password" id="exampleInputPassword1">
                    <small id="emailHelp1" class="form-text text-muted">Input your old password</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword2">New Password</label>
                    <input type="password" class="form-control" name="new_password" id="exampleInputPassword2">
                    <small id="emailHelp2" class="form-text text-muted">Input your new password</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword3">Re-New Password</label>
                    <input type="password" class="form-control" name="re_new_password" id="exampleInputPassword3">
                    <small id="emailHelp3" class="form-text text-muted">Re type your new password again</small>
                </div>
                <button type="submit" name="action" value="update_password" class="btn btn-primary" style="background-color: midnightblue">Update Password</button>
            </form>
        </div>
    </div>
</div>

</div>
</div>

</body>
</html>
