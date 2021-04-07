@extends('layouts.concept-layout')

@section('links')
    
<title>Svi postovi</title>
<meta name="csrf-token" content="{{ csrf_token() }}" /> 
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
 
<link rel="stylesheet" type="text/css" href="{{ asset('css/calendar/main.min.css') }}">

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
              <div class="page-breadcrumb">
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="{{ Route('admin.events.index') }}" class="breadcrumb-link">Kalendar</a></li> 
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
                  <div id='calendar'></div>
              </div>
          </div>
      </div>
      
      <!-- Modal --> 
      <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg"> 
          <div class="modal-content p-5 border-0 rounded-0">
            <span>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </span>
            <img id="event_header_image" class="img-fluid mb-5">
            <div class="row">
              <div class="col-12">
                <h4 class="w-100">Naziv događaja: <span class="w-100 border-bottom text-muted ml-3" id="modal_event_title"></span> </h4>
              </div>
              <div class="col-lg-5 col-12">
                <h4 class="mt-4 w-100">Datum: <span class="w-100 border-bottom text-muted ml-3" id="modal_event_date"></span></h4>
              </div>
              <div class="col-lg-7 col-12">
                <h4 class="mt-4 d-flex justify-content-lg-end justify-content-start">
                  <span id="modal_event_start_hour_parent">Od <span class="border-bottom text-muted" id="modal_event_start_hour"></span> h </span><span id="modal_event_end_hour_parent">do <span class="border-bottom text-muted" id="modal_event_end_hour"></span> h</span>
                </h4>
              </div>
              <div class="col-12">
                <h4 class="mt-4 w-100 border p-3" id="modal_event_zoom_link_parent">Zoom link: <a id="modal_event_zoom_link" href="" target="_blank" class="h5 font-weight-light text-wrap"></a></h4>
              </div>
              <div class="col-lg-3 col-12" id="modal_event_basic_info_title">
                <h4 class="mt-4">Osnovne informacije</h4>
              </div>
              <div class="col-lg-9 col-12 mt-4">
                <p id="modal_event_basic_info"></p>
              </div>
              <div class="w-100 text-right">
                <a href="" class="btn btn-primary pointer mr-2" id="update-button">
                  <span>Uredi</span>
                </a>
                <form id="delete-form" method="POST" class="d-inline-block">
                  @csrf
                  <button class="btn btn-danger pointer" type="button" onclick="deleteSingleItem(this)">
                    <span>Izbriši</span>
                  </button>
                  @method('delete')
                </form>
              </div>
            </div> 
            
          </div>
        </div>
      </div>
  </div>
  <!-- ============================================================== -->
  <!-- end simple calendar -->
  <!-- ============================================================== --> 
</div>
    
@endsection

@include('admin.include.delete-single-element')

@section('scripts')
<script type="text/javascript" src="{{ asset('js/calendar/main.min.js') }}"></script>
     
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

		var date = new Date();
    var formattedDate = date.getFullYear() + "-" + ('0' + (date.getMonth()+1)).slice(-2) + "-" + ('0' + date.getDate()).slice(-2); 

		var w = window.innerWidth;

		var events = [];

		{!! $events !!}.forEach(element => {
			if(element.start < formattedDate) {
				element.backgroundColor = '#BB1C2E';
				element.textColor = '#fff';
			} else {
				element.backgroundColor = '#FFD403';
				element.textColor = '#000';
			}

			events.push(element)  
		}); 

			var calendar = new FullCalendar.Calendar(calendarEl, {
				initialView: 'dayGridMonth',
        themeSystem: 'bootstrap',
        locale: 'hr',
        weekNumberCalculation: 'ISO',
        contentHeight: 'auto',
        headerToolbar: false,
        displayEventTime : false,
        eventLimit: true, // allow "more" link when too many events
        dayMaxEvents: 1, 
        moreLinkContent: (num) => {
          return "+još " + num.num;
        },
        events: events,
				eventClick: function(info) {  
					$('.bd-example-modal-lg').modal('show'); 
          $('#modal_event_title').text(info.event.title); 
					$('#modal_event_date').text(info.event.extendedProps.formatted_date);

          // Header Image (optional)
          if (info.event.extendedProps.header_image_url) {
            // Do not display img tag if image is not found
            $('#event_header_image').on("error", function(){
              $('#event_header_image').css("display", "none");
            })
            $('#event_header_image').attr("src", info.event.extendedProps.header_image_url).css("display", "block"); 
          }

          // Start Hour (Optional)
          if (info.event.extendedProps.start_hour) {
            $('#modal_event_start_hour').text(info.event.extendedProps.start_hour);
            $('#modal_event_start_hour_parent').css("display", "block")
          } else { 
            $('#modal_event_start_hour_parent').css("display", "none")
          }

          // End Hour (Optional)
          if (info.event.extendedProps.end_hour) {
            $('#modal_event_end_hour').text(info.event.extendedProps.end_hour);
            $('#modal_event_end_hour_parent').css("display", "block")
          } else {
            $('#modal_event_end_hour_parent').css("display", "none")
          }

          // Zoom Link (Optional)
					if (info.event.extendedProps.zoom_link) {
				  	$('#modal_event_zoom_link').attr("href", info.event.extendedProps.zoom_link); 
            $('#modal_event_zoom_link').text(info.event.extendedProps.zoom_link);
            $('#modal_event_zoom_link_parent').css("display", "block")
          } else {
            $('#modal_event_zoom_link_parent').css("display", "none")
          }

          // Description (Optional)
          if (info.event.extendedProps.description) {
					  $('#modal_event_basic_info').text(info.event.extendedProps.description); 
            $('#modal_event_basic_info').css("display", "block")
            $('#modal_event_basic_info_title').css("display", "block")
          } else {
            $('#modal_event_basic_info').css("display", "none")
            $('#modal_event_basic_info_title').css("display", "none")
          }     
          
          $('#update-button').attr("href", "events/" + info.event.id + "/edit");
          $('#delete-form').attr("action", "events/" + info.event.id);
				}, 
			});
      
    calendar.render();
  });
</script>

@endsection