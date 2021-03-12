<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Franjina ekonomija') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/fonts.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">


</head>
<body>

<!-- Header -->

<header class="my-auto">

  <!-- Topbar -->
  <div class="topbar-navbar">

    <!-- Container -->
    <div class="container">
      <div class="row py-2">

        <div class="col-12 col-md-6 col-lg-6 col-xl-2 align-self-center d-flex py-1">
          <img src="{{ asset('icons/Phone.svg') }}" class="img-fluid topbar-icons">
          <span class="text-white topbar-text ml-2">+ 385 95 123 456</span>
        </div>

        <div class="col-12 col-md-6 col-lg-6 col-xl-5 align-self-center d-flex justify-content-start justify-content-md-end justify-content-xl-start py-1">
          <img src="{{ asset('icons/Email.svg') }}" class="img-fluid topbar-icons my-0 py-0">
          <span class="text-white topbar-text ml-2">financial.education.eof@gmail.com</span>
        </div>

        <div class="col-12 col-md-6 col-lg-6 col-xl-2 align-self-center d-flex float-right py-1">
          <a href="" class="" ><img src="{{ asset('icons/instagram.svg') }}" class="img-fluid topbar-icons"></a>
          <a href="" class="ml-3"><img src="{{ asset('icons/facebook.svg') }}" class="img-fluid topbar-icons"></a>
          <a href="" class="ml-3"><img src="{{ asset('icons/youtube.svg') }}" class="img-fluid topbar-icons"></a>
        </div>

        <div class="col-12 col-md-6 col-lg-6 col-xl-3 align-self-center py-1">
 
          <div class="float-left float-md-right">
            <form class="form-inline">
              <div class="input-group">
                <input type="text" class="form-control rounded-0 border-0" placeholder="Pretraži" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append bg-danger"> 
                  <span class="input-group-text bg-white rounded-0 border-0" id="basic-addon2"><img src="{{ asset('icons/search.svg') }}"></span>
                </div>
              </div>
            </form>
          </div>

        </div>

      </div>
    </div>
    <!-- /.Container -->

  </div>

  <!-- /.Topbar -->

  <!-- Navbar -->

  <nav class="navbar navbar-expand-xl navbar-light py-2">
    <div class="container">
      <a class="navbar-brand bg-white p-3" href="#"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-sm-end" id="navbarText">
        <ul class="navbar-nav text-right">
          <li class="nav-item mr-3">
            <a class="nav-link active p-0" href="#"><span>Početna</span></a>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle p-0 mr-2" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span>O nama</span>
          </a> 
          <div class="dropdown-menu mt-3 border-0 rounded-0 shadow" aria-labelledby="navbarDropdown">
            <a class="dropdown-item pb-2" href="#"><span class="border-bottom pb-1">HUB Croatia</span></a>
            <a class="dropdown-item pb-2" href="#"><span class="border-bottom pb-1">Economy of Francesko</span></a>
            <a class="dropdown-item" href="#">EoF budi i Ti</a>
          </div>
        </li>        
        <li class="nav-item mr-3">
          <a class="nav-link p-0" href="#">
            <span>Projekti</span>
          </a> 
        </li>
        <li class="nav-item mr-3">
          <a class="nav-link p-0" href="#">
            <span>Aktivnosti</span>
          </a>
        </li>
        <li class="nav-item mr-3">
          <a class="nav-link p-0" href="#">
            <span>Podrška</span>
          </a>
        </li>
        <li class="nav-item mr-3">
          <a class="nav-link p-0" href="#">
            <span>Partneri</span>
          </a>
        </li>
        <li class="nav-item mr-3">
          <a class="nav-link p-0" href="#">
            <span>Blog</span>
          </a>
        </li>
        <li class="nav-item mr-3 mr-lg-0">
          <a class="nav-link p-0" href="#">
            <span>Kontakt</span>
          </a>
        </li>
        </ul>
      </div>
    </div>
  </nav> 

  <!-- /.Navbar -->

  
</header>

<!-- /.Header -->


<main>
  
  @yield('content')

</main>


<!-- Footer -->

<footer>
  
</footer>

<!-- /.Footer) -->

</body>
</html>
