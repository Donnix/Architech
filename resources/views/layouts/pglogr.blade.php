<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <title>LOGIN || ARCHITECTURE</title>

   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
   <!------ Include the above in your HEAD tag ---------->

   <link rel="stylesheet" type="text/css" href="{{asset('css/styllr.css')}}">
   <script src="{{asset('js/stylejs.js')}}"></script>
</head>
<body>
   <div class="sidenav">
      <div class="login-main-text">
         <a href="/"><img src="img/logo.png"></a> 
         <p><a href="login">Login</a> or <a href="register">Register</a> from here to access.</p>
      </div>
   </div>
   <div class="main wow fadeInLeft" data-wow-duration="2s ease-out">
      @yield('content')             
   </div>
</body>

<script type="text/javascript">
    function ShowHideDiv() {
        var level = document.getElementById("level");
        var jumlah_perkerja = document.getElementById("jumlah_perkerja");
        jumlah_perkerja.style.display = level.value == "2" ? "block" : "none";
       
        if(level.value == "2"){
         value.jumlah_perkerja = console.log(1);
        }
    }
</script>
</html>
