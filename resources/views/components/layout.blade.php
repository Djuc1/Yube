<!DOCTYPE html> 
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="A place for your Jobs" />
    <meta name="author" content="Uche" />
    <meta name="keywords" content="Gigs platform for Developers" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Yube|Gigs</title>
    <!-- custom style
    =================================== -->
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}" />
    <!-- bootstrap core css
    =================================== -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
    <!-- Font-awesome css source file
    =================================== -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.css')}}">
    <!-- Font-awesome sass source file
    =================================== -->
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.scss')}}" />
    <!-- Alpine js
      ================================= -->
    <script defer src="assets/js/alpine.min.js"></script>
  </head>
  <body class="">
    <!-- header starts here
    =================================== -->
    <x-flash-message />
    <header style="background-image: url(./assets/imgs/bg.jpg);">
       <nav class="navbar navbar-expand-lg sticky-top navbar-gray">
          <div class="container-fluid">
            <a class="navbar-brand my-3" href="/">
              <i class="fa fa-fade"><img src="{{asset('assets/imgs/js-sketch.png')}}" class="img-fluid rounded" alt="" width="124" /></i>
            </a>
            <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav ms-auto">
                @auth
                <li class="nav-item">
                  <span class=" nav-link fw-bold text-danger">
                  <i class="fa fa-flip">
                    <h5>
                      <strong>Welcome {{auth()->user()->name}}</strong>
                    </h5>
                  </i>
                  </span>
                </li>
                <li class="nav-item">
                  <a class="nav-link fw-bold text-danger" href="/listing/manage"><i class="fa fa-fade"><h5>Manage listings</h5></i></a>
                </li> 
                <form class="inline" action="/logout" method="POST">
                  @csrf
                  <button type="submit" class="btn btn-outline-light nav-link fw-bold text-danger">
                    <i class="fa-solid fa-door-closed"></i>logout
                  </button>
                </form>
                @else
                <li class="nav-item">
                  <a class="nav-link text-danger" href="/register"><i class="fa fa-fade"><h5>Register</h5></i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-danger" href="/login"><i class="fa fa-fade"><h5>Login</h5></i></a>
                </li> 
                @endauth
              </ul>
            </div>
          </div>
        </nav>
       </header>
    <!-- header ends --> 
   <main>
    

	<!-- VIEW OUTPUT -->

	{{$slot}}

	</main>

    <footer class="footer bg-danger py-6">
      <div class="container-fluid">
        <div class="Copyright">
          <p class="text-center text-white pt-4 pb-5">Copyright © Yube 2023, All Rights reserved
            <a href="/listings/create" class="btn btn-dark text-white me-2 float-end">Post Job</a>
          </p>
        </div>
      </div>
    </footer>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>