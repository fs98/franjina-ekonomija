@extends('layouts.auth-layout')

@section('content')

<!-- ============================================================== -->
    <!-- forgot password  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card">
          @if (session('status'))
              <div class="alert alert-success" role="alert">
                  {{ session('status') }}
              </div>
          @endif
            <form method="POST" action="{{ route('password.email') }}">
              @csrf
              
              <div class="card-header text-center"><img class="logo-img" src="{{ asset('images/logo/main-logo.svg') }}" alt="logo"><span class="splash-description">Molimo unesite tražene informacije</span></div>
                <div class="card-body">
                    <form>
                        <p>Poslat ćemo Vam email kako biste oporavili svoju lozinku.</p>
                        <div class="form-group"> 
                            <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off" autofocus placeholder="Email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group pt-1">
                            <button type="submit" class="btn btn-block btn-dark btn-xl">
                                {{ __('Pošalji') }}
                            </button>
                        </div>
                    </form>
                </div>
            </form>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end forgot password  -->
    <!-- ============================================================== -->

@endsection('content')