@extends('layouts.concept-layout')


@section('links')

<title>Novi event</title>
<meta name="csrf-token" content="{{ csrf_token() }}" />


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

@endsection
@section('main-content')

<div class="container-fluid dashboard-content">
  
      <!-- ============================================================== -->
      <!-- pageheader -->
      <!-- ============================================================== -->
      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col- -12 col-12">
          <div class="page-header" id="top">
            <h2 class="pageheader-title">Novi event</h2>
            <div class="page-breadcrumb">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ Route('admin.events.index') }}" class="breadcrumb-link disabled">Kalendar</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Novi event</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <!-- ============================================================== -->
      <!-- end pageheader -->
      <!-- ============================================================== -->


      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col- -12 col-12">
          <form action="{{ Route('admin.events.store') }}" method="POST" id="create-form" enctype="multipart/u-data" autocomplete="off">
            <div class="card">
              <h5 class="card-header">Novi event - kreiranje</h5>
              <div class="card-body" id="card-body">
                <div class="row px-3" id="errors-top" style="display: none;"></div>
                <div class="form-group">
                  <label class="col-form-label" for="event_title">Naslov</label> 
                  <label class="label-required" for="event_title">(obavezno)</label>
                  <input id="event_title" type="text" class="form-control" name="event_title" autocomplete="title" autofocus autocomplete="off">
                </div>  
                <div class="form-group">
                  <label class="col-form-label" for="event_header_image">Slika</label>
                  <label class="label-required" for="event_header_image">(opcionalno)</label>
                  <small>Ukoliko ne unesete sliku, nema potrebe da unosite ni njen opis budući da se isti neće nikada prikazati.</small>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" accept="image/png, image/jpeg, image/jpg" class="custom-file-input form-control-file" id="event_header_image" name="event_header_image">
                      <label class="custom-file-label" for="event_header_image">Izaberite sliku</label>
                    </div> 
                  </div> 
                  <div class="form-group mt-4" id="thumbnail_preview_wrapper" style="display: none;">
                    <img class="img-fluid" id="thumbnail_image" width="300">
                  </div>
                </div> 
                <div class="form-group mt-3">
                  <label for="event_header_image_alt" class="col-form-label">Opis slike (prikazuje se ako se slika nije učitala)</label>
                  <label for="event_header_image_alt" class="label-not-required">(neobavezno)</label>
                  <input type="text" id="event_header_image_alt" class="form-control" name="event_header_image_alt" value="" maxlength="256">
                </div>
                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="event_date" class="col-form-label">Datum eventa</label>
                    <label for="event_date" class="label-not-required">(obavezno)</label>
                    <input type="date" name="event_date" id="event_date" class="form-control" value="">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="event_start" class="col-form-label">Datum eventa</label>
                    <label for="event_start" class="label-not-required">(obavezno)</label>
                    <input type="time" name="event_start" id="event_start" class="form-control" value="">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="event_end" class="col-form-label">Početak</label>
                    <label for="event_end" class="label-not-required">(obavezno)</label>
                    <input type="time" name="event_end" id="event_end" class="form-control" value="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="event_zoom_link" class="col-form-label">Zoom link</label>
                  <label for="event_zoom_link" class="label-not-required">(opcionalno)</label>
                  <input type="url" name="event_zoom_link" id="event_zoom_link" class="form-control" value="">
                </div>
                
                <div class="form-group">
                  <label class="col-form-label" for="event_basic_info">Osnovne informacije</label>
                  <label class="label-required" for="event_basic_info">(opcionalno)</label>
                  <textarea id="event_basic_info" name="event_basic_info" class="form-control"></textarea>
                </div>  
                 
                <button type="button" id="submit-button" form="create-form" class="btn btn-lg btn-secondary float-right">Potvrdi</button>
              </div>
            </div>
          </form>
        </div>
      </div>
  
</div>
    

@endsection 


@section('scripts')


{{-- Post request --}}
<script src="{{ asset('back/post-request.js')}}"></script>

{{-- Show image title and preview when selected --}}
<script>
$('#event_header_image').on('change',function(e){
      //get the file name
      var fileName = e.target.files[0].name;
      //replace the "Choose a file" label
      $(this).next('.custom-file-label').html(fileName);
      var image = document.getElementById('thumbnail_image');
      image.src = URL.createObjectURL(event.target.files[0]);
      $("#thumbnail_preview_wrapper").css('display', 'inherit');
    });
</script> 

@endsection
