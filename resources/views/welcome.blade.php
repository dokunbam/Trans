<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Transcribe</title>

  <!-- PAGE settings -->
        <link rel="icon" href="">
        <meta name="description" content="Transcribe Everything">
        <meta name="keywords" content="">
  
  <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        
   <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/animate-in.js') }}" defer></script>
        <script src="{{ asset('js/navbar-ontop.js') }}" defer></script>
        <script src="{{ asset('js/smooth-scroll.js') }}" defer></script>


    <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
        <link href="{{ asset('css/trans.css') }}" rel="stylesheet">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body class="text-center">
    <nav class="navbar navbar-expand-md fixed-top bg-dark navbar-dark navbar-ontop">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item mx-2">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#speakers">Blog</a>
          </li>
           <!-- login and register -->
        
          @if (Route::has('login'))
          @auth
          <li class="nav-item mx-2">
            <a class="nav-link" href="{{ url('/home') }}">Dashboard</a>
          </li>
          @else
          <a class="nav-link"  href="{{ route('login') }}">sign in</a>
        </ul>
        <a class="btn navbar-btn mx-2 text-white btn-outline-light" href="{{ route('register') }}">Register now</a>
      </div>
      @endauth
    </div>
    @endif
  </nav>
 
<!--<div class="content">-->
<!-- Cover -->
  <div class="d-flex align-items-center section-aquamarine py-5 cover" style="background-image: url(&quot;assets/conference/cover.jpg&quot;);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <form class="form-inline w-100">
            <div class="input-group w-100 rounded">
              <input type="search" class="form-control" id="inlineFormInputGroup" placeholder="Search" style="	box-shadow: 0px 0px 4px  black;">
              <div class="input-group-append"><button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button></div>
            </div>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 text-white mt-5">
          <h1 class="display-2 d-none d-md-block">Transcribe Everything</h1>
          <h1 class="display-4 d-block d-md-none" style="">Conference Pingendo</h1>
          <a href="#register" class="btn btn-lg mt-4 btn-outline-light">Register now</a><i class="d-block fa fa-angle-down pt-5 fa-3x"></i>
        </div>
      </div>
    </div>
  </div>
  <!-- Parallax section -->
  <div class="py-5 section-parallax" style="background-image: url(&quot;assets/conference/venue.jpg&quot;);">
    <div class="container my-5 bg-light p-4">
      <div class="row mx-auto">
        <div class="col-md-12">
          <h1 class="mb-3">Get More</h1>
          <form class="form-inline w-100">
            <div class="input-group w-100 input-group-lg">
              <input type="text" class="form-control" placeholder="Your e-mail">
              <div class="input-group-append"><button class="btn btn-primary" type="button">Subscribe</button></div>
            </div>
          </form>
          <p class="">List of Trending videos delivered, No ads, no spam</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Speakers -->
  <div class="py-5 bg-light" id="speakers">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <h1>Testimonies</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-6 col-lg-4 animate-in-left">
          <a href="#">
            <img src="assets/conference/people_1.jpg" class="center-block img-fluid my-3 rounded-circle" width="300">
            <h3 class="mb-0"><b>Matthew Jong</b></h3>
            <p class="text-muted">UI designer</p>
          </a>
        </div>
        <div class="col-6 col-lg-4">
          <a href="#">
            <img src="assets/conference/people_2.jpg" class="center-block img-fluid my-3 rounded-circle" width="300">
            <h3 class="mb-0"><b>Anna da Vinci</b></h3>
            <p class="text-muted">UX/UI designer</p>
          </a>
        </div>
        <div class="col-6 col-lg-4 animate-in-right">
          <a href="#">
            <img src="assets/conference/people_3.jpg" class="center-block img-fluid my-3 rounded-circle" width="300">
            <h3 class="mb-0"><b>Michael Philips</b></h3>
            <p class="text-muted">UX designer</p>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- Schedule -->
  <div class="py-5 section-parallax" style="background-image: url(&quot;assets/conference/schedule.jpg&quot;);" id="schedule">
    <div class="container section-aquamarine">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-white mt-4">Pricing</h1>
        </div>
      </div>
      <div class="row text-left text-dark">
        <div class="p-4 col-lg-4 col-md-6">
          <div class="card">
            <div class="card-block text-center card-primary p-2">
              <h2>Free</h2>
              <p class="lead">Prototype</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;09:30-10:00 –&nbsp;<b>New</b></li>
              <li class="list-group-item"><i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;16:00-18:00 –&nbsp;<b>Works</b></li>
            </ul>
          </div>
        </div>
        <div class="p-4 col-lg-4 col-md-6">
          <div class="card">
            <div class="card-block text-center card-primary p-2">
              <h2>Gold</h2>
              <p class="lead">Design</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;09:30-10:00 –&nbsp;<b>Guests</b></li>
              <li class="list-group-item"><i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;16:00-18:00 –&nbsp;<b>Party!</b></li>
            </ul>
          </div>
        </div>
        <div class="p-4 col-lg-4">
          <div class="card text-dark">
            <div class="card-block text-center p-2">
              <h2>Diamond</h2>
              <p class="lead">Publish</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;09:30-10:00 –&nbsp;<b>WBN</b></li>
              <li class="list-group-item"><i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;16:00-18:00 –&nbsp;<b>Party!</b></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Sponsor logos -->
  <div class="py-5 section bg-faded bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="mb-4">Sponsors</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 col-6">
          <img class="center-block img-fluid d-block" src="assets/conference/logo_1.png"> </div>
        <div class="col-md-3 col-6">
          <img class="center-block img-fluid d-block" src="assets/conference/logo_4.png"> </div>
        <div class="col-md-3 col-6">
          <img class="center-block img-fluid d-block" src="assets/conference/logo_3.png"> </div>
        <div class="col-md-3 col-6">
          <img class="center-block img-fluid d-block" src="assets/conference/logo_2.png"> </div>
      </div>
    </div>
  </div>
  <!-- Call to action -->
  <div class="py-5 section-aquamarine" id="register">
    <div class="container">
      <div class="row">
        <div class="col-md-8 text-md-left text-center">
          <h1 class="text-white">Registrations is free</h1>
          <p>Pre-register to get a priority access to the event. Fares will be published later on.&nbsp; <br>Get the maximum from the lectures together with the possibility of joining exclusive side-events.</p>
        </div>
        <div class="col-md-4 align-self-center animate-in-right">
          <a href="#" class="btn btn-lg btn-light my-3">Register now</a>
        </div>
      </div>
    </div>
  </div>

           <!-- </div>-->
        
    <footer class="text-md-left text-center p-4 bg-dark text-light">
          @include('includes.footer-welcome') 
    </footer>
    </body>
</html>
