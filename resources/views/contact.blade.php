

<head>
    <link rel="stylesheet" type="text/css" href="{{asset('css/stylct.css')}}">
</head>

@extends('layouts.headft')
@section('content')

<section class="banner_area" data-stellar-background-ratio="0.5">
    <h2>CONTACT US</h2>
    <ol class="breadcrumb"></ol>
</section>

<div class="contact_map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.0084264451416!2d106.84164434904177!3d-6.64587406678978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c89505b4c37d%3A0x307fc4a38e65fa2b!2sSMK%20Wikrama%20Bogor!5e0!3m2!1sid!2sid!4v1580976207702!5m2!1sid!2sid" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</div>
<br><br>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{url('/contact') }}" method="POST">
                @csrf
                <input type="text" class="form-control is-" name="nama"  placeholder="Name" /><br/>
                <input type="number" class="form-control"  name="telepon" placeholder="Phone" /><br/>
                <input type="text" class="form-control" name="email" placeholder="E-mail" /><br/>
                <textarea class="form-control" name="saran" placeholder="Suggestions" style="height:150px;"></textarea><br/>
                <button class="btn btn-warning" type="submit">Submit</button>
                <br/><br/>
            </form>
        </div>
        <div class="col-md-4">
            <b>CONTACT INFO:</b> <br/>
            Bandung : Jl. Raya Wangun No.21, Sindangsari, Kec. Bogor Tim., Kota Bogor, Jawa Barat 16146<br/>
            Phone: +62 896 4370 6807<br/>
            E-mail: <a href="" style="color: black;">architect@gmail.com</a><br/>
            <br/>
            Bogor : Jl. Raya Wangun No.21, Sindangsari, Kec. Bogor Tim., Kota Bogor, Jawa Barat 16146<br/>
            Phone: +62 896 4370 6807<br/>
            E-mail: <a href="" style="color: black;">architect@gmail.com</a><br/>
            <br>
            Yogyakarta : Jl. Raya Wangun No.21, Sindangsari, Kec. Bogor Tim., Kota Bogor, Jawa Barat 16146<br/>
            Phone: +62 896 4370 6807<br/>
            E-mail: <a href="" style="color: black;">architect@gmail.com</a><br/>
        </div>
    </div>
</div>
<br><br>

@endsection

