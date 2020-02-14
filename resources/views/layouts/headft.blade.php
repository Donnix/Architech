<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>ARCHITECH</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

    <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/stylejs.js')}}"></script>

</head>
<body>
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
                <a href="/" class="nav-item nav-link active">Beranda</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Layanan</a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Desain Rumah</a>
                        <a href="#" class="dropdown-item">Furniture</a>
                        <a href="#" class="dropdown-item">Cari Tanah</a>
                        <a href="#services" class="dropdown-item">Kebutuhan Material</a>
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
                    <a href="contact" class="nav-item nav-link">Kontak</a>
                    <a href="/about" class="nav-item nav-link">Tentang</a>
                </div>
                <div class="navbar-nav ml-auto">
                  @guest
                    <a class="nav-item nav-link" href="{{ route('login') }}"><i class="fa fa-user"></i> {{ __('Login') }}</a>
                    @if (Route::has('register'))
                    <a class="nav-item nav-link" href="{{ route('register') }}"><i class="fa fa-user-o"></i> {{ __('Register') }}</a>
                    @endif
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
          <a href="/">Beranda</a>
        </p>
        <p>
          <a href="#!">Layanan</a>
        </p>
        <p>
          <a href="#!">Jasa</a>
        </p>
        <p>
          <a href="contact">Kontak</a>
        </p>
        <p>
          <a href="/about">Tentang</a>
        </p>
      </div>

      <!-- Grid column -->
      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold" style="color:#ffc107;">Alamat</h6>
        <p style="text-align: justify;" >
          <i class="fa fa-map-marker mr-3"></i> Jl. Raya Wangun No.21, Sindangsari, Kec. Bogor Tim., Kota Bogor, Jawa Barat 16146</p>
        <p>
          <i class="fa fa-envelope mr-3"></i> architech@gmail.com</p>
        <p>
          <i class="fa fa-phone mr-3"></i> +6257 2479 4834</p>
        <p>
          <i class="fa fa-clock-o mr-3"></i> Sen - Jum: 9:00 am- 4:00pm</p>
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
<script type="text/javascript">
// NAVBAR
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
    document.getElementById("navbar").style.padding = "20px";
  } else {
    document.getElementById("navbar").style.padding = "31px";
  }
}

// END NAVBAR


// DROPDOWN
$(document).ready(function () {
$('.navbar-collapse .dropdown').hover(function () {
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown(150);
    }, function () {
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp(105)
    });
});
// END DROPDOWN


// PROJECT
$('.portfolio-item').isotope({
itemSelector: '.item',
layoutMode: 'fitRows'
});
$('.portfolio-menu ul li').click(function(){
$('.portfolio-menu ul li').removeClass('active');
$(this).addClass('active');
          
var selector = $(this).attr('data-filter');
$('.portfolio-item').isotope({
  filter:selector
});
return  false;
});
$(document).ready(function() {
var popup_btn = $('.popup-btn');
    popup_btn.magnificPopup({
    type : 'image',
    gallery : {
    enabled : true
    }
});
});
// END PROJECT


// COUNTER
$(document).ready(function() {

$('.counter').each(function () {
$(this).prop('Counter',0).animate({
Counter: $(this).text()
}, {
duration: 10000,
easing: 'swing',
step: function (now) {
$(this).text(Math.ceil(now));
}
});
});

});
// END COUNTER


// SLIDER
$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
// END SLIDER


</script>
</body>
</html>                             