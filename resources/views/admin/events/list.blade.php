@extends('layouts.concept-layout')

@section('links')
    
<title>Svi postovi</title>
<meta name="csrf-token" content="{{ csrf_token() }}" /> 
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<link href="{{ asset('vendor/full-calendar/css/fullcalendar.css') }}" rel="stylesheet" />
<link href="{{ asset('vendor/full-calendar/css/fullcalendar.print.css') }}" rel="stylesheet" media="print" />

@endsection

@section('main-content')

<div class="container-fluid dashboard-content">
  <!-- ============================================================== -->
  <!-- pageheader -->
  <!-- ============================================================== -->
  <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="page-header">
              <h2 class="pageheader-title">Kalendar </h2>
              <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
              <div class="page-breadcrumb">
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                          <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Pages</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Calendar</li>
                      </ol>
                  </nav>
              </div>
          </div>
      </div>
  </div>
  <!-- ============================================================== -->
  <!-- end pageheader -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- simple calendar -->
  <!-- ============================================================== -->
  <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card">
              <div class="card-body">
                  <div id='calendar1'></div>
              </div>
          </div>
      </div>
  </div>
  <!-- ============================================================== -->
  <!-- end simple calendar -->
  <!-- ============================================================== --> 
</div>
    
@endsection

@section('scripts')
    
<script src="{{ asset('vendor/full-calendar/js/moment.min.js') }}"></script>
<script src="{{ asset('vendor/full-calendar/js/fullcalendar.js') }}"></script>  
<script src="{{ asset('vendor/full-calendar/js/calendar.js') }}"></script>

@endsection