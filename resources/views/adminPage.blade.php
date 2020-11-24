<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Admin Page</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>


<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark info-color" style="background-color: #4DB8E5; height:70px">
    <a class="navbar-brand" href="#">ADMIN PAGE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
            aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fab fa-facebook-f"></i> View Site
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fab fa-instagram"></i> Change Password</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i> Account </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
                    <a class="dropdown-item" href="#">Change account</a>
                    <a class="dropdown-item" href="#">Log out</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<!--/.Navbar -->

<div class="container">
    <div class="column">
        <!-- <nav class="navbar navbar-expand-lg navbar-dark indigo" style="background-color: #4DB8E5; height: 50px;">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#">Authentication and Authorization</a>
          </div>
        </nav> -->
        <div class="card" style="margin: auto;">
            <div class="card-header" style="background-color: #4DB8E5; height: 50px;">
                <div class="row" style="justify-content: space-between">
                    <h3 style="color:white">Languages</h3>
                    <div class="addbtn" style="float: right">
                        <a class="btn btn-primary btn-sm" href="#" role="button" data-toggle="modal" data-target="#add_modal" style="background-color: green";>+ ADD NEW</a>
                    </div>
                </div>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td><%=language.getId()%></td>
                    <td>
                        <form action="/admin?delete_id=<%=language.getId()%>" method="post">
                            <button type="submit" class="btn btn-primary" name="btn_action" value="delete" style="background-color: green">EDIT</button>
                            <button type="submit" class="btn btn-primary" name="btn_action" value="delete" style="background-color: midnightblue">DELETE</button>
                        </form>
                        <!-- <a class="btn btn-primary btn-sm" href="edit_id=" name="EDIT" id="edit" role="button" data-toggle="modal" data-target="#edit_modal2" data-whatever="" style="background-color: green">EDIT</a>
                        <a class="btn btn-primary btn-sm" href="/admin?delete_id=<%=language.getId()%>" role="button"  style="background-color: midnightblue">DELETE</a> -->
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
