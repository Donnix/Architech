@extends('layouts.headft')
@section('content')
<style>
	section{
		margin-bottom: 50px; 
	}
	.hg{
		height: 300px;
	}
</style>
<section class="details-card pt-50">
    <div class="container">
    	<div class="section-title">
            <div class="row wow fadeIn" data-wow-duration="3s ease-in-out">
                <div class="col-xl-6 mx-auto text-center">
                    <div class="section-title">
                        <p>Choose</p>
                        <h4>What you role ?</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 wow fadeInUp sm-margin-bottom-ten animated" data-wow-duration="300ms">
                <!-- Single Service -->
                <div class="hg single-service">
                    <i class="fa fa-users"></i>
                    <h4>Home Owner</h4>
                    <p>I am interested in design, looking for home improvement services / suppliers.</p>
                    <div class="card-footer">
                    <button class="btn btn-warning" onclick="window.location.href='register'">Build Your Dreams</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 wow fadeInUp sm-margin-bottom-ten animated" data-wow-duration="600ms">
                <!-- Single Service -->
                <div class="hg single-service">
                    <i class="fa fa-user-o"></i>
                    <h4>Profesional</h4>
                    <p>I offer design, building or renovation services for architecture interiors home.</p>
                    <div class="card-footer">
                    <button class="btn btn-warning" onclick="window.location.href='register'">Get Oppurtunity</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>	

@endsection