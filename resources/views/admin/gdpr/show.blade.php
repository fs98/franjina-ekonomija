@extends('layouts.concept-layout')

@section('links')

<title>GDPR</title>
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
          <div class="col-12">
            <div class="page-header" id="top">
              <h2 class="pageheader-title">GDPR</h2>
              <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link disabled">GDPR</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tekst</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <h5 class="card-header">Pravila privatnosti</h5>
              <div class="card-body"> 
                <form action="{{ Route('admin.gdpr.update', ['gdpr' => '1']) }}" method="POST" id="update-form" enctype="multipart/form-data" autocomplete="off">
                  <div class="form-group">
                    <label class="col-form-label" for="gdpr_content">Sadržaj</label>
                    <label class="label-required" for="gdpr_content">(obavezno)</label>
                    <textarea id="gdpr_content" name="gdpr_content">{{ $gdpr->content }}</textarea>
                  </div> 
                  <button type="button" id="submit-button" form="update-form" class="btn btn-lg btn-secondary float-right">Potvrdi</button>
                  @method('put')
                </form>
              </div>
            </div>
          </div>
        </div>
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
   $('#gdpr_content').summernote({
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
      ['fontname', ['fontname']],
      ['style', ['bold', 'italic', 'underline', 'clear']], 
      ['para', ['ul', 'ol', 'paragraph']], 
      ['insert',['link']],
      ['view', ['fullscreen']]
    ]
    });  
  </script>

@endsection('scripts')