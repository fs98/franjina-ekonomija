@extends('layouts.concept-layout')


@section('links')

<title>Novi post</title>
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
                  <label class="col-form-label" for="post_title">Naslov</label> 
                  <label class="label-required" for="post_title">(obavezno, max 70 karaktera)</label>
                  <input id="post_title" maxlength="70" type="text" class="form-control" name="post_title" autocomplete="title" autofocus autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="post_title_slug" class="col-form-label">Naslov u URL-u</label>
                  <label for="post_title_slug" class="label-required">(automatski generisano)</label>
                  <input type="text" id="post_title_slug" class="form-control" name="post_title_slug" maxlength="255" readonly="" tabindex="-1">
                </div>
                <div class="form-group">
                  <label for="col-form-label" for="post_keywords">Klju??ne rije??i</label>
                  <label for="post_keywords" class="label-required">(obavezno)</label>
                  <input type="text" id="post_keywords" name="post_keywords" class="form-control" maxlength="255">
                  <label for="post_keywords" class="label-not-required">Klju??ne rije??i odvojite zarezom</label>
                </div>
                <div class="form-group">
                  <label for="col-form-label" for="post_short_description">Kratki opis</label>
                  <label for="post_short_description" class="label-required">(obavezno)</label>
                  <input type="text" id="post_short_description" name="post_short_description" class="form-control" maxlength="255">
                  <label for="post_short_description" class="label-not-required">Napi??ite kratak opis koji ??e se nalazi na slajderu na po??etnoj stranici ispod naslova posta.</label>
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
                  <div class="form-group mt-4" id="thumbnail_preview_wrapper" style="display: none;">
                    <img class="img-fluid" id="thumbnail_image" width="300">
                  </div>
                </div> 
                <div class="form-group mt-3">
                  <label for="post_header_image_alt" class="col-form-label">Opis slike (prikazuje se ako se slika nije u??itala)</label>
                  <label for="post_header_image_alt" class="label-not-required">(neobavezno)</label>
                  <input type="text" id="post_header_image_alt" class="form-control" name="post_header_image_alt" value="" maxlength="256">
                </div>
                
                <div class="form-group">
                  <label class="col-form-label" for="post_content">Sadr??aj</label>
                  <label class="label-required" for="post_content">(obavezno)</label>
                  <textarea id="summernote" name="post_content"></textarea>
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

{{-- Summernote --}}
<script src="{{ asset('js/summernote.min.js') }}"></script> 
<script src="{{ asset('js/summernote-cleaner.js') }}"></script> 

  <!-- Summernote Language -->
  <script src="{{ asset('js/summernote-hr-HR.js') }}"></script>

  {{-- Summernote button list --}}
  <script type="text/javascript">
   $('#summernote').summernote({
        lang: 'hr-HR',
        tabsize: 2,
        height: 500,  
        fontSizeUnits: ['px'],
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
    ],
    cleaner:{
      action: 'both', 
      newline: '<br>',  
      keepHtml: true,
      keepOnlyTags: ['<p>', '<br>', '<ul>', '<li>', '<b>', '<strong>','<i>', '<a>'], 
      keepClasses: true,
      badTags: ['style', 'script', 'applet', 'embed', 'noframes', 'noscript', 'html'],
      badAttributes: ['style', 'start'],
      limitChars: false, 
      limitDisplay: false,
      limitStop: false
    }
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
