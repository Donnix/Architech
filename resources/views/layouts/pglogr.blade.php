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

   <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
   <script src="{{asset('js/stylejs.js')}}"></script>

</head>
<body>
<div class="sidenav">
         <div class="login-main-text">
            <h2>Application<br> Login Page <a href="/">Home</a></h2> 
            <p><a href="login">Login</a> or <a href="register">Register</a> from here to access.</p>
         </div>
      </div>
      <div class="main wow fadeInLeft" data-wow-duration="2s ease-out">
          @yield('content')             
      </div>
</body>

<script type="text/javascript">
    function ShowHideDiv() {
        var id_level = document.getElementById("id_level");
        var jumlah_perkerja = document.getElementById("jumlah_perkerja");
        jumlah_perkerja.style.display = id_level.value == "2" ? "block" : "none";
       
        if(id_level.value == "2"){
         value.jumlah_perkerja = console.log(1);
        }
    }
</script>
</html>
