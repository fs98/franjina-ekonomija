@extends('layouts.concept-layout')

@section('links')

<title>Newsletter</title>
<meta name="csrf-token" content="{{ csrf_token() }}" /> 
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script> 
<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

@endsection('links')

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
      <div class="col-12">
        <form action="{{ Route('admin.newsletter.store') }}" method="POST" id="create-form" enctype="multipart/u-data" autocomplete="off">
          <div class="card">
            <h5 class="card-header">Novi email - newsletter</h5>
            <div class="card-body">
              <div class="form-group row pt-2">
                <label class="col-1 control-label my-auto">Predmet</label>
                <div class="col-11">
                  <input class="form-control" type="text" id="newsletter_subject" name="newsletter_subject">
                </div>
              </div> 
              <div class="form-group row">
                <div class="col-12"> 
                  <textarea id="newsletter_content" name="newsletter_content" class="form-control"></textarea>
                </div>
              </div>
              <div class="form-row">
                <div class="col-12">
                  <button class="btn btn-primary" type="button" id="submit-button" form="create-form">Pošalji</button>
                  <a class="btn btn-secondary text-white" href="{{ Route('admin.newsletter.index') }}" type="button">Odustani</a>
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

{{-- Post request --}}
<script src="{{ asset('back/post-request.js')}}"></script>

{{-- Summernote --}}
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script> 

  <!-- Summernote Language -->
  <script src="{{ asset('js/summernote-hr-HR.js') }}"></script>

  {{-- Summernote button list --}}
  <script type="text/javascript">
   $('#newsletter_content').summernote({
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
      ['table', ['table']],
      ['insert',['link']],
      ['view', ['fullscreen']]
    ]
    });  
  </script>

@endsection('scripts')