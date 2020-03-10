

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" type="img/png" href="img/5g.png">
        <title>ARCHITECH</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css">
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
        <script src="{{asset('js/stylejs.js')}}"></script>
    </head>
    <body>
        <!-- 
            <div class="loader">
              <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
              </div>
            </div> -->
        <div class="header" id="home">
            <div class="container">
                <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
                    <div class="col-lg-12 d-block">
                        <div class="row d-flex">
                            <div class="col-md pr-4 d-flex topper align-items-center">   
                                <span><i class="fa fa-phone"></i> +6257 7959 3473</span>
                            </div>
                            <div class="col-md pr-5 d-flex topper align-items-center">   
                                <span><i class="fa fa-envelope"></i> architech@gmail.com</span>
                            </div>
                            <div class="col-md pr-1 d-flex topper align-items-center">   
                                <span><i class="fa fa-building"></i> Bandung - Bogor - Yogyakarta</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <nav class="nvg navbar navbar-expand-md navbar-light bg-warning sticky-top shadow-lg" id="navbar">
            <div class="container">
                <a href="#home" class="navbar-brand mr-3"><img src="img/lgg.png"></a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="home" class="nav-item nav-link {{ (Request::segment(1) == '' || Request::segment(1) == 'home') ? 'active' : '' }}">Home</a>
                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Services</a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Desain Rumah</a>
                                <a href="#" class="dropdown-item">Furniture</a>
                                <a href="#" class="dropdown-item">Cari Tanah</a>
                                <a href="#services" class="dropdown-item">Kebutuhan Material</a>
                                <a href="#" class="dropdown-item">Token</a>
                            </div>
                            </div> -->
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle {{ (Request::segment(1) == 'architect' || Request::segment(1) == 'contractor') ? 'active' : '' }}" data-toggle="dropdown" href="#">Services</a>
                            <div class="dropdown-menu">
                                <a href="architect" class="dropdown-item">Architect</a>
                                <a href="contractor" class="dropdown-item">Contractor</a>
                            </div>
                        </div>
                        <a href="contact" class="nav-item nav-link {{ (Request::segment(1) == '' || Request::segment(1) == 'contact') ? 'active' : '' }}" >Contact</a>
                        <a href="about" class="nav-item nav-link {{ (Request::segment(1) == '' || Request::segment(1) == 'about') ? 'active' : '' }}" >About</a>
                    </div>
                    <div class="navbar-nav ml-auto">
                        @guest
                        <a class="nav-item nav-link " href="{{ route('login') }}"><i class="fa fa-user"></i> {{ __('Login') }}</a>
                      
                        <a class="nav-item nav-link {{ (Request::segment(1) == 'login' || Request::segment(1) == 'select-register') ? 'active' : '' }}" href="select-register"><i class="fa fa-user-o"></i> Register</a>
                        
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> {{ Auth::user()->name }} <span class="caret"></span></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> {{ __('Logout') }} </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
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
                        <p style="text-align: justify;">Not the beauty of the building you need to see, but how the foundation is built will be tesded by time.
                        </p>
                    </div>
                    <!-- Grid column -->
                    <hr class="w-100 clearfix d-md-none">
                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold" style="color:#ffc107;">SERVICES</h6>
                        <p>
                            <a href="#!">Home Design</a>
                        </p>
                        <p>
                            <a href="#!">Furniture</a>
                        </p>
                        <p>
                            <a href="#!">Ground</a>
                        </p>
                        <p>
                            <a href="#!">Materials</a>
                        </p>
                        <p>
                            <a href="#!">Token</a>
                        </p>
                    </div>
                    <!-- Grid column -->
                    <hr class="w-100 clearfix d-md-none">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold" style="color:#ffc107;">NAVIGATION</h6>
                        <p>
                            <a href="/">Home</a>
                        </p>
                        <p>
                            <a href="#home">Services</a>
                        </p>
                        <p>
                            <a href="contact">Contact</a>
                        </p>
                        <p>
                            <a href="/about">About</a>
                        </p>
                    </div>
                    <!-- Grid column -->
                    <hr class="w-100 clearfix d-md-none">
                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold" style="color:#ffc107;">Address</h6>
                        <p style="text-align: justify;" >
                            <i class="fa fa-map-marker mr-3"></i> Jl. Raya Wangun No.21, Sindangsari, Kec. Bogor Tim., Kota Bogor, Jawa Barat 16146
                        </p>
                        <p>
                            <i class="fa fa-envelope mr-3"></i> architech@gmail.com
                        </p>
                        <p>
                            <i class="fa fa-phone mr-3"></i> +6257 2479 4834
                        </p>
                        <p>
                            <i class="fa fa-clock-o mr-3"></i> Sun - Fry: 9:00 am- 4:00pm
                        </p>
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

