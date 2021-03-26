@extends('layouts.concept-layout')


@section('links')

<title>Dodajte korisnika</title>
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
            <h2 class="pageheader-title">Novi post</h2>
            <div class="page-breadcrumb">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ Route('admin.posts.index') }}" class="breadcrumb-link disabled">Blogovi</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Novi post</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <form action="{{ Route('admin.posts.store') }}" method="POST" id="create-form" enctype="multipart/u-data" autocomplete="off">
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
              <h5 class="card-header">Novi post - kreiranje</h5>
              <div class="card-body" id="card-body">
                <div class="row px-3" id="errors-top" style="display: none;"></div>
                <div class="form-group">
                  <label class="col-form-label" for="title">Naslov</label> 
                  <label class="label-required" for="title">(obavezno)</label>
                  <input id="title" type="text" class="form-control" name="title" autocomplete="title" autofocus autocomplete="off">
                </div>
                <div class="form-group">
                  <label class="col-form-label" for="cover_image">Slika</label>
                  <label class="label-required" for="cover_image">(obavezno)</label>
                </div>
                <div class="form-group">
                  <label class="col-form-label" for="content">Sadržaj</label>
                  <label class="label-required" for="content">(obavezno)</label>
                </div>   
                <button type="button" id="submit-button" form="create-form" class="btn btn-lg btn-secondary float-right">Potvrdi</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
    

@endsection('main-content')


@section('scripts')

<script src="{{ asset('back/post-request.js')}}"></script>

@endsection('scripts')
