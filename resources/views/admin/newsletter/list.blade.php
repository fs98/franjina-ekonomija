@extends('layouts.concept-layout')

@section('links')

<title>Pretplate</title>
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
              <h2 class="pageheader-title">Newsletter</h2>
              <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ Route('admin.newsletter.index') }}" class="breadcrumb-link disabled">Pretplate</a></li>
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
              <h5 class="card-header">Pretplate</h5>
              <div class="card-body"> 
                <div class="table-responsive">
                  <table class="table table-striped table-bordered first" id="allPostsTable" style="table-layout: fixed">
                    <thead>
                      <tr>
                        <th>Email</th>
                        <th>Od</th>
                        <th>Status</th>   
                      </tr>
                    </thead>  
                    <tbody>
                      @foreach($subscriptionsAll as $index => $subscriptionsSingleRow)
                      <tr>
                        <td>{{ $subscriptionsSingleRow->subscriber_email }}</td>
                        <td>{{ $subscriptionsSingleRow->formatted_publish_date }}</td> 
                        <td>{!! $subscriptionsSingleRow->status !!}</td> 
                      </tr>
                      @endforeach
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Email</th>
                        <th>Od</th>
                        <th>Status</th>   
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