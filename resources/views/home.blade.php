@extends('layouts.headft')

@section('content')
    
<div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-caption d-none d-md-block">
                <h1 class="wow slideInRight" data-wow-duration="2s ease-in">First slide label</h1>
                <p class="wow slideInLeft" data-wow-duration="2s ease">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <img src="img/aa.jpg" alt="First Slide">
            </div>
            <div class="carousel-item">
                <div class="carousel-caption d-none d-md-block">
                <h1 class="wow slideInUp" data-wow-duration="4s ease">Second slide label</h1>
                <p class="wow fadeInDown" data-wow-duration="4s ease-out">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <img src="img/15.jpg" alt="First Slide">
            </div>
            <div class="carousel-item">
                <div class="carousel-caption d-none d-md-block">
                <h1 class="wow fadeInUp" data-wow-duration="4s ease">Third slide label</h1>
                <p class="wow fadeInUp" data-wow-duration="2s ease-in-out">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <img src="img/14.jpeg" alt="First Slide">
            </div>
        </div>
        <!-- Carousel controls -->
        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev"></a>
        <a class="carousel-control-next" href="#myCarousel" data-slide="next"></a>
    </div><br><br>  
    
<div class="container">
  <section id="projects" class="projects-section bg-light">
    <div class="container">
      <!-- Featured Project Row -->
      <div class="row align-items-center no-gutters mb-4 mb-lg-5 wow fadeInUp" data-wow-duration="2s ease-in-out">
        <div class="col-xl-8 col-lg-7">
          <img class="img-fluid mb-3 mb-lg-0" src="img/ads.jpg" alt="">
        </div>
        <div class="col-xl-4 col-lg-5">
          <div class="featured-text text-center text-lg-left">
            <h4>Shoreline</h4>
            <p class="text-dark-50 mb-0" style="text-align: justify;">Grayscale is open source and MIT licensed. This means you can use it for any project - even commercial projects! Download it, customize it, and publish your website!</p>
          </div>
        </div>
      </div><br>
      <!-- Project One Row -->
      <div class="row justify-content-center no-gutters mb-5 mb-lg-0 wow fadeInUp" data-wow-duration="3s ease-in-out">
        <div class="col-lg-6">
          <img class="img-fluid" src="img/ar.jfif" alt="">
        </div>
        <div class="col-lg-6">
          <div class="text-center h-100 project" style="background-color: #333333">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-left">
                <h4 class="text-white">Misty</h4>
                <p class="mb-0 text-white-50" style="text-align: justify;">An example of where you can put an image of a project, or anything else, along with a description.</p>
                <hr class="d-none d-lg-block mb-0 ml-0">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Project Two Row -->
      <div class="row justify-content-center no-gutters wow fadeInUp" data-wow-duration="3s ease-in-out">
        <div class="col-lg-6">
          <img class="img-fluid" src="img/dw.jpg" alt="">
        </div>
        <div class="col-lg-6 order-lg-first">
          <div class="bg-warning text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-right">
                <h4 class="text-white">Mountains</h4>
                <p class="mb-0 text-white-50" style="text-align: justify;">Another example of a project with its respective description. These sections work well responsively as well, try this theme on a small screen!</p>
                <hr class="d-none d-lg-block mb-0 mr-0">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div><br>

<section class="services pt-100 pb-50 wow fadeIn" data-wow-duration="3s ease-in-out" id="services">
         <div class="container">
            <div class="row">
               <div class="col-xl-6 mx-auto text-center">
                  <div class="section-title mb-100">
                     <p>what i can do</p>
                     <h4>my services</h4>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="3s ease-in-out">
                  <!-- Single Service -->
                  <div class="single-service">
                     <i class="fa fa-laptop"></i>
                     <h4>Web Design </h4>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="3s ease-in-out">
                  <!-- Single Service -->
                  <div class="single-service">
                     <i class="fa fa-gears"></i>
                     <h4>Web Development</h4>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="3s ease-in-out">
                  <!-- Single Service -->
                  <div class="single-service">
                     <i class="fa fa-mobile"></i>
                     <h4>Responsive Design</h4>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="3s ease-in-out">
                  <!-- Single Service -->
                  <div class="single-service">
                     <i class="fa fa-magic"></i>
                     <h4>Graphic Design</h4>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="3s ease-in-out">
                  <!-- Single Service -->
                  <div class="single-service">
                     <i class="fa fa-pencil"></i>
                     <h4>Creative Design</h4>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="3s ease-in-out">
                  <!-- Single Service -->
                  <div class="single-service">
                     <i class="fa fa-fa fa-lightbulb-o"></i>
                     <h4>Branding</h4>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
                  </div>
               </div>
            </div>
         </div>
      </section><br>

<section class="contactus-btn bg-warning bg-overlay-1 ptb-80">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-sm-12">
                <div class="contact-btn-left wow fadeInLeft" data-wow-duration="3s ease-in-out">
                    <h2>We Shape your Dreams</h2>
                    <p style="text-align: justify;">Raees the best Architect agency perspiciatis unde omnis iste natus error sit volutatem accusantium doloremque  antium, totam rem aperiam perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vita </p>
                </div>
            </div>
                <div class="col-md-3 col-sm-12 wow fadeIn" data-wow-duration="5s ease-in-out">
                    <div class="contact-btn">
                        <p><a href="contact" class="btn btn-warning btn-lg">Contact Us</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section><br>

<div class="sectiontitle">
    <h2>Projects statistics</h2>
    <span class="headerLine"></span>
</div>
<section class="wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
    <div class="container">
        <div class="row">
            <!-- counter -->
            <div class="col-md-3 col-sm-6 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten animated" data-wow-duration="300ms" style="visibility: visible; animation-duration: 300ms; animation-name: fadeInUp;"> <i class="fa fa-beer medium-icon"></i> <span id="anim-number-pizza" class="counter-number"></span> <span class="timer counter alt-font appear" data-to="980" data-speed="7000">2800</span>
                <p class="counter-title">Beer Ordered</p>
            </div> <!-- end counter -->
            <!-- counter -->
            <div class="col-md-3 col-sm-6 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten animated" data-wow-duration="600ms" style="visibility: visible; animation-duration: 600ms; animation-name: fadeInUp;"> <i class="fa fa-heart medium-icon"></i> <span class="timer counter alt-font appear" data-to="980" data-speed="7000">980</span> <span class="counter-title">Happy Clients</span> </div> <!-- end counter -->
            <!-- counter -->
            <div class="col-md-3 col-sm-6 bottom-margin-small text-center counter-section wow fadeInUp xs-margin-bottom-ten animated" data-wow-duration="900ms" style="visibility: visible; animation-duration: 900ms; animation-name: fadeInUp;"> <i class="fa fa-anchor medium-icon"></i> <span class="timer counter alt-font appear" data-to="810" data-speed="7000">810</span> <span class="counter-title">Projects Completed</span> </div> <!-- end counter -->
            <!-- counter -->
            <div class="col-md-3 col-sm-6 text-center counter-section wow fadeInUp animated" data-wow-duration="1200ms" style="visibility: visible; animation-duration: 1200ms; animation-name: fadeInUp;"> <i class="fa fa-user medium-icon"></i> <span class="timer counter alt-font appear" data-to="600" data-speed="7000">600</span> <span class="counter-title">Clients Served</span> </div> <!-- end counter -->
        </div>
    </div>
</section><br>

@endsection