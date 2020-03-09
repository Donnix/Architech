

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
                <h1 class="wow slideInRight" data-wow-duration="2s ease-in">Welcome to Our ArchiTech</h1>
                <p class="wow slideInLeft" data-wow-duration="2s ease">Building Renovating and Designing</p>
            </div>
            <img src="img/aa.jpg" alt="First Slide">
        </div>
        <div class="carousel-item">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="wow slideInUp" data-wow-duration="4s ease">Looking for Dream House</h1>
                <p class="wow fadeInDown" data-wow-duration="4s ease-out">Design That Satisfies Eyesight</p>
            </div>
            <img src="img/15.jpg" alt="First Slide">
        </div>
        <div class="carousel-item">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="wow fadeInUp" data-wow-duration="4s ease">Work for Happiness</h1>
                <p class="wow fadeInUp" data-wow-duration="2s ease-in-out">Fast Neat Without Constraints</p>
            </div>
            <img src="img/14.jpeg" alt="First Slide">
        </div>
    </div>
    <!-- Carousel controls -->
    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev"></a>
    <a class="carousel-control-next" href="#myCarousel" data-slide="next"></a>
</div>
<br><br><br>

<div class="how-section1">
    <div class="row">
        <div class="col-md-6 how-img wow slideInLeft" data-wow-duration="3s ease-in">
            <img src="img/1g.png" class="rounded-circle img-fluid" alt=""/>
        </div>
        <div class="col-md-6 wow slideInUp" data-wow-duration="2s ease-in">
            <h4>Find rewarding projects</h4>
            <h4 class="subheading text-justify">GetLance is a great place to find more clients, and to run and grow your own freelance business.</h4>
            <p class="text-muted text-justify">Freedom to work on ideal projects. On GetLance, you run your own business and choose your own clients and projects. Just complete your profile and we’ll highlight ideal jobs. Also search projects, and respond to client invitations.
                Wide variety and high pay. Clients are now posting jobs in hundreds of skill categories, paying top price for great work.
                More and more success. The greater the success you have on projects, the more likely you are to get hired by clients that use GetLance.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 wow slideInUp" data-wow-duration="2s ease-in">
            <h4>Get hired quickly</h4>
            <h4 class="subheading text-justify">GetLance makes it easy to connect with clients and begin doing great work.</h4>
            <p class="text-muted text-justify">Streamlined hiring. GetLance’s sophisticated algorithms highlight projects you’re a great fit for.
                Top Rated and Rising Talent programs. Enjoy higher visibility with the added status of prestigious programs.
                Do substantial work with top clients. GetLance pricing encourages freelancers to use GetLance for repeat relationships with their clients.
            </p>
        </div>
        <div class="col-md-6 how-img wow slideInRight" data-wow-duration="3s ease-in">
            <img src="img/2g.png" class="rounded-circle img-fluid" alt=""/>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 how-img wow slideInLeft" data-wow-duration="3s ease-in">
            <img src="img/3g.png" class="rounded-circle img-fluid" alt=""/>
        </div>
        <div class="col-md-6 wow slideInUp" data-wow-duration="2s ease-in">
            <h4>Work efficiently, effectively.</h4>
            <h4 class="subheading text-justify">With GetLance, you have the freedom and flexibility to control when, where, and how you work. Each project includes an online workspace shared by you and your client, allowing you to:</h4>
            <p class="text-muted text-justify">Send and receive files. Deliver digital assets in a secure environment.
                Share feedback in real time. Use GetLance Messages to communicate via text, chat, or video.
                Use our mobile app. Many features can be accessed on your mobile phone when on the go.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 wow slideInUp" data-wow-duration="2s ease-in">
            <h4>Get paid on time</h4>
            <h4 class="subheading text-justify">All projects include GetLance Payment Protection — helping ensure that you get paid for all work successfully completed through the freelancing website.</h4>
            <p class="text-muted text-justify">All invoices and payments happen through GetLance. Count on a simple and streamlined process.
                Hourly and fixed-price projects. For hourly work, submit timesheets through GetLance. For fixed-price jobs, set milestones and funds are released via GetLance escrow features.
                Multiple payment options. Choose a payment method that works best for you, from direct deposit or PayPal to wire transfer and more.
            </p>
        </div>
        <div class="col-md-6 how-img wow slideInRight" data-wow-duration="3s ease-in">
            <img src="img/4g.png" class="rounded-circle img-fluid" alt=""/>
        </div>
    </div>
</div>

<section class="services pt-4 wow fadeIn" data-wow-duration="3s ease-in-out" id="services">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 mx-auto text-center">
                <div class="section-title mb-100">
                    <p>what i can do</p>
                    <h4>our services</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 wow fadeInUp sm-margin-bottom-ten animated" data-wow-duration="300ms">
                <!-- Single Service -->
                <div class="single-service">
                    <i class="fa fa-user"></i>
                    <h4>Architech</h4>
                    <p>The architect is an expert in the field of architecture, a design engineer or an expert in the built environment.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp sm-margin-bottom-ten animated" data-wow-duration="600ms">
                <!-- Single Service -->
                <div class="single-service">
                    <i class="fa fa-magic"></i>
                    <h4>Home Design</h4>
                    <p>Various types of home architecture that are very popular today.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp sm-margin-bottom-ten animated" data-wow-duration="900ms">
                <!-- Single Service -->
                <div class="single-service">
                    <i class="fa fa-archive"></i>
                    <h4>Furniture Design</h4>
                    <p>Very cleverly designed, being the key to success creating a comfortable and stylish home atmosphere.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp sm-margin-bottom-ten animated" data-wow-duration="1200ms">
                <!-- Single Service -->
                <div class="single-service">
                    <i class="fa fa-gears"></i>
                    <h4>Materials</h4>
                    <p>Material is a substance or object from which something can be made from it, or items needed to make something.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp sm-margin-bottom-ten animated" data-wow-duration="1500ms">
                <!-- Single Service -->
                <div class="single-service">
                    <i class="fa fa-pencil"></i>
                    <h4>Repairs</h4>
                    <p>Repair and beautify residential interiors</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp sm-margin-bottom-ten animated" data-wow-duration="1800ms">
                <!-- Single Service -->
                <div class="single-service">
                    <i class="fa fa-fa fa-lightbulb-o"></i>
                    <h4>Planning</h4>
                    <p>Process of thinking about the activities required to achieve a desired goal.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<br>

<section class="contactus-btn bg-warning bg-overlay-1 ptb-80">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-sm-12">
                <div class="contact-btn-left wow fadeInLeft" data-wow-duration="3s ease-in-out">
                    <h2>We Shape your Dreams</h2>
                    <p style="text-align: justify;">Your dream comes true, we are ready to serve for renovation and building a strategic home and also a solid foundation with the best design that can satisfy your eyesight </p>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 wow fadeIn" data-wow-duration="5s ease-in-out">
                <div class="contact-btn">
                    <p><a href="contact" class="btn btn-warning btn-lg">Contact Us</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="section pt-4">
    <div class="container pt-50 pb-50" style="padding-bottom: 90px;">
        <div class="row">
            <div class="col-xl-6 mx-auto text-center wow fadeIn" data-wow-duration="3s ease-in-out">
                <div class="section-title mb-100" style="color: white;">
                    <p>what i can do</p>
                    <h4>our project</h4>
                </div>
            </div>
        </div>
        <div class="portfolio-menu mt-2 mb-4 wow fadeInDown" data-wow-duration="3s ease-in-out">
            <ul>
                <li class="btn btn-outline-light active" data-filter="*">All</li>
                <li class="btn btn-outline-light" data-filter=".gts">Process</li>
                <li class="btn btn-outline-light text" data-filter=".selfie">Planning</li>
            </ul>
        </div>
        <div class="portfolio-item row wow fadeInUp" data-wow-duration="3s ease-in-out">
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                <img class="img-fluid" src="img/ars.jpg" alt="">
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                <img class="img-fluid" src="img/assd.jfif" alt="">
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                <img class="img-fluid" src="img/ar.jfif"alt=" ">
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                <img class="img-fluid" src="img/16.jpg" alt="">
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                <img class="img-fluid" src="img/13.jpg" alt="">
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                <img class="img-fluid" src="img/dddd.jpg" alt="">
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                <img class="img-fluid" src="img/dw.jpg" alt="">
            </div>
        </div>
    </div>
</div>

<section class="cntr bg-warning bg-overlay-1 ptb-80 wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
    <div class="container">
        <div class="row">
            <!-- counter -->
            <div class="col-md-3 col-sm-6 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten animated" data-wow-duration="300ms" style="visibility: visible; animation-duration: 300ms; animation-name: fadeInUp;">
                <i class="fa fa-beer medium-icon"></i> <span id="anim-number-pizza" class="counter-number"></span> <span class="timer counter alt-font appear" data-to="980" data-speed="10000000000">700</span>
                <p class="counter-title">Total Design</p>
            </div>
            <!-- end counter -->
            <!-- counter -->
            <div class="col-md-3 col-sm-6 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten animated" data-wow-duration="600ms" style="visibility: visible; animation-duration: 600ms; animation-name: fadeInUp;"> <i class="fa fa-heart medium-icon"></i> <span class="timer counter alt-font appear" data-to="980" data-speed="10000000000">750</span> <span class="counter-title">Happy Clients</span> </div>
            <!-- end counter -->
            <!-- counter -->
            <div class="col-md-3 col-sm-6 bottom-margin-small text-center counter-section wow fadeInUp xs-margin-bottom-ten animated" data-wow-duration="900ms" style="visibility: visible; animation-duration: 900ms; animation-name: fadeInUp;"> <i class="fa fa-anchor medium-icon"></i> <span class="timer counter alt-font appear" data-to="810" data-speed="10000000000">930</span> <span class="counter-title">Projects Completed</span> </div>
            <!-- end counter -->
            <!-- counter -->
            <div class="col-md-3 col-sm-6 text-center counter-section wow fadeInUp animated" data-wow-duration="1200ms" style="visibility: visible; animation-duration: 1200ms; animation-name: fadeInUp;"> <i class="fa fa-user medium-icon"></i> <span class="timer counter alt-font appear" data-to="600" data-speed="10000000000">800</span> <span class="counter-title">Award Win</span> </div>
            <!-- end counter -->
        </div>
    </div>
</section>
<br><br>

<section class="details-card">
    <div class="container">
        <div class="section-title">
            <div class="row wow fadeIn" data-wow-duration="3s ease-in-out">
                <div class="col-xl-6 mx-auto text-center">
                    <div class="section-title mb-100">
                        <p>what i can do</p>
                        <h4>Our Workers</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card-content wow fadeInUp sm-margin-bottom-ten animated" data-wow-duration="300ms">
                    <div class="card-img">
                        <img src="img/p.jpg" alt="">
                        <span>
                            <h4>Architect</h4>
                        </span>
                    </div>
                    <div class="card-desc">
                        <h3>Info Name</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis
                            voluptas totam
                        </p>
                        <a href="detail" class="btn-card">Read</a>   
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-content wow fadeInUp sm-margin-bottom-ten animated" data-wow-duration="900ms">
                    <div class="card-img">
                        <img src="img/k.jpg" alt="">
                        <span>
                            <h4>Architect</h4>
                        </span>
                    </div>
                    <div class="card-desc">
                        <h3>Info Name</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis
                            voluptas totam
                        </p>
                        <a href="detail" class="btn-card">Read</a>   
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-content wow fadeInUp sm-margin-bottom-ten animated" data-wow-duration="1200ms">
                    <div class="card-img">
                        <img src="img/kp.jpg" alt="">
                        <span>
                            <h4>Architect</h4>
                        </span>
                    </div>
                    <div class="card-desc">
                        <h3>Info Name</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis
                            voluptas totam
                        </p>
                        <a href="detail" class="btn-card">Read</a>   
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br><br>

<section class="contactus-btn bg-warning bg-overlay-1 ptb-80" style="padding: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-sm-12">
                <div class="contact-btn-left wow fadeInLeft" data-wow-duration="3s ease-in-out">
                    <h2>We Shape your Dreams</h2>
                    <p style="text-align: justify;">Your dream comes true, we are ready to serve for renovation and building a strategic home and also a solid foundation with the best design that can satisfy your eyesight </p>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 wow fadeIn" data-wow-duration="5s ease-in-out">
                <div class="contact-btn">
                    <p><a href="architect" class="btn btn-warning btn-lg">See More</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container pt-100 pb-50">
    <div class="section-title wow fadeIn" data-wow-duration="3s ease-in-out">
        <div class="row">
            <div class="col-xl-6 mx-auto text-center">
                <div class="section-title mb-10">
                    <p>what i can do</p>
                    <h4>Team Other</h4>
                </div>
            </div>
        </div>
    </div>
    <section class="customer-logos slider wow fadeInLeft" data-wow-duration="3s ease-in-out">
        <div class="slide"><img src="img/t1.png"></div>
        <div class="slide"><img src="img/t2.jfif"></div>
        <div class="slide"><img src="img/t3.jfif"></div>
        <div class="slide"><img src="img/t4.jfif"></div>
        <div class="slide"><img src="img/t5.png"></div>
        <div class="slide"><img src="img/t6.png"></div>
        <div class="slide"><img src="img/t7.png"></div>
        <div class="slide"><img src="img/t8.png"></div>
        <div class="slide"><img src="img/t9.png"></div>
        <div class="slide"><img src="img/t10.png"></div>
    </section>
</div>
<br>

@endsection

