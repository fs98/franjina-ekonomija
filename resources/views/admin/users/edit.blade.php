@extends('layouts.concept-layout')


@section('links')

<title>Uređivanje korisnika</title>
<meta name="csrf-token" content="{{ csrf_token() }}" />

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

@endsection('links')

@section('main-content')


<div class="container-fluid dashboard-content">
  <div class="row">
    <div class="col-12">
      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="page-header" id="top">
            <h2 class="pageheader-title">Uređivanje korisnika</h2>
            <div class="page-breadcrumb">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ Route('admin.index') }}" class="breadcrumb-link">Početak</a></li>
                  <li class="breadcrumb-item"><a href="{{ Route('admin.users.index') }}" class="breadcrumb-link">Korisnici</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Uređivanje korisnika</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <form action="{{ Route('admin.users.update', ['user' => $userSingle->id]) }}" method="POST" id="update-form" enctype="multipart/form-data" autocomplete="off">
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
              <h5 class="card-header">Novi korisnik - kreiranje</h5>
              <div class="card-body" id="card-body">
                <div class="row px-3" id="errors-top" style="display: none;"></div>
                <div class="form-group">
                  <label class="col-form-label" for="name">Ime</label> 
                  @if (Helper::isSet($userSingle->name))
                  <input id="name" type="text" class="form-control" name="name" autocomplete="name" autofocus autocomplete="off" value="{{ $userSingle->name }}">
                  @endif
                </div>
                <div class="form-group">
                  <label class="col-form-label" for="email">Email</label>
                  @if (Helper::isSet($userSingle->email))
                  <input id="email" type="email"  class="form-control" name="email" maxlength="512" tabindex="-1" autocomplete="off" value="{{ $userSingle->email }}">
                  @endif
                </div>
                <div class="form-group">
                  <label class="col-form-label" for="email">Status</label>
                  <select class="form-control" id="post_status" name="status" required="">
                    <option disabled="">Status</option>
                      @if(Helper::isSet($userSingle->status))
                        @if($userSingle->status == 'active')
                          <option value="{{ ('inactive') }}">{{ ucfirst('neaktivan') }}</option>
                          <option selected="" value="{{ ('active') }}">{{ ucfirst('aktivan') }}</option>
                        @else
                          <option selected="" value="{{ ('inactive') }}">{{ ucfirst('neaktivan') }}</option>
                          <option value="{{ ('active') }}">{{ ucfirst('aktivan') }}</option>
                        @endif                        
                      @endif
                  </select>
                </div>
                <div class="form-group">
                  <label class="col-form-label" for="password">Lozinka</label>
                  <input type="password" class="form-control" id="password" name="password" autocomplete="off" value="">
                </div>
                <div class="form-group">
                  <label class="col-form-label" for="password-confirm">Potvrdite lozinku</label>
                  <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" autocomplete="off"> 
                </div>    
                <button type="button" id="submit-button" form="update-form" class="btn btn-lg btn-secondary float-right">Potvrdi</button>
              </div>
            </div>
          </div>
        </div>
        @method('put')
      </form>
    </div>
  </div>
</div>
    

@endsection('main-content')


@section('scripts')

<script src="{{ asset('back/put-request.js')}}"></script>

@endsection('scripts')
