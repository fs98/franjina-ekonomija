@extends('layouts.concept-layout')


@section('links')

<title>Uređivanje partnera</title>
<meta name="csrf-token" content="{{ csrf_token() }}" />

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script> 

@endsection('links')

@section('main-content')


<div class="container-fluid dashboard-content">
  <div class="row">
    <div class="col-12">
      <div class="row">
        <div class="col-12">
          <div class="page-header" id="top">
            <h2 class="pageheader-title">Slike</h2>
            <div class="page-breadcrumb">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ Route('admin.sliders.index') }}" class="breadcrumb-link disabled">Slajderi</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Slike</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
        <div class="card">
          <h5 class="card-header">Slike</h5>
          <div class="card-body"> 
            <div class="table-responsive">
              <table class="table table-striped table-bordered first" id="allPostsTable" style="table-layout: fixed">
                <thead>
                  <tr>
                    <th>Slika</th> 
                    <th>Redoslijed</th> 
                    <th>Upravljanje</th> 
                  </tr>
                </thead>  
                <tbody>
                  @foreach($imagesAll as $index => $imagesSingleRow)
                  <tr>
                    <td>
                      <img src="{{ $imagesSingleRow->header_image_url }}" alt="" width="50">
                    </td>
                    <td>{{ $imagesSingleRow->order }}</td>  
                    <td>
                      <a href="{{ Route('admin.sliders.edit', ['slider' => $imagesSingleRow->id]) }}" class="btn btn-primary pointer mr-2">
                        <span>Uredi</span>
                      </a>
                      <form action="{{ Route('admin.sliders.destroy', ['slider' => $imagesSingleRow->id]) }}" method="POST" class="d-inline-block">
                        @csrf
                        <button class="btn btn-danger pointer" type="button" onclick="deleteSingleItem(this)">
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
                    <th>Slika</th> 
                    <th>Redoslijed</th> 
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

<script src="{{ asset('back/put-request.js')}}"></script>

{{-- Show image title and preview when selected --}}
<script>
$('#partner_header_image').on('change',function(e){
      //get the file name
      var fileName = e.target.files[0].name;
      //replace the "Choose a file" label
      $(this).next('.custom-file-label').html(fileName);
      var image = document.getElementById('thumbnail_image');
      image.src = URL.createObjectURL(event.target.files[0]); 
    });
</script>

@endsection('scripts')
