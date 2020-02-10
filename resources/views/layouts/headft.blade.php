<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Bootstrap 4 Responsive Layout Example</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
    
    <style>
    body{
        background: linear-gradient(to bottom, #ffffff 0%,  #fff8dc 100%);
        font-family: Bahnschrift, Helvetica, sans-serif;
    }
    .header{
        background-color: #333333;
    }
    span{
         color:white;
         word-spacing:1px;
    }
    .navbar{
        padding: 20px;
    }
    .navbar-brand{
        text-transform:uppercase;
        letter-spacing:5px;
    }
    .dropdown-menu li a {
        color: #000;
    }
    .dropdown-menu li a:hover {
        background-color: #555;
    }
    .carousel-inner img {
        width: 100%; /* Set width to 100% */
        height: 100%;
        margin: auto;
    }
    .carousel-caption{
        font-weight: 100;
        color: white;
        text-shadow: 0 1px 2px #000;
        position: absolute;
        bottom: 50px;
        right: 80px;
        text-align: right;
        min-height: 250px; /* Prevent carousel from being distorted if for some reason image doesn't load */
    }
    .carousel-caption p{
       font-size: 24px; 
       min-height: 250px; /* Prevent carousel from being distorted if for some reason image doesn't load */
    }
    .featured-text{
        margin:20px;
    }
    .project-text{
        margin: 50px;
    }
    .project-text hr{
        margin: 50px;
    }

    .contactus-btn{
        padding: 75px;
    }

    footer{
        background-color: #333333;
        color:white;
    }
    .row a{
        color: white;
        text-decoration: none;
        font-size: 14px;
    }
    a:active{
        color: #ffc107;
    }

    </style>
</head>
<body>
<div class="header">
    <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
            <div class="col-lg-12 d-block">
                <div class="row d-flex">
                    <div class="col-md pr-4 d-flex topper align-items-center">   
                        <span><i class="fa fa-phone"></i> +6257 7959 3473</span>
                    </div>
                    <div class="col-md pr-5 d-flex topper align-items-center">   
                        <span><i class="fa fa-envelope"></i> handmade@gmail.com</span>
                    </div>
                    <div class="col-md pr-1 d-flex topper align-items-center">   
                        <span><i class="fa fa-building"></i> Bandung - Bogor - Yogyakarta</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    
    
    
<nav class="navbar navbar-expand-md navbar-light bg-warning sticky-top shadow-lg">
    <div class="container">
        <a href="/" class="navbar-brand mr-3"><img src="img/lgg.png"></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="/" class="nav-item nav-link active">Beranda</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Layanan</a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Desain Rumah</a>
                        <a href="#" class="dropdown-item">Furniture</a>
                        <a href="#" class="dropdown-item">Cari Tanah</a>
                        <a href="#" class="dropdown-item">Kebutuhan Material</a>
                        <a href="#" class="dropdown-item">Token</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Jasa</a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Tukang</a>
                        <a href="#" class="dropdown-item">Arsitek</a>
                    </div>
                </div>
                    <a href="kontak.html" class="nav-item nav-link">Kontak</a>
                    <a href="tentang.html" class="nav-item nav-link">Tentang</a>
                </div>
                <div class="navbar-nav ml-auto">
                    <a href="{{ route('login') }}" class="nav-item nav-link">Login</a>
                    <a href="{{ route('register') }}" class="nav-item nav-link">Register</a>
            </div>
        </div>
    </div>    
</nav>

<div class="contentt">    
      @yield('content')
</div>
    <!-- Footer -->
<footer class="page-footer font-small pt-4">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Footer links -->
    <div class="row text-center text-md-left mt-3 pb-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <img src="img/ccc.png">
        <br><br>
        <p style="text-align: justify;">Architect ini menyediakan jasa dan layanan Arsitektur, tukang, kebutuhan material, furniture, dan penjualan Tanah</p>
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold" style="color:#ffc107;">Pelayanan</h6>
        <p>
          <a href="#!">Desain Rumah</a>
        </p>
        <p>
          <a href="#!">Furniture</a>
        </p>
        <p>
          <a href="#!">Cari Tanah</a>
        </p>
        <p>
          <a href="#!">Kebutuhan Material</a>
        </p>
        <p>
          <a href="#!">Token</a>
        </p>
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold" style="color:#ffc107;">Navigasi</h6>
        <p>
          <a href="#!">Beranda</a>
        </p>
        <p>
          <a href="#!">Layanan</a>
        </p>
        <p>
          <a href="#!">Jasa</a>
        </p>
        <p>
          <a href="#!">Kontak</a>
        </p>
        <p>
          <a href="#!">Tentang</a>
        </p>
      </div>

      <!-- Grid column -->
      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold" style="color:#ffc107;">Kontak</h6>
        <p>
          <i class="fa fa-map-marker mr-3"></i> New York, NY 10012, US</p>
        <p>
          <i class="fa fa-envelope mr-3"></i> info@gmail.com</p>
        <p>
          <i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
        <p>
          <i class="fa fa-clock-o mr-3"></i>Sat - Fry: 9:00 am- 2:00pm</p>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Footer links -->

    <hr>

    <!-- Grid row -->
    <div class="row d-flex align-items-center">

      <!-- Grid column -->
      <div class="col-md-7 col-lg-8">

        <!--Copyright-->
        <p class="text-center text-md-left">Copyright &copy; 2020 Archi tech All Right Reserved</p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-5 col-lg-4 ml-lg-0">

        <!-- Social buttons -->
        <div class="text-center text-md-right">
          <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fa fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fa fa-pinterest"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fa fa-instagram"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fa fa-twitter"></i>
              </a>
            </li>
          </ul>
        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

</footer>
<!-- Footer -->
</body>
</html>                             