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
            <h2 class="pageheader-title">Novi projekat</h2>
            <div class="page-breadcrumb">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ Route('admin.projects.index') }}" class="breadcrumb-link disabled">Projekti</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Novi projekat</li>
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
          <form action="{{ Route('admin.projects.store') }}" method="POST" id="create-form" enctype="multipart/u-data" autocomplete="off">
            <div class="card">
              <h5 class="card-header">Novi projekt - kreiranje</h5>
              <div class="card-body" id="card-body">
                <div class="row px-3" id="errors-top" style="display: none;"></div>
                <div class="form-group">
                  <label class="col-form-label" for="project_title">Naslov</label> 
                  <label class="label-required" for="project_title">(obavezno)</label>
                  <input id="project_title" type="text" class="form-control" name="project_title" autocomplete="title" autofocus autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="project_title_slug" class="col-form-label">Naslov u URL-u</label>
                  <label for="project_title_slug" class="label-required">(automatski generisano)</label>
                  <input type="text" id="project_title_slug" class="form-control" name="project_title_slug" max-length="512" readonly="" tabindex="-1">
                </div> 
                <div class="form-group">
                  <label for="col-form-label" for="project_short_description">Kratki opis</label>
                  <label for="project_short_description" class="label-required">(obavezno)</label>
                  <input type="text" id="project_short_description" name="project_short_description" class="form-control" max-length="256">
                  <label for="project_short_description" class="label-not-required">Napišite kratak opis koji će se nalazi na slajderu na početnoj stranici ispod naslova posta.</label>
                </div>
                <div class="form-group">
                  <label class="col-form-label" for="project_header_image">Slika</label>
                  <label class="label-required" for="project_header_image">(obavezno)</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" accept="image/png, image/jpeg, image/jpg" class="custom-file-input form-control-file" id="project_header_image" name="project_header_image">
                      <label class="custom-file-label" for="project_header_image">Izaberite sliku</label>
                    </div> 
                  </div> 
                  <div class="form-group mt-4" id="thumbnail_preview_wrapper" style="display: none;">
                    <img class="img-fluid" id="thumbnail_image">
                  </div>
                </div> 
                <div class="form-group mt-3">
                  <label for="project_header_image_alt" class="col-form-label">Opis slike (prikazuje se ako se slika nije učitala)</label>
                  <label for="project_header_image_alt" class="label-not-required">(neobavezno)</label>
                  <input type="text" id="project_header_image_alt" class="form-control" name="project_header_image_alt" value="" maxlength="256">
                </div>

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="project_start_date" class="col-form-label">Početak</label>
                    <label for="project_header_image_alt" class="label-not-required">(obavezno)</label>
                    <input type="date" class="form-control" id="project_start_date" name="project_start_date" value="">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="project_end_date" class="col-form-label">Kraj</label>
                    <label for="project_header_image_alt" class="label-not-required">(obavezno)</label>
                    <input type="date" class="form-control" id="project_end_date" name="project_end_date" value="">
                  </div>
                </div>

                <h4 class="mt-3">Sljedeći podaci se odnose na donacije. Ukoliko ne želite da se donacije prikažu posjetiocima stranice, potrebno je da to odredite funkcijom on/off, a tražene informacije ne morate unijeti osim ako one nisu važne za vašu osobnu evidenciju.</h4>

                <div class="form-group">
                  <label for="project_donations">Prikazivanje donacija</label>
                  <input type="checkbox" checked data-toggle="toggle" data-on="Da" data-off="Ne" data-size="sm" name="project_donations" id="project_donations">
                </div>

                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="project_money_goal">Novčani cilj</label>
                    <input type="number" min="1" class="form-control" name="project_money_goal" id="project_money_goal" value="">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="project_money_collected">Prikupljena novčana sredstva</label>
                    <input type="number" min="1" class="form-control" name="project_money_collected" id="project_money_collected" value="">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="project_money_investors">Broj ulagača</label>
                    <input type="number" min="1" class="form-control" name="project_money_investors" id="project_money_investors" value="">
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-form-label" for="project_content">Sadržaj</label>
                  <label class="label-required" for="project_content">(obavezno)</label>
                  <textarea id="summernote" name="project_content"></textarea>
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
  $('#project_header_image').on('change',function(e){
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
