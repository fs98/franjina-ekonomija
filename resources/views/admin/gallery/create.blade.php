@extends('layouts.concept-layout')


@section('links')

<title>Dodajte korisnika</title>
<meta name="csrf-token" content="{{ csrf_token() }}" />


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">


@endsection
@section('main-content')

<div class="container-fluid dashboard-content">
  
      <!-- ============================================================== -->
      <!-- pageheader -->
      <!-- ============================================================== -->
      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col- -12 col-12">
          <div class="page-header" id="top">
            <h2 class="pageheader-title">Galerija slika</h2>
            <div class="page-breadcrumb">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ Route('admin.projects.index') }}" class="breadcrumb-link disabled">Projekti</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Galerija</li>
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
          <form action="{{ Route('admin.posts.store') }}" method="POST" id="create-form" enctype="multipart/u-data" autocomplete="off">
            <div class="card">
              <h5 class="card-header">Novi post - kreiranje</h5>
              <div class="card-body" id="card-body">
                <div class="row px-3" id="errors-top" style="display: none;"></div>
                <div class="form-group">
                  <label class="col-form-label" for="post_header_image">Slika</label>
                  <label class="label-required" for="post_header_image">(obavezno)</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" accept="image/png, image/jpeg, image/jpg" class="custom-file-input form-control-file" id="post_header_image" name="post_header_image[]" multiple>
                      <label class="custom-file-label" for="post_header_image">Izaberite sliku</label>
                    </div> 
                  </div> 
                  <div class="form-group mt-4" id="thumbnail_preview_wrapper" style="display: none;">
                    <img class="img-fluid" id="thumbnail_image" width="300">
                  </div>
                </div>  
                <button type="button" id="submit-button" form="create-form" class="btn btn-lg btn-secondary float-right">Potvrdi</button>
              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col- -12 col-12">
          <form action="" method="POST" id="delete-form" enctype="multipart/u-data" autocomplete="off">
            <div class="card">
              <h5 class="card-header">Slike</h5>
              <div class="card-body" id="card-body"></div>
            </div>
          </form>
        </div>
      </div>
  
</div>
    

@endsection 


@section('scripts')


{{-- Post request --}}
<script src="{{ asset('back/post-request.js')}}"></script>

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
        fontNames: [ 
          'Poppins'
        ],
        fontNamesIgnoreCheck: [
          'Poppins'
        ],
        toolbar: [
      // [groupName, [list of button]]
      ['style', ['style']],
      ['fontname', ['fontname']],
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
        $("#thumbnail_preview_wrapper").css('display', 'inherit');
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


@endsection
