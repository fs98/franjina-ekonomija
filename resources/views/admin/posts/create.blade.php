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
      <!-- ============================================================== -->
      <!-- end pageheader -->
      <!-- ============================================================== -->


      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <form action="{{ Route('admin.posts.store') }}" method="POST" id="create-form" enctype="multipart/u-data" autocomplete="off">
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
                  <label class="col-form-label" for="post_header_image">Slika</label>
                  <label class="label-required" for="post_header_image">(obavezno)</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" accept="image/png, image/jpeg, image/jpg" class="custom-file-input form-control-file" id="post_header_image" name="post_header_image">
                      <label class="custom-file-label" for="post_header_image">Izaberite sliku</label>
                    </div> 
                  </div> 
                  <div class="form-group mt-4" id="thumbnail_preview_wrapper" style="display: none;">
                    <img class="img-fluid" id="thumbnail_image">
                  </div>
                </div> 
                
                <div class="form-group">
                  <label class="col-form-label" for="content">Sadržaj</label>
                  <label class="label-required" for="content">(obavezno)</label>
                  <textarea id="summernote" name="editordata"></textarea>
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

<script src="{{ asset('back/post-request.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script> 

  <!-- Summernote Language -->
  <script src="{{ asset('js/summernote-hr-HR.js') }}"></script>

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

<script>
  function readUrl(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#thumbnail_image').attr('src', e.target.result);
      $("#thumbnail_preview_wrapper").css('display','block');
      $(".custom-file-label").html(input.files[0].name);
    }
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}


  $("#post_header_image").change(function() {
    readUrl(this);
  })

</script>

@endsection
