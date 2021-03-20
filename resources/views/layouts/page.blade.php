<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/svg" sizes="16x16" href="{{ asset('images/logo/main-logo.svg') }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/custom.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/fonts.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Fancybox Gallery -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.fancybox.min.css') }}">    

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
          <a class="text-white topbar-text ml-2 text-decoration-none" href="tel:+38595123456">+ 385 95 123 456</a>
        </div>

        <div class="col-12 col-md-6 col-lg-6 col-xl-5 align-self-center d-flex justify-content-start justify-content-md-end justify-content-xl-start py-1">
          <img src="{{ asset('icons/common/email.svg') }}" class="img-fluid topbar-icons my-0 py-0">
          <span><a href="mailto:financial.education.eof@gmail.com" class="text-white topbar-text ml-2 text-decoration-none">financial.education.eof@gmail.com</a></span>
        </div>

        <div class="col-12 col-md-6 col-lg-6 col-xl-2 align-self-center d-flex float-right py-1">
          <a href="" class="" ><img src="{{ asset('icons/header/instagram.svg') }}" class="img-fluid topbar-icons"></a>
          <a href="" class="ml-3"><img src="{{ asset('icons/header/facebook.svg') }}" class="img-fluid topbar-icons"></a>
          <a href="" class="ml-3"><img src="{{ asset('icons/header/youtube.svg') }}" class="img-fluid topbar-icons"></a>
        </div>

        <div class="col-12 col-md-6 col-lg-6 col-xl-3 align-self-center py-1">
 
          <div class="float-left float-md-right">
            <form class="form-inline">
              <div class="input-group">
                <input type="text" class="form-control rounded-0 border-0" placeholder="Pretraži" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append bg-danger"> 
                  <span class="input-group-text bg-white rounded-0 border-0" id="basic-addon2"><img src="{{ asset('icons/header/search.svg') }}"></span>
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
      <a class="navbar-brand bg-white p-3" href="{{ __('/')}}"></a>
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
            <a class="dropdown-item pb-2" href="{{ __('onama#1') }}"><span class="border-bottom pb-1">Economy of Francesko</span></a>
            <a class="dropdown-item pb-2" href="{{ __('onama#2') }}"><span class="border-bottom pb-1">HUB Croatia</span></a>
            <a class="dropdown-item" href="{{ __('onama#3') }}">EoF budi i Ti</a>
          </div>
          </li>        
          @endif

          @if (Route::has('projects'))
          <li class="nav-item mr-3">
            <a class="nav-link p-0 {{ Route::currentRouteNamed('projects') ? 'active' : '' }}" href="{{ __('projekti') }}">
              <span>Projekti</span>
            </a> 
          </li>
          @endif

          @if (Route::has('activities'))
          <li class="nav-item mr-3">
            <a class="nav-link p-0 {{ Route::currentRouteNamed('activities') ? 'active' : '' }}" href="{{ __('aktivnosti') }}">
              <span>Aktivnosti</span>
            </a>
          </li>
          @endif

          @if (Route::has('support'))
          <li class="nav-item mr-3">
            <a class="nav-link p-0 {{ Route::currentRouteNamed('support') ? 'active' : '' }}" href="{{ __('podrška')}}">
              <span>Podrška</span>
            </a>
          </li>
          @endif

          @if (Route::has('partners'))
          <li class="nav-item mr-3">
            <a class="nav-link p-0 {{ Route::currentRouteNamed('partners') ? 'active' : '' }}" href="{{ __('partneri') }}" id="partners">
              <span>Partneri</span>
            </a>
          </li>
          @endif

          @if (Route::has('blog'))
          <li class="nav-item mr-3">
            <a class="nav-link p-0 {{ Route::currentRouteNamed('blog') ? 'active' : '' }}" href="{{ __('blog') }}">
              <span>Blog</span>
            </a>
          </li>
          @endif

          @if (Route::has('contact'))
          <li class="nav-item mr-3 mr-xl-0">
            <a class="nav-link p-0 {{ Route::currentRouteNamed('contact') ? 'active' : '' }}" href="{{ __('kontakt') }}" id="contact">
              <span>Kontakt</span>
            </a>
          </li>
          @endif

        </ul>
        <form class="form-inline float-right border mr-3 mt-2 d-block d-lg-none">
          <div class="input-group">
            <input type="text" class="form-control rounded-0 border-0" placeholder="Pretraži" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <div class="input-group-append bg-danger"> 
              <span class="input-group-text bg-white rounded-0 border-0" id="basic-addon2"><img src="{{ asset('icons/header/search.svg') }}"></span>
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
                  <a class="mt-2 text-white h5 text-decoration-none" href="https://www.google.com/maps/dir/44.2000496,17.7129374/44.19402,17.73267/@44.198107,17.7053723,14z/data=!3m1!4b1!4m4!4m3!1m1!4e1!1m0" target="_blank">Donje Putićevo 106 Nova Bila 72276 Travnik, Bosnia and Herzegovina</a>
                </div>
              </div>

              <div class="d-flex align-items-center justify-content-start mt-3 mt-sm-5">
                <div>
                  <img src="{{ asset('icons/common/phone.svg') }}" class="footer-icon">
                </div>

                <div class="ml-4">
                  <h4 class="text-white">Broj telefona</h4>
                  <a href="tel:+38795123456" class="text-decoration-none h5 mt-2 text-white">+387 95 123 456</a>
                </div>
              </div>

              <div class="d-flex align-items-center mt-3 mt-sm-5">
                <div>
                  <img src="{{ asset('icons/common/email.svg') }}" class="footer-icon">
                </div>

                <div class="ml-4">
                  <h4 class="text-white">Email</h4>
                  <a href="mailto:financial.education.eof@gmail.com" class="text-decoration-none text-white mt-2 h5">financial.education.eof@gmail.com</a>
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
          <form>
            <div class="form-group w-100">
              <input type="text" class="form-control rounded-0 border-0 h-auto py-3" placeholder="Email" required="">
            </div>
            <button class="btn text-uppercase w-auto px-5 py-2 rounded-0 text-white" type="submit">Pošalji</button>
          </form>
        </div>

        <div class="social-networks">
          <h5 class="mt-5 text-white">Pratite nas i na:</h5>
          <div class="mt-3">
            <a href=""><img src="{{ asset('icons/footer/instagram.svg') }}" class="mx-1"></a>
            <a href=""><img src="{{ asset('icons/footer/facebook.svg') }}" class="mx-1"></a>
            <a href=""><img src="{{ asset('icons/footer/youtube.svg') }}" class="mx-1"></a>
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
        2021 &copy; Udruga Ekonomije zajedništva
      </div>

    </div>

    <!-- /.Row -->

  </div>

  <!-- /.Container-fluid -->

</footer>

<!-- /.Footer) -->
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

<!-- Swiper -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
  var swiper = new Swiper('.swiper-container', {
    pagination: {
      el: '.swiper-pagination',
      dynamicBullets: true,
      clickable: true,
      renderBullet: function (index, className) {
        return '<span class="' + className + '">' + (index + 1) + '</span>';
      },
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      640: {
        slidesPerView: 1,
        spaceBetween: 40,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 0,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 0,
      },
    }
  });
</script> 
 <script>
  var swiper = new Swiper('.support-page-partners-slider', {
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },  
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 0,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 0,
      },
      1024: {
        slidesPerView: 4,
        spaceBetween: 0,
      },
    }
  });
</script>  

<!-- [Fancybox Image Gallery] -->
<script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
<script type="text/javascript">
$().fancybox({
    selector : '.imglist a:visible'
});

$('[data-fancybox="gallery"]').fancybox({
   buttons: [
    "close"
  ],
  loop: false,
  keyboard: true,
  infobar: true,

});
    
</script>    
</body>
</html>
