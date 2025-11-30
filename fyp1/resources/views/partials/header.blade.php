
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>WORKHUB</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <link href="{{ asset('img/workhublogo.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- CSS-link -->
     <link rel="stylesheet" href="{{ asset('css/home.css') }}">

<!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-primary py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white pr-3" href="">FAQs</a>
                        <span class="text-white">|</span>
                        <a class="text-white px-3" href="">Help</a>
                        <span class="text-white">|</span>
                        <a class="text-white pl-3" href="">Support</a>
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-white pl-3" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 text-secondary"><img src="{{ asset('img/workhublogo.jpg') }}" style="width: auto; height: 50px;"></h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">

                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="{{ url('/home') }}" class="nav-item nav-link ">Home</a>
                        <a href="{{ url('/About') }}" class="nav-item nav-link">About</a>
                        <a href="{{ url('/services') }}" class="nav-item nav-link">Services</a>
                        <!-- <a href="pricing.html" class="nav-item nav-link">Pricing</a> -->
                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a href="blog.html" class="dropdown-item">Blog Grid</a>
                                <a href="single.html" class="dropdown-item">Blog Detail</a>
                            </div>
                        </div> -->
                        <a href="contact.html" class="nav-item nav-link">Contact US</a>
                        <!-- Navbar LOGIN Button -->


                        
                    </div>
                    <a href="#" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#loginModal"> LOGIN</a>
                </div>
            </nav>
            
        </div>
    </div>

    <!-- LOGIN Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        @if(session('error'))
  <div class="alert alert-danger">{{ session('error') }}</div>
@endif

@if(session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
@endif

        <form action="{{ URL::to('login') }}" method="POST">
          @csrf
                    <!-- <input type="text" class="form-control mb-2" name="username" placeholder="username"> -->

          <input type="text" class="form-control mb-2" name="email" placeholder="Email">
          <input type="password" class="form-control mb-2"  name="password"  placeholder="Password">
          <!-- <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Login</button>
          </div> -->
          <button type="submit" class="btn btn-primary px-4" name="save">Login</button>
        </form>
        <div class="text-center mt-3">
          <small>Don't have an account? 
            <a href="#" data-bs-toggle="modal" data-bs-target="#signupModal" data-bs-dismiss="modal">
              Sign Up
            </a>
          </small>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- SIGN UP Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-hidden="true">

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title">Sign Up</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <form action="{{ URL::to('signup') }}" method="POST">
          @csrf
          <input type="text" class="form-control mb-2" name="username" placeholder="Full Name">
          <input type="email" class="form-control mb-2" name="email" placeholder="Email">
          <input type="password" class="form-control mb-2" name="password" placeholder="Password">
          <button type="submit" class="btn btn-success px-4" name="save">Sign Up</button>
        </form>
      </div>
    </div>
  </div>
</div>
    <!-- Navbar End -->



