@extends('layouts.concept-layout')


@section('links')

<title>Uređivanje partnera</title>
<meta name="csrf-token" content="{{ csrf_token() }}" />

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script> 
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.24/datatables.min.css"/>

@endsection('links')

@section('main-content')


<div class="container-fluid dashboard-content">
  <div class="row">
    <div class="col-12">
      <div class="row">
        <div class="col-12">
          <div class="page-header" id="top">
            <h2 class="pageheader-title">Slika</h2>
            <div class="page-breadcrumb">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ Route('admin.sliders.index') }}" class="breadcrumb-link disabled">Slajderi</a></li>  
                  <li class="breadcrumb-item active" aria-current="page">Uređivanje slike</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
        <div class="card">
          <h5 class="card-header">Slika</h5>
          <div class="card-body"> 
            <form action="{{ Route('admin.slider-images.update', ['slider_image' => $sliderImage->id]) }}" method="POST" id="update-form" enctype="multipart/u-data" autocomplete="off">
              <div class="form-group">
                <label class="col-form-label" for="slider_image">Slika</label>
                <label class="label-required" for="slider_image">(obavezno)</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" accept="image/png, image/jpeg, image/jpg" class="custom-file-input form-control-file" id="slider_image" name="slider_image">
                    <label class="custom-file-label" for="slider_image">Izaberite sliku</label>
                  </div> 
                </div> 
                <div class="form-group mt-4" id="thumbnail_preview_wrapper"> 
                  <small>Trenutna slika</small><br>
                  <img src="{{ $sliderImage->header_image_url }}" class="img-fluid" id="thumbnail_image" width="300">
                </div>
              </div> 
              <div class="form-group mt-3">
                <label for="slider_image_alt" class="col-form-label">Opis slike (prikazuje se ako se slika nije učitala)</label>
                <label for="slider_image_alt" class="label-not-required">(neobavezno)</label>
                <input type="text" id="slider_image_alt" class="form-control" name="slider_image_alt" value="" maxlength="256">
              </div>
              <div class="form-group mt-3">
                <label for="slider_image_order" class="col-form-label">Redoslijed</label>
                <label for="slider_image_order" class="label-not-required">(neobavezno, no uzmite u obzir da će one slike kod kojih redoslijed nije definisan biti prve na slajderu)</label>
                <input type="number" id="slider_image_order" class="form-control" min="1" name="slider_image_order" value="{{ $sliderImage->order }}" maxlength="256"> 
              </div>
              <button type="button" id="submit-button" form="update-form" class="btn btn-lg btn-secondary float-right">Potvrdi</button>
              @method('put')
            </form>
          </div>
        </div>
    </div>
  </div>
</div>
    

@endsection('main-content')


@section('scripts')

{{-- Post request --}}
<script src="{{ asset('back/put-request.js')}}"></script>  


{{-- Data Table --}}

<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.24/datatables.min.js"></script>
<script>
  $(document).ready(function() {
    $('#sliderImages').dataTable({
      "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Croatian.json"
          }
    });
  })
</script>

{{-- Show image title and preview when selected --}}
<script>
$('#slider_image').on('change',function(e){
      //get the file name
      var fileName = e.target.files[0].name;
      //replace the "Choose a file" label
      $(this).next('.custom-file-label').html(fileName);
      var image = document.getElementById('thumbnail_image');
      image.src = URL.createObjectURL(event.target.files[0]); 
    });
</script>

@endsection('scripts')
