<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/svg" sizes="16x16" href="{{ asset('images/logo/main-logo.svg') }}">

    <title>@yield('title')</title>

    <meta name="csrf-token" content="{{ csrf_token() }}" /> 

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/fonts.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
    <link href="{{ asset('css/style.css') }}" rel="stylesheet"> 

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>   
    
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    @yield('links')

</head>
<body>

<!-- Header -->

<header class="my-auto">

  <!-- Topbar -->
  <div class="topbar-navbar d-none d-lg-block">

    <!-- Container -->
    <div class="container">
      <div class="row py-2">

        <div class="col-12 col-md-6 col-lg-6 col-xl-2 align-self-center d-flex py-1">
          <img src="{{ asset('icons/common/phone.svg') }}" class="img-fluid topbar-icons">
          <a class="text-white topbar-text ml-2 text-decoration-none" href="tel:+38548682847">+385 48 682 847</a>
        </div>

        <div class="col-12 col-md-6 col-lg-6 col-xl-5 align-self-center d-flex justify-content-start justify-content-md-end justify-content-xl-start py-1">
          <img src="{{ asset('icons/common/email.svg') }}" class="img-fluid topbar-icons my-0 py-0">
          <span><a href="mailto:hub@franjinaekonomija.hr" class="text-white topbar-text ml-2 text-decoration-none">hub@franjinaekonomija.hr</a></span>
        </div>

        <div class="col-12 col-md-6 col-lg-6 col-xl-2 align-self-center d-flex float-right py-1">
          <a  href="https://www.instagram.com/franjinaekonomijahrvatska/" target="_blank" class="" ><img src="{{ asset('icons/header/instagram.svg') }}" class="img-fluid topbar-icons"></a>
          <a href="https://www.facebook.com/Franjina-Ekonomija-Hrvatska-114169500480550/" target="_blank" class="ml-3"><img src="{{ asset('icons/header/facebook.svg') }}" class="img-fluid topbar-icons"></a>
          <a href="https://www.youtube.com/channel/UCkA1mEWmqGLxXfKrRbfqaFQ" class="ml-3"><img src="{{ asset('icons/header/youtube.svg') }}" class="img-fluid topbar-icons"></a>
        </div>

        <div class="col-12 col-md-6 col-lg-6 col-xl-3 align-self-center py-1">
 
          <div class="float-left float-md-right">
            <form class="form-inline" action="{{ Route('searchResults') }}" method="GET">
              <div class="input-group">
                <input id="search_text" name="search_text" type="text" class="form-control rounded-0 border-0" placeholder="Pretraži" aria-label="Recipient's username" required aria-describedby="basic-addon2">
                <div class="input-group-append bg-danger"> 
                  <button class="btn px-3 input-group-text bg-white rounded-0 border-0" type="submit" id="basic-addon2">
                    <span><img src="{{ asset('icons/header/search.svg') }}"></span>
                  </button>
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

  <nav class="navbar navbar-expand-xl navbar-light bg-white py-2" id="navbar">
    <div class="container">
      <a class="navbar-brand bg-white" href="{{ __('/')}}"><img src="{{ asset('images/logo/header-logo.svg') }}" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-sm-end" id="navbarText">
        <ul class="navbar-nav text-right">

          @if (Route::has('index'))
          <li class="nav-item mr-3">
            <a class="nav-link p-0 {{ Route::currentRouteNamed('index') ? 'active' : '' }}" href="{{ __('/')}}" id="home"><span>Početna</span></a>
          </li>
          @endif

          @if (Route::has('about'))
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle p-0 mr-2 {{ Route::currentRouteNamed('about') ? 'active' : '' }}" href="#" id="about" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span>O nama</span>
          </a> 
          <div class="dropdown-menu mt-3 border-0 rounded-0 shadow" aria-labelledby="navbarDropdown">
            <a class="dropdown-item pb-2" href="{{ Route::currentRouteNamed('about') ? route('about',['#1']) : route('about') }}"><span class="border-bottom pb-1">Economy of Francesco</span></a>
            <a class="dropdown-item pb-2" href="{{ route('about',['#2']) }}"><span class="border-bottom pb-1">HUB Croatia</span></a>
            <a class="dropdown-item" href="{{ route('about',['#3']) }}">EoF budi i Ti</a>
          </div>
          </li>        
          @endif

          @if (Route::has('projects') && $projects_sum > 0)
            <li class="nav-item mr-3">
              <a class="nav-link p-0 {{ Route::currentRouteNamed('projects') ? 'active' : '' }}" href="{{ route('projects') }}">
                <span>Projekti</span>
              </a> 
            </li>
          @endif

          @if (Route::has('activities'))
          <li class="nav-item mr-3">
            <a class="nav-link p-0 {{ Route::currentRouteNamed('activities') ? 'active' : '' }}" href="{{ route('activities') }}">
              <span>Aktivnosti</span>
            </a>
          </li>
          @endif

          @if (Route::has('support'))
          <li class="nav-item mr-3">
            <a class="nav-link p-0 {{ Route::currentRouteNamed('support') ? 'active' : '' }}" href="{{ route('support')}}">
              <span>Podrška</span>
            </a>
          </li>
          @endif

          @if (Route::has('partners'))
          <li class="nav-item mr-3">
            <a class="nav-link p-0 {{ Route::currentRouteNamed('partners') ? 'active' : '' }}" href="{{ route('partners') }}" id="partners">
              <span>Partneri</span>
            </a>
          </li>
          @endif

          @if (Route::has('blog'))
          <li class="nav-item mr-3">
            <a class="nav-link p-0 {{ Route::currentRouteNamed('blog') ? 'active' : '' }}" href="{{ route('blog') }}">
              <span>Blog</span>
            </a>
          </li>
          @endif

          @if (Route::has('contact'))
          <li class="nav-item mr-3 mr-xl-0">
            <a class="nav-link p-0 {{ Route::currentRouteNamed('contact') ? 'active' : '' }}" href="{{ route('contact') }}" id="contact">
              <span>Kontakt</span>
            </a>
          </li>
          @endif

        </ul> 
        <form class="form-inline float-right border mr-3 mt-2 d-block d-lg-none" action="{{ Route('searchResults') }}" method="GET">
          <div class="input-group">
            <input id="search_text" name="search_text" type="text" class="form-control rounded-0 border-0" placeholder="Pretraži" aria-label="Recipient's username" required aria-describedby="basic-addon2">
            <div class="input-group-append bg-danger"> 
              <button class="btn px-3 input-group-text bg-white rounded-0 border-0" type="submit" id="basic-addon2">
                <span><img src="{{ asset('icons/header/search.svg') }}"></span>
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </nav> 

  <!-- /.Navbar -->

  
</header>

<!-- /.Header -->


<main class="mobile-margin">
  
  @yield('content')

</main>


<!-- Footer -->
<footer>

  <!-- Container -->
  <div class="container">

    <!-- Row -->
    <div class="row footer-top">
      
      <div class="col-xl-8">
          
          <div class="row">
            

            <div class="col-12 col-sm-7 mt-3 mt-sm-5">
              <h3 class="text-white ml-5 mt-5 mt-lg-0 font-weight-bold">Naš ured</h2>

              <div class="d-flex align-items-center justify-content-start mt-3 mt-sm-5">
                <div class="">
                  <img src="{{ asset('icons/footer/location.svg') }}" class="footer-icon">
                </div>

                <div class="ml-4">
                  <h4 class="text-white">Adresa</h4>
                  <a class="mt-2 text-white h5 text-decoration-none" href="https://goo.gl/maps/U2tSoQBY9m2Kf7ibA" target="_blank">Udruga za ekonomiju zajedništva
                  <br>Franje Račkog 26, 48260 Križevci, Hrvatska</a>
                </div>
              </div>

              <div class="d-flex align-items-center justify-content-start mt-3 mt-sm-5">
                <div>
                  <img src="{{ asset('icons/common/phone.svg') }}" class="footer-icon">
                </div>

                <div class="ml-4">
                  <h4 class="text-white">Broj telefona</h4>
                  <a href="tel:+38548682847" class="text-decoration-none h5 mt-2 text-white">Tel. +385 48 682 847</a><br>
                  <a href="tel:+385976376409" class="text-decoration-none h5 mt-2 text-white">Mob. +385 97 123 456</a><br>
                  <a href="tel:+385958088189" class="text-decoration-none h5 mt-2 text-white">Mob. +385 95 808 8189</a>
                </div>
              </div>

              <div class="d-flex align-items-center mt-3 mt-sm-5">
                <div>
                  <img src="{{ asset('icons/common/email.svg') }}" class="footer-icon">
                </div>

                <div class="ml-4">
                  <h4 class="text-white">Email</h4>
                  <a href="mailto:hub@franjinaekonomija.hr" class="text-decoration-none text-break text-white mt-2 h5">hub@franjinaekonomija.hr</a>
                </div>
              </div>
            </div>

            <div class="col-12 col-sm-5 mt-5 d-flex align-items-center justify-content-center">
              <img src="{{ asset('images/logo/main-logo.svg') }}" class="footer-logo mb-0 mb-sm-5">
            </div>

          </div> 

      </div>

      <div class="col-xl-4 text-center newsletter">
        
        <h4 class="text-white mt-5 font-weight-bold">Newsletter</h4>

        <p class="mt-4 text-white text-left">Prijavite se na naš newsletter da dobijete više besplatnih savjeta. 
          <br>Bez neželjene pošte. Obećavamo! 
        </p>

        <div>
          <form action="{{ Route('newsletter.subscribe') }}" method="POST" id="subscribe-form" autocomplete="off">
            @csrf
            <div class="form-group w-100">
              <input type="text" class="form-control rounded-0 border-0 h-auto py-3" id="subscriber_email" name="subscriber_email" placeholder="Email" required>
              <input type="hidden" value="{{ Route::currentRouteName() }}" name="route" id="route">
            </div>
            <button type="submit" disabled style="display: none" aria-hidden="true"></button>
            <button class="btn text-uppercase w-auto px-5 py-2 rounded-0 text-white" type="button" id="submit-subscription" form="subscribe-form">Pošalji</button>
          </form>
        </div>

        <div class="social-networks">
          <h5 class="mt-5 text-white">Pratite nas i na:</h5>
          <div class="mt-3">
            <a href="https://www.instagram.com/franjinaekonomijahrvatska/" target="_blank"><img src="{{ asset('icons/footer/instagram.svg') }}" class="mx-1"></a>
            <a href="https://www.facebook.com/Franjina-Ekonomija-Hrvatska-114169500480550/" target="_blank"><img src="{{ asset('icons/footer/facebook.svg') }}" class="mx-1"></a>
            <a href="https://www.youtube.com/channel/UCkA1mEWmqGLxXfKrRbfqaFQ"><img src="{{ asset('icons/footer/youtube.svg') }}" class="mx-1"></a>
          </div>
        </div>


      </div>

    </div>
    <!-- /.Row -->

  </div>
  <!-- /.Container -->

  <!-- Container-fluid -->
  <div class="container-fluid">

    <!-- Row -->
    <div class="row bg-white text-center">

      <div class="col-12 py-4">
        2021 &copy; <a class="text-decoration-none footer-link" href="https://katrieldev.com/">Katriel Dev</a>
      </div>

    </div>
    <!-- /.Row -->

  </div>
  <!-- /.Container-fluid -->

</footer>
{{-- /.Footer --}}

{{-- Fixed footer --}}
<footer class="fixed-footer d-md-none">

  <div class="container-fluid">
    
    {{-- Row --}}
    <div class="row my-2 no-gutters">
      <div class="col-6 d-flex align-items-center justify-content-center">
        <a href="mailto:hub@franjinaekonomija.hr" class="text-decoration-none text-white mt-2 h5"><img src="{{ asset('icons/common/email.svg') }}" class="footer-icon"></a>
      </div>
      <div class="col-6 d-flex align-items-center justify-content-center">
        <span id="share" class="btn"><img src="{{ asset('icons/footer/share-2.svg') }}" class="footer-icon"></span>
        <p class="result"></p>
      </div>
    </div>
    {{-- /.Row --}}

  </div>

</footer>
{{-- /.Fixed footer --}}

{{-- Share --}}
<script>
  let shareData = {
    title: 'Franjina ekonomija',
    text: 'Franjina ekonomija',
    url: 'https://franjinaekonomija.hr',
  }

  const btn = document.querySelector('#share');
  const resultPara = document.querySelector('.result');

  btn.addEventListener('click', () => {
    navigator.share(shareData)
  });
</script>

{{-- Post request --}}
<script src="{{ asset('back/post-request.js')}}"></script>

<!-- Sticky Navbar -->
<script>
  jQuery( document ).ready(function() {
    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;

    function myFunction() {
      if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky");
      } else {
        navbar.classList.remove("sticky");
      }
    }
    window.onscroll = function() {myFunction()};
    if (window.pageYOffset >= sticky) {
      navbar.classList.add("sticky");
    } else {
      navbar.classList.remove("sticky");
    }
  });
</script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init({
    once: true,
  });
</script>

@yield('scripts')

</body>
</html>
