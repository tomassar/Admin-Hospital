<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Vida Saludable</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +56932840219</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> contacto@hospital.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="{{url('/')}}"><span class="text-primary">Vida</span>-Saludable</a>

        <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Ingrese una palabra..." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/')}}">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">Acerca De</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="doctors.html">Doctores</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html">Noticias</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contacto</a>
            </li>

            @if(Route::has('login'))

            @auth
            <li class="nav-item">
            <a class="nav-link btn btn-sm btn-primary" href="{{url('myappointment')}}" style="color:white;">Mis Citas</a>
            </li>

            <x-app-layout>

            </x-app-layout>

            @else
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Iniciar Sesión</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Registrarse</a>
            </li>

            @endauth

            @endif
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>
  
    <div align='center' style='padding:70px;'>
        <table>
            <tr style='background-color:#5691838F ;'>
                <th style='padding:10px;font-size:20px;color:white;'>Nombre Doctor</th>
                <th style='padding:10px;font-size:20px;color:white;'>Fecha</th>
                <th style='padding:10px;font-size:20px;color:white;'>Mensaje</th>
                <th style='padding:10px;font-size:20px;color:white;'>Estado</th>
                <th style='padding:10px;font-size:20px;color:white;'>Cancelar Cita</th>
            </tr>
            @foreach($appoint as $appoints)
            <tr style='background-color:rgba(191, 191, 191, 0.5) ;' align='center'>
                <td style='padding:10px;font-size:15px;color:grey;'>{{$appoints->doctor}}</td>
                <td style='padding:10px;font-size:15px;color:grey;'>{{$appoints->date}}</td>
                <td style='padding:10px;font-size:15px;color:grey;'>{{$appoints->message}}</td>
                <td style='padding:10px;font-size:15px;color:grey;'>{{$appoints->status}}</td>
                <td style='padding:10px;font-size:15px;color:grey;'><a class="btn btn-sm btn-danger" href="{{url('cancel_appointment',$appoints->id)}}" onclick="return confirm('¿Estás seguro?')" >Cancelar</a></td>
            </tr>

            @endforeach
        </table>
    </div>
<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>