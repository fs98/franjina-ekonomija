@extends('layouts.concept-layout')

@section('links')

<title>Alle Beiträge</title>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<script src="{{ asset('assets/jquery/jquery-3.3.1.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

@endsection('links')


@section('main-content')
  
  <div class="container-fluid dashboard-content">
    <div class="row">
      <div class="col-12 col-xl-11">
        <div class="row">
          <div class="col-12">
            <div class="page-header" id="top">
              <h2 class="pageheader-title">News Artikelliste</h2>
              <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ Route('admin.index') }}" class="breadcrumb-link">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ Route('admin.users.index') }}" class="breadcrumb-link">Users</a></li>
                    <li class="breadcrumb-item active" aria-current="page">List</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <h5 class="card-header">Zeitungsartikel</h5>
              <div class="card-body">
                <div class="table-responsive">
                  <a class="float-right" href="{{ Route('admin.users.create') }}">
                    <button class="btn btn-sm btn-warning mb-3">Erstellen Sie einen neuen Artikel</button>
                  </a>
                  <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Bild</th>
                        <th>Titel</th>
                        <th>Publish Date</th>
                        <th>Author</th>
                        <th>Views</th>
                        <th>Status</th>
                        <th>Kontrollen</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($userAll as $index => $postSingleRow)
                      <tr>
                        <td>
                          @if(Helper::isSet($postSingleRow->header_image_url))
                            <img class="img-fluid table-image" src="{{ $postSingleRow->header_image_url }}" alt="Artikel Bild">
                          @endif
                        </td>
                        <td>
                          @if(Helper::isSet($postSingleRow->title_slug))
                            <a href="{{ Route('newsSingleFrontRender', ['title' => $postSingleRow->title_slug]) }}">
                              @if(Helper::isSet($postSingleRow->title))
                                <span>{{ $postSingleRow->title }}</span>
                              @else
                                <span>Title not available</span>
                              @endif
                            </a>
                          @else
                            @if(Helper::isSet($postSingleRow->title))
                              <span>{{ $postSingleRow->title }}</span>
                            @else
                              <span>Title not available</span>
                            @endif
                          @endif
                        </td>
                        <td>
                          @if(Helper::isSet($postSingleRow->post_date))
                            <span>{{ $postSingleRow->post_date }}</span>
                          @else
                            <span>N/A</span>
                          @endif
                        </td>
                        <td>
                          @if(Helper::isSet($postSingleRow->user))
                            @if(Helper::isSet($postSingleRow->user->name))
                              @if(Helper::isSet($postSingleRow->user->surname))
                                <span>{{ $postSingleRow->user->name . " " . $postSingleRow->user->surname }}</span>
                              @else
                                <span>{{ $postSingleRow->user->name }}</span>
                              @endif
                            @else
                              <span>N/A</span>
                            @endif
                          @else
                            <span>N/A</span>
                          @endif
                        </td>
                        <td>
                          @if(Helper::isSet($postSingleRow->views))
                            <span>{{ $postSingleRow->views }}</span>
                          @else
                            <span>N/A</span>
                          @endif
                        </td>
                        <td>
                          @if(Helper::isSet($postSingleRow->status))
                            <span>{{ ucfirst($postSingleRow->status) }}</span>
                          @else
                            <span>N/A</span>
                          @endif
                        </td>
                        <td class="text-center table-column-controls">
                          <a href="{{ Route('admin.users.edit', ['user' => $postSingleRow->id]) }}" class="btn btn-primary pointer mr-2">
                            <span>Bearbeiten</span>
                          </a>
                          <form action="{{ Route('admin.users.destroy', ['user' => $postSingleRow->id]) }}" method="POST" class="d-inline-block">
                            @csrf
                            <button class="btn btn-danger pointer" type="button" onclick="deleteSingleItem(this)">
                              <span>Löschen</span>
                            </button>
                            @method('delete')
                          </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Bild</th>
                        <th>Titel</th>
                        <th>Publish Date</th>
                        <th>Author</th>
                        <th>Views</th>
                        <th>Status</th>
                        <th>Kontrollen</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <div class="w-100 d-flex justify-content-center align-items-center mt-4">
                  <style>
                    dl, ol, ul {
                      margin-bottom: 0;
                    }
                  </style>
                  @if(!empty($userAll))
                    @php
                      try {
                        echo $userAll->appends(request()->input())->links();
                      } catch(Exception $e) {}
                    @endphp
                  @endif
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

@endsection('scripts')