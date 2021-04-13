@extends('layouts.concept-layout')


@section('links')

<title>Uređivanje aktivnosti</title>
<meta name="csrf-token" content="{{ csrf_token() }}" />

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

@endsection('links')

@section('main-content')


<div class="container-fluid dashboard-content">
  <div class="row">
    <div class="col-12">
      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col- -12 col-12">
          <div class="page-header" id="top">
            <h2 class="pageheader-title">Uređivanje aktivnosti</h2>
            <div class="page-breadcrumb">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ Route('admin.activities.index') }}" class="breadcrumb-link disabled">Aktivnosti</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Uređivanje aktivnosti</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <form action="{{ Route('admin.activities.update', ['activity' => $activityEdit->id]) }}" method="POST" id="update-form" enctype="multipart/form-data" autocomplete="off">
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
              <h5 class="card-header">Uređivanje posta</h5>
              <div class="card-body" id="card-body">
                <div class="row px-3" id="errors-top" style="display: none;"></div>
                <div class="form-group">
                  <label class="col-form-label" for="activity_name">Naziv</label> 
                  <label class="label-required" for="activity_name">(obavezno)</label>
                  <input id="activity_name" value="{{ $activityEdit->name }}" type="text" class="form-control" name="activity_name" autocomplete="title" autofocus autocomplete="off">
                </div>   
                <div class="form-group">
                  <label class="col-form-label" for="activity_description">Opis</label> 
                  <label class="label-required" for="activity_description">(obavezno)</label>
                  <textarea name="activity_description" id="activity_description" rows="5" class="form-control" maxlength="255">{{ $activityEdit->description }}</textarea>
                </div> 
                <div class="form-group">
                  <label class="col-form-label" for="activity_image">Slika</label>
                  <label class="label-required" for="activity_image">(obavezno)</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" accept="image/png, image/jpeg, image/jpg" class="custom-file-input form-control-file" id="activity_image" name="activity_image">
                      <label class="custom-file-label" for="activity_image">Izaberite sliku</label>
                    </div> 
                  </div> 
                  <div class="form-group mt-4" id="thumbnail_preview_wrapper">
                    <small>Trenutna slika</small><br>
                    <img class="img-fluid" id="thumbnail_image" width="300" src="{{ $activityEdit->header_image_url }}">
                  </div>
                </div> 
                <div class="form-group mt-3">
                  <label for="activity_image_alt" class="col-form-label">Opis slike (prikazuje se ako se slika nije učitala)</label>
                  <label for="activity_image_alt" class="label-not-required">(neobavezno)</label>
                  <input type="text" id="activity_image_alt" class="form-control" name="activity_image_alt" value="{{ $activityEdit->image_description }}" maxlength="256">
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

  {{-- Show image title and preview when selected --}}
  <script>
  $('#activity_image').on('change',function(e){
        //get the file name
        var fileName = e.target.files[0].name;
        //replace the "Choose a file" label
        $(this).next('.custom-file-label').html(fileName);
        var image = document.getElementById('thumbnail_image');
        image.src = URL.createObjectURL(event.target.files[0]); 
      });
  </script>


@endsection('scripts')
