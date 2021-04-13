@extends('layouts.concept-layout')


@section('links')

<title>Slajderi</title>
<meta name="csrf-token" content="{{ csrf_token() }}" />

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script> 
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.24/datatables.min.css"/>

@endsection('links')

@section('main-content')


<div class="container-fluid dashboard-content">
  <div class="row">
    <div class="col-12">
      <div class="row">
        <div class="col-12">
          <div class="page-header" id="top">
            <h2 class="pageheader-title">{{ $title }}</h2>
            <div class="page-breadcrumb">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ Route('admin.sliders.index') }}" class="breadcrumb-link disabled">Slajderi</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Uređivanje</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
        <div class="card">
          <h5 class="card-header">Nova slika</h5>
          <div class="card-body"> 
            <form action="{{ Route('admin.slider-images.store') }}" method="POST" id="create-form" enctype="multipart/u-data" autocomplete="off">
              <div class="form-group">
                <label class="col-form-label" for="slider_image">Slika</label>
                <label class="label-required" for="slider_image">(obavezno)</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" accept="image/png, image/jpeg, image/jpg" class="custom-file-input form-control-file" id="slider_image" name="slider_image">
                    <label class="custom-file-label" for="slider_image">Izaberite sliku</label>
                  </div> 
                </div> 
                <div class="form-group mt-4" id="thumbnail_preview_wrapper"> 
                  <img src="" class="img-fluid" id="thumbnail_image" width="300">
                </div>
              </div> 
              <div class="form-group mt-3">
                <label for="slider_image_alt" class="col-form-label">Opis slike (prikazuje se ako se slika nije učitala)</label>
                <label for="slider_image_alt" class="label-not-required">(neobavezno)</label>
                <input type="text" id="slider_image_alt" class="form-control" name="slider_image_alt" value="" maxlength="256">
              </div>
              <div class="form-group mt-3">
                <label for="slider_image_order" class="col-form-label">Redoslijed</label>
                <label for="slider_image_order" class="label-not-required">(neobavezno, no uzmite u obzir da će one slike kod kojih redoslijed nije definisan biti prve na slajderu)</label>
                <input type="number" id="slider_image_order" class="form-control" min="1" name="slider_image_order" value="" maxlength="256">
                <input type="hidden" id="slider_id" name="slider_id" value="{{ $id }}">
              </div>
              <button type="button" id="submit-button" form="create-form" class="btn btn-lg btn-secondary float-right">Potvrdi</button>
            </form>
          </div>
        </div>
        <div class="card">
          <h5 class="card-header">Galerija</h5>
            <div class="card-body" id="card-body"> 
              <div class="table-responsive">
                <table class="table table-striped table-bordered first" id="sliderImages" style="table-layout: fixed">
                  <thead>
                    <tr>
                      <th>Redoslijed</th> 
                      <th>Naziv</th> 
                      <th>Opis</th>
                      <th>Upravljanje</th> 
                    </tr>
                  </thead>  
                  <tbody>
                    @foreach ($imagesAll as $item => $imageSingle)
                    <tr>
                      <td><img src="{{ $imageSingle->header_image_url }}" alt="{{ $imageSingle->image_description }}" height="100"></td>
                      <td>{{ $imageSingle->order }}</td>
                      <td>{{ $imageSingle->image_description }}</td>
                      <td class="text-center table-column-controls">
                        <a href="{{ Route('admin.slider-images.edit', ['slider_image' => $imageSingle->id]) }}" class="btn btn-primary pointer mr-2">
                          <span>Uredi</span>
                        </a>
                        <form action="{{ Route('admin.slider-images.destroy', ['slider_image' => $imageSingle->id]) }}" method="POST" class="d-inline-block">
                          @csrf
                          <button class="btn btn-secondary pointer" type="button" onclick="deleteSingleItem(this)">
                            <span>Izbriši</span>
                          </button>
                          @method('delete')
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Naziv</th> 
                      <th>Redoslijed</th> 
                      <th>Opis</th>
                      <th>Upravljanje</th>  
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
    </div>
  </div>
</div>
    

@endsection('main-content')


@section('scripts')

{{-- Post request --}}
<script src="{{ asset('back/post-request.js')}}"></script>
@include('admin.include.delete-single-element')


{{-- Data Table --}}

<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.24/datatables.min.js"></script>
<script>
  $(document).ready(function() {
    $('#sliderImages').dataTable({
      "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Croatian.json"
          }
    });
  })
</script>

{{-- Show image title and preview when selected --}}
<script>
$('#slider_image').on('change',function(e){
      //get the file name
      var fileName = e.target.files[0].name;
      //replace the "Choose a file" label
      $(this).next('.custom-file-label').html(fileName);
      var image = document.getElementById('thumbnail_image');
      image.src = URL.createObjectURL(event.target.files[0]); 
    });
</script>

@endsection('scripts')
