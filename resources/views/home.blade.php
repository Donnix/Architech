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
                <h1>First slide label</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <img src="img/aa.jpg" alt="First Slide">
            </div>
            <div class="carousel-item">
                <div class="carousel-caption d-none d-md-block">
                <h1>Second slide label</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <img src="img/15.jpg" alt="First Slide">
            </div>
            <div class="carousel-item">
                <div class="carousel-caption d-none d-md-block">
                <h1>Third slide label</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <img src="img/14.jpeg" alt="First Slide">
            </div>
        </div>
        <!-- Carousel controls -->
        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev"></a>
        <a class="carousel-control-next" href="#myCarousel" data-slide="next"></a>
    </div><br>
    
    
<div class="container">
    
    <div class="jumbotron" style="background-color: ">
        <h1>Learn to Create Websites</h1>
        <p class="lead">In today's world internet is the most popular way of connecting with the people. At <a href="https://www.tutorialrepublic.com" target="_blank">tutorialrepublic.com</a> you will learn the essential web development technologies along with real life practice examples, so that you can create your own website to connect with the people around the world.</p>
        <p><a href="https://www.tutorialrepublic.com" target="_blank" class="btn btn-success btn-lg">Get started today</a></p>
    </div>
</div>    
    
<div class="container">
    <section id="projects" class="projects-section bg-light">
    <div class="container">

      <!-- Featured Project Row -->
      <div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <div class="col-xl-8 col-lg-7">
          <img class="img-fluid mb-3 mb-lg-0" src="img/ads.jpg" alt="">
        </div>
        <div class="col-xl-4 col-lg-5">
          <div class="featured-text text-center text-lg-left">
            <h4>Shoreline</h4>
            <p class="text-dark-50 mb-0" style="text-align: justify;">Grayscale is open source and MIT licensed. This means you can use it for any project - even commercial projects! Download it, customize it, and publish your website!</p>
          </div>
        </div>
      </div>

      <!-- Project One Row -->
      <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
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
      <div class="row justify-content-center no-gutters">
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

<section class="contactus-btn bg-warning bg-overlay-1 ptb-80">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-sm-12">
                <div class="contact-btn-left">
                    <h2>We Shape your Dreams</h2>
                    <p>Raees the best Architect agency perspiciatis unde omnis iste natus error sit volutatem accusantium doloremque  antium, totam rem aperiam perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vita </p>
                </div>
            </div>
                <div class="col-md-3 col-sm-12">
                    <div class="contact-btn">
                        <p><a href="#" class="btn btn-warning btn-lg">Contact Us</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section><br>

    <div class="about-us ptb-110">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="about-desc">
                            <h2>about us</h2>
                            <h5>we are a studio located in usa </h5>
                            <div class="about-content" style="text-align: justify;">
                                <p class="text1">
                                    Lorem ipsum dolor sit amet, conse ctetur adip isicing elit, sed do eiusmod yth tempor incididunt ut labore et dolore magna aliqua. Ut hyyenim ad minimthy veniam, quis nostrud exercitation ullamco accusanest, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
                                </p>
                                <p class="text2">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod mpor incididunt ut labore et dolore magna aliqua. 
                                </p>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="about-img" style="height: 100%; width: 100%;">
                            <img src="img/1q.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div><br>

@endsection