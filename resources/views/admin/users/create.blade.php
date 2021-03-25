@extends('layouts.concept-layout')


@section('links')

<title>Dodajte korisnika</title>
<meta name="csrf-token" content="{{ csrf_token() }}" />

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

@endsection('links')

@section('main-content')


<div class="container-fluid dashboard-content">
  <div class="row">
    <div class="col-12 col-xl-11">
      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="page-header" id="top">
            <h2 class="pageheader-title">Neuer Nachrichtenartikel</h2>
            <div class="page-breadcrumb">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ Route('admin.index') }}" class="breadcrumb-link">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="{{ Route('admin.users.index') }}" class="breadcrumb-link">Nachrichtenartikel</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Neuer</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <form action="{{ Route('admin.users.store') }}" method="POST" id="create-form" enctype="multipart/form-data" autocomplete="off">
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
              <h5 class="card-header">Neuer Nachrichtenartikel - Formular</h5>
              <div class="card-body" id="card-body">
                <div class="row px-3" id="errors-top" style="display: none;"></div>
                <div class="form-group">
                  <label class="col-form-label" for="post_title">Titel</label>
                  <label class="label-required" for="post_title">(benötigt)</label>
                  <input id="post_title" type="text" class="form-control" name="post_title" maxlength="512" autofocus="">
                </div>
                <div class="form-group">
                  <label class="col-form-label" for="post_title_slug">Titel in URL</label>
                  <label class="label-required" for="post_title_slug">(benötigt)</label>
                  <input id="post_title_slug" type="text" class="form-control" name="post_title_slug" maxlength="512" readonly="" tabindex="-1">
                </div>
                <div class="form-group">
                  <label class="col-form-label" for="post_headline">Überschrift</label>
                  <label class="label-required" for="post_headline">(benötigt)</label>
                  <textarea class="form-control headline-textarea" id="post_headline" name="post_headline" maxlength="512"></textarea>
                </div>
                <div class="form-group">
                  <label class="col-form-label" for="post_keywords">Schlüsselwörter</label>
                  <label class="label-required" for="post_keywords">(benötigt)</label>
                  <input id="post_keywords" type="text" class="form-control" name="post_keywords" maxlength="256">
                  <label class="label-not-required" for="post_keywords">Komma getrennt</label>
                </div>
                <div class="form-group">
                  <label class="col-form-label" for="post_publish_date">Artikel Datum</label>
                  <label class="label-not-required" for="post_publish_date">(nicht benötigt)</label>
                  <input id="post_publish_date" type="date" class="form-control" name="post_publish_date">
                </div>
                <div class="form-group mb-0">
                  <label class="col-form-label" for="post_header_image">Header-Bild hochladen</label>
                  <label class="col-form-label" for="post_header_image">(Erforderliche Abmessungen: 1280 x 720 Pixel)</label>
                  <label class="label-required" for="post_header_image">(benötigt)</label>
                </div>
                <div class="custom-file">
                  <input type="file" accept="image/png, image/jpeg, image/jpg" class="custom-file-input" id="post_header_image" name="post_header_image">
                  <label class="custom-file-label color-light-grey" for="post_header_image">Wählen Sie Header-Bild</label>
                </div>
                <div class="form-group mt-2" id="thumbnail_preview_wrapper" style="display: none;">
                  <img class="img-fluid" id="thumbnail_image">
                </div>
                <div class="form-group mt-3">
                  <label class="col-form-label" for="post_header_image_description">Bildbeschreibung (wird angezeigt, wenn das Bild nicht angezeigt werden kann, auch als Alt-Tag bezeichnet)</label>
                  <label class="label-not-required" for="post_header_image_description">(nicht benötigt)</label>
                  <input id="post_header_image_description" type="text" class="form-control" name="post_header_image_description" value="{{ old('post_header_image_description') }}" maxlength="256">
                </div>
                <div class="form-group mt-3">
                  <label class="col-form-label" for="post_header_image_url">Link auf Bild</label>
                  <label class="label-not-required" for="post_header_image_url">(nicht benötigt)</label>
                  <input id="post_header_image_url" type="text" class="form-control" name="post_header_image_url" value="{{ old('post_header_image_url') }}">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
              <h5 class="card-header">Inhalt</h5>
              <div class="card-body">
                <div class="form-group">
                  <label class="col-form-label" for="post_content">Inhalt</label>
                  <label class="label-required" for="post_content">(benötigt)</label>
                  <textarea class="form-control" id="post_content" rows="16" name="post_content"></textarea>
                </div>
                <div class="mt-2 float-right">
                  <button type="button" id="submit-button" form="create-form" class="btn btn-lg btn-secondary">Erstellen</button>
                </div>
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

<script>
  $('#post_header_image').on('change',function(e){
    //get the file name
    var fileName = e.target.files[0].name;
    //replace the "Choose a file" label
    $(this).next('.custom-file-label').html(fileName);
    var image = document.getElementById('thumbnail_image');
    image.src = URL.createObjectURL(event.target.files[0]);
    $("#thumbnail_preview_wrapper").css('display', 'inherit');
  });
</script>
<script>
  $(document).ready(function() {
    $("#post_title_slug").val(replaceChars($("#post_title").val()));
  });

  var titleField = $("#post_title");
  var titleSlugField = $("#post_title_slug");

  titleField.on('input', function() {
    titleSlugField.val(replaceChars(titleField.val()));
  });
</script>

<script src="{{ asset('back/replaceChars.js')}}"></script>
<script src="{{ asset('back/post-request.js')}}"></script>

@endsection('scripts')
