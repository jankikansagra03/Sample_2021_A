<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ URL::to('/') }}/css/bootstrap.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/fontawesome/css/all.css">

    <script type="text/javascript" src="{{ URL::to('/') }}/js/bootstrap.js"></script>
    <script type="text/javascript" src="{{ URL::to('/') }}/js/validation.js"></script>
    <script type="text/javascript" src="{{ URL::to('/') }}/js/jquery.slim.min.js"></script>
    <script type="text/javascript" src="{{ URL::to('/') }}/js/popper.min.js"></script>
    <script type="text/javascript" src="{{ URL::to('/') }}/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="{{ URL::to('/') }}/js/jquery.min.js"></script>
    <script type="text/javascript" src="{{ URL::to('/') }}/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="{{ URL::to('/') }}/css/mystyle.css">
</head>

<body>
    <div class="container m-auto">
        <div class="row m-4">
            <div class="col-12">
                <nav class="navbar navbar-expand-md navbar-dark">
                    <a class="navbar-brand" href="#"><img src=" images/logo.png" class="img-fluid" height="35%"
                            width="35%" /></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#collapsibleNavbar">
                        <span class="bg-dark fa-sharp fa-solid fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ URL::to('/') }}/home"><i class="fa-solid fa-house"></i>
                                    Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ URL::to('/') }}/gallery"><i
                                        class="fa-regular fa-image"></i> Events Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ URL::to('/') }}/about"><i
                                        class="fa-solid fa-circle-info"></i> About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ URL::to('/') }}/contact"><i
                                        class="fa-regular fa-address-card"></i> Contact </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ URL::to('/') }}/login"><i
                                        class="fa-solid fa-right-to-bracket"></i> Login </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ URL::to('/') }}/register"><i
                                        class="fa-solid fa-user-plus"></i> Register </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        @yield('dynamic_content1')

        <div class="row align-items-center" style="background-color:#DE0826">
            <div class="col-lg-4 col-xl-4 col-md-4 col-sm-12" style="text-align:center">
                <img src="images/logo1.png" class="img-fluid" />
            </div>
            <div class="col-lg-4 col-xl-4 col-md-4 col-sm-12 my-auto" style="text-align:center">
                <h3 style="color:white"> Quick Links >> </h3>
                <a class="footer" href="{{ URL::to('/') }}/home"><button><i class="fa-solid fa-house"></i>
                        Home</button> </a><br>
                <a class=" footer" href="{{ URL::to('/') }}/gallery"><button><i class="fa-regular fa-image"></i>
                        Gallery</button> </a><br>
                <a class="footer" href="{{ URL::to('/') }}/about"> <button><i class="fa-solid fa-circle-info"></i>
                        About Us </button></a><br>
                <a class="footer" href="{{ URL::to('/') }}/contact"><button><i class="fa-regular fa-address-card"></i>
                        Contact Us</button> </a><br>
                <a class="footer" href="{{ URL::to('/') }}/login"><button> <i
                            class="fa-solid fa-right-to-bracket"></i> Login </button></a><br>
                <a class="footer" href="{{ URL::to('/') }}/register"><button> <i class="fa-solid fa-user-plus"></i>
                        Register </button></a><br>

            </div>

            <div class="col-lg-4 col-xl-4 col-md-4 col-sm-12 my-auto" style="text-align:center">
                <h3 style="color:white;"> You can find us on >> </h3>

                <a class="footer" href="https://www.facebook.com/login/" target="_blank"><button><i
                            class="fa-brands fa-facebook"></i> Facebook </button></a><br>
                <a class="footer"
                    href="https://accounts.google.com/v3/signin/identifier?dsh=S-754631039%3A1677643393757965&continue=https%3A%2F%2Faccounts.google.com%2F&followup=https%3A%2F%2Faccounts.google.com%2F&passive=1209600&flowName=GlifWebSignIn&flowEntry=ServiceLogin&ifkv=AWnogHcoeGS5e-pdNqP9GVeEdHCU1MRFTLJ0Lt9C1ymXNRcu0iGqyIMuCt7P6GcWLZlhUvSCAIfqRg"
                    target="_blank"><button><i class="fa-brands fa-google-plus"></i> Google Plus </button></a><br>
                <a class="footer" href="https://www.instagram.com/accounts/login/" target="_blank"> <button><i
                            class="fa-solid fa-circle-info"></i> Instagram</button> </a><br>
                <a class="footer"
                    href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZW4ifQ%3D%3D%22%7D"
                    target="_blank"><button><i class="fa-regular fa-address-card"></i> Twitter </button></a><br>
                <a class="footer" href="https://www.linkedin.com/login" target="_blank"> <button><i
                            class="fa-solid fa-right-to-bracket"></i> Linkedin </button></a><br>
                <a class="footer" href="https://www.instagram.com/accounts/login/" target="_blank"> <button><i
                            class="fa-solid fa-user-plus"></i> Instagram</button> </a><br>
            </div>
        </div>
