@extends('layouts.auth-layout')

@section ('content')

 <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a href="../index.html"><img class="logo-img" src="{{ asset('images/logo/main-logo.svg') }}" alt="logo"></a><span class="splash-description">{{ __('Molimo unesite tražene informacije.')}}</span></div>
            <div class="card-body">

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">
                      <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Adresa') }}</label>
                         <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                              @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                    </div>

                    <div class="form-group">
                      <label for="password" class="col-form-label text-md-right">{{ __('Lozinka') }}</label>
                        <input id="password" type="password" class="form-control  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>

                    <div class="form-group">
                      <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                          <label class="form-check-label" for="remember">
                              {{ __('Zapamti me') }}
                          </label>
                      </div>
                    </div>

                    <button type="submit" class="btn btn-dark">
                        {{ __('Prijavi se') }}
                    </button>

                </form>

            </div>

            <div class="card-footer bg-white p-0  "> 
                <div class="card-footer-item card-footer-item-bordered">
                    @if (Route::has('password.request'))
                        <a class="footer-link" href="{{ route('password.request') }}">
                            {{ __('Zaboravili ste lozinku?') }}
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->

@endsection('content')