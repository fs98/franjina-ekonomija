@extends('layouts.concept-layout')


@section('links')

<title>Uređivanje korisnika</title>
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
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="page-header" id="top">
            <h2 class="pageheader-title">Blog</h2>
            <div class="page-breadcrumb">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ Route('admin.posts.index') }}" class="breadcrumb-link">Blogovi</a></li> 
                  <li class="breadcrumb-item active" aria-current="page">Uređivanje</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <form action="{{ Route('admin.posts.update', ['post' => $postSingle->id]) }}" method="POST" id="update-form" enctype="multipart/form-data" autocomplete="off">
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
              <h5 class="card-header">Uređivanje posta</h5>
              <div class="card-body" id="card-body">
                <div class="row px-3" id="errors-top" style="display: none;"></div>
                <div class="form-group">
                  <label class="col-form-label" for="post_title">Naslov</label> 
                  <label class="label-required" for="post_title">(obavezno)</label>
                  <input id="post_title" type="text" class="form-control" name="post_title" autocomplete="title" autofocus autocomplete="off" value="{{ $postSingle->title }}">
                </div>
                <div class="form-group">
                  <label for="post_title_slug" class="col-form-label">Naslov u URL-u</label>
                  <label for="post_title_slug" class="label-required">(automatski generisano)</label>
                  <input type="text" id="post_title_slug" class="form-control" name="post_title_slug" max-length="512" readonly="" tabindex="-1" value="{{ $postSingle->title_slug }}">
                </div>
                <div class="form-group">
                  <label for="col-form-label" for="post_short_description">Kratki opis</label>
                  <label for="post_short_description" class="label-required">(obavezno)</label>
                  <input type="text" id="post_short_description" name="post_short_description" class="form-control" max-length="256" value="{{ $postSingle->short_description }}">
                  <label for="post_short_description" class="label-not-required">Napišite kratak opis koji će se nalazi na slajderu na početnoj stranici ispod naslova posta.</label>
                </div>
                <div class="form-group">
                  <label for="col-form-label" for="post_keywords">Ključne riječi</label>
                  <label for="post_keywords" class="label-required">(obavezno)</label>
                  <input type="text" id="post_keywords" name="post_keywords" class="form-control" max-length="256" value="{{ $postSingle->keywords }}">
                  <label for="post_keywords" class="label-not-required">Ključne riječi odvojite zarezom</label>
                </div>
                <div class="form-group">
                  <label class="col-form-label" for="post_header_image">Slika</label>
                  <label class="label-required" for="post_header_image">(obavezno)</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" accept="image/png, image/jpeg, image/jpg" class="custom-file-input form-control-file" id="post_header_image" name="post_header_image">
                      <label class="custom-file-label" for="post_header_image">Izaberite sliku</label>
                    </div> 
                  </div> 
                  <div class="form-group mt-4" id="thumbnail_preview_wrapper">
                    <small>Trenutna slika</small><br>
                    <img src="{{ $postSingle->header_image_url }}" width="300" class="img-fluid" id="thumbnail_image">
                  </div>
                </div> 
                <div class="form-group mt-3">
                  <label for="post_header_image_alt" class="col-form-label">Opis slike (prikazuje se ako se slika nije učitala)</label>
                  <label for="post_header_image_alt" class="label-not-required">(neobavezno)</label>
                  <input type="text" id="post_header_image_alt" class="form-control" name="post_header_image_alt" value="{{ $postSingle->cover_image_description }}" maxlength="256">
                </div>
                
                <div class="form-group">
                  <label class="col-form-label" for="post_content">Sadržaj</label>
                  <label class="label-required" for="post_content">(obavezno)</label>
                  <textarea id="summernote" name="post_content">{{ $postSingle->content }}</textarea>
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

{{-- Summernote --}}
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script> 

  <!-- Summernote Language -->
  <script src="{{ asset('js/summernote-hr-HR.js') }}"></script>

  {{-- Summernote button list --}}
  <script type="text/javascript">
   $('#summernote').summernote({
        lang: 'hr-HR',
        tabsize: 2,
        height: 500, 
        toolbar: [
      // [groupName, [list of button]]
      ['style', ['style']],
      ['style', ['bold', 'italic', 'underline', 'clear']],
      ['font', ['strikethrough', 'superscript', 'subscript']],
      ['fontsize', ['fontsize']],
      ['color', ['color']],
      ['para', ['ul', 'ol', 'paragraph']],
      ['height', ['height']],
      ['table', ['table']],
      ['insert',['link','picture']],
      ['view', ['fullscreen']]
    ]
        });
  </script>

  {{-- Show image title and preview when selected --}}
  <script>
  $('#post_header_image').on('change',function(e){
        //get the file name
        var fileName = e.target.files[0].name;
        //replace the "Choose a file" label
        $(this).next('.custom-file-label').html(fileName);
        var image = document.getElementById('thumbnail_image');
        image.src = URL.createObjectURL(event.target.files[0]); 
      });
  </script>

  {{-- Create url with title --}}
  <script src="{{ asset('back/replaceChars.js')}}"></script>

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

@endsection('scripts')
