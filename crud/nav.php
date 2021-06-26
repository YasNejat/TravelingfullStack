<?php require_once 'components/boot.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">

    <title>Navbar</title>
</head>



<body>
    <style type="text/css">
        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css");

        nav {
            font-size: 1.3rem;
            width: 100%;
            z-index: 1000000;
            top: 0px;
            position: sticky !important;

        }

        li {
            position: relative;
            padding: 15px 0;
        }

        a {
            color: black !important;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 0.15em;
            display: inline-block;
            padding: 15px 20px;
            position: relative;
            font-size: 19px;


        }

        a::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 50%;
            display: block;
            background: none repeat scroll 0 0 transparent;
            height: 2px;
            width: 0;
            background: red;
            transition: width 0.3s ease 0s, left 0.3s ease 0s;
        }

        a:hover::after {
            width: 100%;
            left: 0;
        }

        .bi {
            font-size: 30px;
            color: white;
        }

        .navbar {

         
            background-color: #e3f2fd !important;
        }
    </style>
    <div class="container">

        <nav class="navbar navbar-expand-lg navbar-light">
            <div class=" container-fluid">

                <div class="navbar-brand" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class='m-3' enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                        <rect fill="none" height="24" width="24" />
                        <path d="M11,13.5V2L3,13.5H11z M21,13.5C21,6.5,14.5,1,12.5,1c0,0,1,3,1,6.5s-1,6-1,6H21z M22,15H2c0.31,1.53,1.16,2.84,2.33,3.73 C4.98,18.46,5.55,18.01,6,17.5C6.73,18.34,7.8,19,9,19s2.27-0.66,3-1.5c0.73,0.84,1.8,1.5,3,1.5s2.26-0.66,3-1.5 c0.45,0.51,1.02,0.96,1.67,1.23C20.84,17.84,21.69,16.53,22,15z M22,23v-2h-1c-1.04,0-2.08-0.35-3-1c-1.83,1.3-4.17,1.3-6,0 c-1.83,1.3-4.17,1.3-6,0c-0.91,0.65-1.96,1-3,1H2l0,2h1c1.03,0,2.05-0.25,3-0.75c1.89,1,4.11,1,6,0c1.89,1,4.11,1,6,0h0 c0.95,0.5,1.97,0.75,3,0.75H22z" />
                    </svg>
                </div>


                <button class="navbar-toggler bg-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="#" tabindex="-1" aria-disabled="true">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#" tabindex="-1" aria-disabled="true">Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#" tabindex="-1" aria-disabled="true">Contacts</a>
                        </li>


                    </ul>
                    <form class="d-flex">
                        <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
                        <a href="create.php"><button class="btn btn-outline-dark me-2 mt-4" type="button">Create</button></a>
                    </form>
                </div>
            </div>
    </div>

    </nav>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
<!-- thi function is for Joke -->
<!--  -->
<html>