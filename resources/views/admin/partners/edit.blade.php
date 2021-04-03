@extends('layouts.concept-layout')


@section('links')

<title>Uređivanje partnera</title>
<meta name="csrf-token" content="{{ csrf_token() }}" />

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script> 

@endsection('links')

@section('main-content')


<div class="container-fluid dashboard-content">
  <div class="row">
    <div class="col-12">
      <div class="row">
        <div class="col-12">
          <div class="page-header" id="top">
            <h2 class="pageheader-title">Partneri</h2>
            <div class="page-breadcrumb">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ Route('admin.partners.index') }}" class="breadcrumb-link disabled">Partneri</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Lista</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <form action="{{ Route('admin.partners.update', ['partner' => $partnerSingle->id]) }}" method="POST" id="update-form" enctype="multipart/u-data" autocomplete="off">
        <div class="card">
          <h5 class="card-header">Novi partner - kreiranje</h5>
          <div class="card-body" id="card-body">
            <div class="row px-3" id="errors-top" style="display: none;"></div>
            <div class="form-group">
              <label class="col-form-label" for="partner_name">Naziv</label> 
              <label class="label-required" for="partner_name">(obavezno)</label>
              <input id="partner_name" type="text" class="form-control" name="partner_name" autocomplete="title" autofocus autocomplete="off" value="{{ $partnerSingle->name }}">
            </div>    
            <div class="form-group">
              <label class="col-form-label" for="partner_header_image">Slika</label>
              <label class="label-required" for="partner_header_image">(obavezno)</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" accept="image/png, image/jpeg, image/jpg" class="custom-file-input form-control-file" id="partner_header_image" name="partner_header_image">
                  <label class="custom-file-label" for="partner_header_image">Izaberite sliku</label>
                </div> 
              </div> 
              <div class="form-group mt-4" id="thumbnail_preview_wrapper">
                <small>Trenutna slika</small><br>
                <img class="img-fluid" id="thumbnail_image" width="300" src="{{ $partnerSingle->header_image_url }}">
              </div>
            </div> 
            <div class="form-group mt-3">
              <label for="partner_header_image_alt" class="col-form-label">Opis slike (prikazuje se ako se slika nije učitala)</label>
              <label for="partner_header_image_alt" class="label-not-required">(neobavezno)</label>
              <input type="text" id="partner_header_image_alt" class="form-control" name="partner_header_image_alt" value="{{ $partnerSingle->cover_image_description }}" maxlength="256">
            </div> 
            <div class="form-group">
              <label for="partner_website_url" class="col-form-label">Link prema web stranici</label>
              <label for="partner_website_url" class="label-not-required">(obavezno)</label>
              <input type="url" id="partner_website_url" name="partner_website_url" class="form-control" value="{{ $partnerSingle->website_url }}">
            </div>
            <button type="button" id="submit-button" form="update-form" class="btn btn-lg btn-secondary float-right">Potvrdi</button>
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

{{-- Show image title and preview when selected --}}
<script>
$('#partner_header_image').on('change',function(e){
      //get the file name
      var fileName = e.target.files[0].name;
      //replace the "Choose a file" label
      $(this).next('.custom-file-label').html(fileName);
      var image = document.getElementById('thumbnail_image');
      image.src = URL.createObjectURL(event.target.files[0]); 
    });
</script>

@endsection('scripts')
