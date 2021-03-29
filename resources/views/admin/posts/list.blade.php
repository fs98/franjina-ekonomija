@extends('layouts.concept-layout')

@section('links')

<title>Svi postovi</title>
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
              <h2 class="pageheader-title">Blog postovi</h2>
              <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ Route('admin.posts.index') }}" class="breadcrumb-link disabled">Blogovi</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Lista</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <h5 class="card-header">Postovi</h5>
              <div class="card-body">
                <a class="float-right" href="{{ Route('admin.posts.create') }}">
                  <button class="btn btn-sm btn-warning mb-3">Kreiranje novog posta</button>
                </a>
                <div class="table-responsive">
                  <table class="table table-striped table-bordered first" id="allPostsTable">
                    <thead>
                      <tr>
                        <th>Slika</th>
                        <th>Naslov</th>
                        <th>Kreiran</th>
                        <th>Upravljanje</th> 
                      </tr>
                    </thead>  
                    <tbody>
                      @foreach($postAll as $index => $postSingleRow)
                      <tr>
                        <td class="text-truncate">
                          <img src="{{ $postSingleRow->header_image_url }}" alt="" width="50">
                        </td>
                        <td>{{ $postSingleRow->title }}</td>
                        <td>
                          @if(Helper::isSet($postSingleRow->formatted_publish_date))
                            <span>{{ $postSingleRow->formatted_publish_date }}</span>
                          @else
                            <span>N/A</span>
                          @endif
                        </td>
                        <td class="text-center table-column-controls">
                          <a href="{{ Route('admin.posts.edit', ['post' => $postSingleRow->id]) }}" class="btn btn-primary pointer mr-2">
                            <span>Uredi</span>
                          </a>
                          <form action="{{ Route('admin.posts.destroy', ['post' => $postSingleRow->id]) }}" method="POST" class="d-inline-block">
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
                        <th>Naslov</th>
                        <th>Kreiran</th>
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
    </div>
  </div>
@endsection('main-content')


@section('scripts')

@include('admin.include.delete-single-element')

<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.24/datatables.min.js"></script>

<script>
  $(document).ready(function() {
    $('#allPostsTable').dataTable({
      "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Croatian.json"
          }
    });
  })
</script>


@endsection('scripts')