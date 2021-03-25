@extends('layouts.auth-layout')

@section('content')

<!-- ============================================================== -->
    <!-- forgot password  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card">
            <form method="POST" action="{{ route('password.update') }}">
              @csrf

              <div class="card-header text-center"><img class="logo-img" src="{{ asset('images/logo/main-logo.svg') }}" alt="logo"><span class="splash-description">Molimo unesite tražene informacije</span></div>
                <div class="card-body">
                    <form>
                        <p>Poslat ćemo Vam email kako biste oporavili svoju lozinku.</p>
                        <div class="form-group">
                            <input class="form-control form-control-lg" type="email" name="email" required="" placeholder="Email" autocomplete="off">
                        </div>
                        <div class="form-group pt-1"><a class="btn btn-block btn-dark btn-xl" href="../index.html">Resetujte lozinku</a></div>
                    </form>
                </div>
            </form>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end forgot password  -->
    <!-- ============================================================== -->

@endsection('content')