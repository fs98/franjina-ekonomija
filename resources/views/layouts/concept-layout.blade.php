<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ asset('vendor/fonts/circular-std/style.css' )}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('libs/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('vendor/fonts/fontawesome/css/fontawesome-all.css')}}"> 
    <link href="{{ asset('css/fonts.css') }}" rel="stylesheet">
  
    @yield('links')

    <style type="text/css">
        
        .navbar-brand img{
            height: 3rem;
        }

    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
       <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="{{ __('/') }}"><img src="{{ asset('images/logo/transparent-logo.png')}}" class="img-fluid"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top"> 
                       <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i>
                              @if ($unread_questions>0)
                                <span class="indicator"></span>
                              @endif
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Obavijesti</div>
                                    <div class="notification-list">
                                      <div class="list-group">
                                        <a href="#" class="list-group-item list-group-item-action active">
                                          <div class="notification-info d-flex">
                                              <div class="notification-list-user-img"><i class="fas fa-question notification-list-user-name" style="font-size: 2rem"></i></div>
                                              <div class="notification-list-user-block align-self-center">Imate <span class="notification-list-user-name h4 mx-0"> {{ $unread_questions }}</span> nepročitanih pitanja.
                                              </div>
                                          </div>
                                        </a> 
                                      </div>
                                    </div>  
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="{{ Route('admin.questions.index') }}">Pogledaj</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="https://via.placeholder.com/128x128" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">{{ Auth::user()->name }} </h5>
                                </div> 
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
      <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link {{ Route::currentRouteNamed('admin.users.*') ? 'active' : '' }}" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-plus"></i>Korisnici <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ __('/admin') }}">Lista</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Route::currentRouteNamed('admin.posts.*') ? 'active' : '' }}" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fab fa-fw fa-blogger-b"></i>Blog</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ __('/admin/posts') }}">Postovi</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ __('/admin/posts/create') }}">Novi post</a>
                                        </li> 
                                    </ul>
                                </div>
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link {{ Route::currentRouteNamed('admin.projects.*') ? 'active' : '' }}" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-hand-rock"></i>Projekti</a>
                                <div id="submenu-3" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ __('/admin/projects') }}">Projekti</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ __('/admin/projects/create') }}">Novi projekat</a>
                                        </li> 
                                    </ul>
                                </div>
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link {{ Route::currentRouteNamed('admin.events.*') ? 'active' : '' }}" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="far fa-fw fa-calendar-alt"></i>Kalendar</a>
                                <div id="submenu-4" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ __('/admin/events') }}">Pregled</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ __('/admin/events/create') }}">Novi event</a>
                                        </li> 
                                    </ul>
                                </div>
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link {{ Route::currentRouteNamed('admin.partners.*') ? 'active' : '' }}" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="far fa-fw fa-user"></i>Partneri</a>
                                <div id="submenu-5" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ __('/admin/partners') }}">Pregled</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ __('/admin/partners/create') }}">Novi partner</a>
                                        </li> 
                                    </ul>
                                </div>
                            </li> 
                            <li class="nav-divider">
                                OSTALI SADRŽAJ
                            </li>  
                            <li class="nav-item">
                                <a class="nav-link  {{ Route::currentRouteNamed('admin.sliders.*') ? 'active' : '' }}" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10"><i class="fas fa-f fa-folder"></i>Ostalo</a>
                                <div id="submenu-10" class="collapse submenu" style="">
                                    <ul class="nav flex-column"> 
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ Route('admin.sliders.index') }}">Slajderi</a>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link" href="{{ Route('admin.questions.index') }}">Pitanja</a>
                                        </li>
                                        {{-- <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-12" aria-controls="submenu-12">Tekst</a>
                                            <div id="submenu-12" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Level 1</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Level 2</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li> --}} 
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            
              @yield('main-content')
            
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('vendor/slimscroll/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('libs/js/main-js.js') }}"></script>

    @yield('scripts') 
</body>
 
</html>