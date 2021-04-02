@extends('layouts.page')

@section ('title')
	Franjina ekonomija
@endsection ('title')

@section('links')

<meta name="csrf-token" content="{{ csrf_token() }}" /> 

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<!-- Swiper -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<!-- Calendar -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/calendar/main.min.css') }}">

@endsection('links')

@section('content')

<section id="home">

	<section id="sliderSection">

		<!-- Carousel -->

			<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" >
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img src="{{ asset('images/home/slider/1.png') }}" class="d-block w-100" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="{{ asset('images/home/slider/2.png') }}" class="d-block w-100" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="{{ asset('images/home/slider/3.png') }}" class="d-block w-100" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="{{ asset('images/home/slider/4.png') }}" class="d-block w-100" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="{{ asset('images/home/slider/5.png') }}" class="d-block w-100" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="{{ asset('images/home/slider/6.png') }}" class="d-block w-100" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="{{ asset('images/home/slider/7.png') }}" class="d-block w-100" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="{{ asset('images/home/slider/8.jpg') }}" class="d-block w-100" alt="...">
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>

		<!-- /.Carousel -->

	</section>	

	<section class="calendar-section" style="margin-top: 50px;">
		
		<!-- Container -->
		<div class="container" data-aos-duration="4000">
		
				<!-- Row -->
			<div class="row d-flex">
				
				<div class="col-12 col-xl-7">

					<div class="text-center mb-4">

						<h5 class="mb-3">{{ date('d') }}</h5>
						<h2>
							<span class="yellow-border-month text-uppercase py-1 px-5">{{ Helper::enToHrMonth(date('m')) }}</span>
						</h2>
						<h5 class="mt-3">{{ date('Y') }}</h5>

					</div>

					 <div id='calendar' class="mb-5"></div>
				</div>

				<div class="col-12 col-xl-5 align-items-end mb-5 d-flex">
					
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					      <img src="{{ asset('images/home/slider-2/image-1.jpg') }}" class="d-block w-100" alt="...">
					    </div>
					    <div class="carousel-item">
					      <img src="{{ asset('images/home/slider-2/image-2.jpg') }}" class="d-block w-100" alt="...">
					    </div>
					  </div>
					  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>
					
				</div>

			</div>
			<!-- /.Row -->

		</div>
		<!-- /.Container -->

	</section>
		
<section class="bg-light" data-aos-duration="4000">	

	<!-- Container -->
	<div class="container py-5">
		
		<!-- Row -->
		<div class="row mb-5">

		<div class="col-12 w-100 text-center mb-5">
			<h1>
				<span class="yellow-border-heading pb-1">Novosti</span>
			</h1>
		</div>

					
			<!-- Swiper News -->

			<!-- Swiper -->
				<div class="swiper-container px-4">
					<div class="swiper-wrapper">

						@foreach ($postAll as $index => $postSingleRow)
								
						<!-- Slide -->
						<div class="swiper-slide">
							<div class="card border-0">
								@if (Helper::isset($postSingleRow->title)) 
								<img src="{{ $postSingleRow->header_image_url }}" alt="...">
								@else
									<img src="{{ asset('images/home/400x450.png') }}" alt="...">
								@endif
								<div class="card-body px-0">
									<h4 class="card-title font-weight-bold mt-4">
										@if (Helper::isset($postSingleRow->title)) 
											{{ $postSingleRow->title }}
										@else 
											{{ 'Ime nije dostupno '}}
										@endif
									</h4>
									<p class="card-text text-center mt-5 px-3">{{ $postSingleRow->short_description }}</p>
									<a href="{{ Route('blogPost', ['post' => $postSingleRow->title_slug]) }}" class="btn rounded-0 px-4 py-2 mt-3 text-white">Saznaj više</a>
								</div>
							</div>
						</div>
						<!-- /.Slide -->
					
						@endforeach
						
					</div>
					<!-- Add Arrows -->
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
				</div>

			<!-- /.Swiper News -->

		</div>
		<!-- /.Row -->

	</div>
	<!-- /.Container -->

</section>


<section data-aos-duration="4000">

	{{-- Container --}}
	<div class="container question-form pb-5">
		
		<!-- Row -->
		<div class="row">
			
			<div class="col-12 w-100 text-center mb-5 mt-3 mt-md-5">
				
				<h1>
					<span class="yellow-border-heading pb-1">EoF budi i ti</span>
				</h1>

			</div>

			<div class="col-12 col-lg-6 d-flex align-items-center">
				
				<p class="pr-lg-5">Osjetljiv si na siromašne? Voliš prirodu? Brineš o ekologiji? Želiš bolju ekonomiju? Osjećaš li i ti poziv nakon poruke pape Franje? Budi i ti dio velike obitelji. Sigurni smo da imaš super ideja koje možeš i želiš podijeliti s nama. Učinimo zajedno korak naprijed. Budi promjena koju želiš vidjeti u svijetu! Nemoj čekati da drugi nešto učine, učini ti nešto za sebe i druge.</p>

			</div>
			<div class="col-12 col-lg-6 d-flex align-items-center">
				
				<img src="{{ asset('images/about/image-4.jpg') }}" class="img-fluid w-100 h-100">

			</div>

		</div>
		<!-- /.Row -->

		<!-- Form -->
		<form class="mt-5" action="{{ Route('about_store') }}" method="POST" id="create-form" enctype="multipart/u-data" autocomplete="off">
			@csrf
			<div class="form-row">
				<div class="form-group col-md-6 pr-md-3">
					<label for="first_name" class="mb-1">Ime*</label>
					<input type="text" class="form-control rounded-0" id="first_name" name="first_name" placeholder="Vaše ime">
				</div>
				<div class="form-group col-md-6 pl-md-3">
					<label for="last_name" class="mb-1">Prezime*</label>
					<input type="text" class="form-control rounded-0" name="last_name" id="last_name" placeholder="Vaše prezime">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6 pr-md-3">
					<label for="phone_number" class="mb-1">Broj telefona</label>
					<input type="text" class="form-control rounded-0" id="phone_number" name="phone_number" placeholder="Vaš broj telefona">
				</div>
				<div class="form-group col-md-6 pl-md-3">
					<label for="email" class="mb-1">Email adresa*</label>
					<input type="email" class="form-control rounded-0" id="email" name="email" placeholder="Vaša email adresa">
				</div>
			</div> 
			<div class="form-group mt-2">
				<label for="question">Vaše motivacije, zanimanja, aktivnosti i/ili poruka, upit nama..</label>
				<textarea class="form-control rounded-0" id="question" name="question" rows="3" placeholder=""></textarea>
			</div> 
			<small>* Obavezna polja</small>
			<div class="form-group mt-2">
				<div class="form-group">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" required>
						<label class="form-check-label">
							Prihvatam <a href="">uvjete korištenja stranice</a> i <a href="">politiku zaštite privatnosti</a>
						</label> 
					</div>
				</div>
			</div>
			<input type="hidden" id="route" name="route" value="home">
			<div class="text-center mt-3">
				<button type="button" id="submit-button" form="create-form" class="btn py-2 px-5 text-white rounded-0 text-uppercase">Pošalji</button>
			</div>
		</form>				
		<!-- /.Form -->

	</div>
	{{-- /.Container --}}

</section>
	
@if ($projectAll->isNotEmpty())

<section class="bg-light" data-aos-duration="4000">

	<!-- Container -->
	<div class="container pb-4">
		
		<!-- Row -->
		<div class="row">

		<div class="col-12 w-100 text-center my-5">
			<h1>
				<span class="yellow-border-heading pb-1">Trenutni projekti</span>
			</h1>
		</div>

			<!-- Swiper Projects -->

			<!-- Swiper -->
				<div class="swiper-container px-4">
					<div class="swiper-wrapper"> 
						
						@foreach ($projectAll as $index => $projectSingleRow)
								
						<!-- Slide -->
						<div class="swiper-slide">
							<div class="card border-0">
								<img src="{{ $projectSingleRow->header_image_url }}" class="card-img-top rounded-0" alt="...">
								<div class="card-body px-0">
									<h4 class="card-title font-weight-bold mt-4">{{ $projectSingleRow->title }}</h4>
									<p class="card-text text-center mt-5 px-3">{{ $projectSingleRow->short_description }}</p>
									<a href="{{ Route('specificProject', ['project' => $projectSingleRow->title_slug]) }}" class="btn rounded-0 px-4 py-2 mt-3 text-white">Saznaj više</a>
								</div>
							</div>
						</div>
						<!-- /.Slide -->

						@endforeach
					

					</div>
					<!-- Add Arrows -->
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
				</div>

			<!-- /.Swiper News -->

		</div>
		<!-- /.Row -->

	</div>
	<!-- /.Container -->

</section>

@endif


	<!-- Modal -->
	<!-- Large modal -->

	<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg"> 
	    <div class="modal-content p-5 border-0 rounded-0">
	    	<span>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
        </span>
	      <img src="https://via.placeholder.com/1000x350">
	      <div class="row">
	      	<div class="col-12">
	      		<h4 class="mt-5 w-100">Naziv događaja: <span class="w-100 border-bottom text-muted ml-3" id="modal_event_title"></span> </h4>
	      	</div>
	      	<div class="col-lg-5 col-12">
	      		<h4 class="mt-4 w-100">Datum: <span class="w-100 border-bottom text-muted ml-3" id="modal_event_date"></span></h4>
	      	</div>
	      	<div class="col-lg-7 col-12 text-lg-right text-left">
	      		<h4 class="mt-4 w-100">Satnica od<span class="w-100 border-bottom text-muted ml-3" id="modal_event_start_hour"></span> h do <span class="w-100 border-bottom text-muted" id="modal_event_end_hour"></span> h</h4>
	      	</div>
	      	<div class="col-12">
	      		<h4 class="mt-4 w-100 border p-3">Zoom link: <span id="modal_event_zoom_link"></span></h4>
	      	</div>
	      	<div class="col-lg-3 col-12">
	      		<h4 class="mt-4">Osnovne informacije</h4>
	      	</div>
	      	<div class="col-lg-9 col-12 mt-4">
	      		<p id="modal_event_basic_info"></p>
	      	</div>
	      </div> 
	      
	    </div>
	  </div>
	</div>


</section>

@endsection

@section('scripts')

<!-- Swiper -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
  var swiper = new Swiper('.swiper-container', {
    pagination: {
      el: '.swiper-pagination',
      dynamicBullets: true,
      clickable: true,
      renderBullet: function (index, className) {
        return '<span class="' + className + '">' + (index + 1) + '</span>';
      },
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      640: {
        slidesPerView: 1,
        spaceBetween: 40,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 0,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 0,
      },
    }
  });
</script> 

<!-- Calendar -->
<script type="text/javascript" src="{{ asset('js/calendar/main.min.js') }}"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

		var date = new Date();
    var formattedDate = date.getFullYear() + "-" + ('0' + (date.getMonth()+1)).slice(-2) + "-" + ('0' + date.getDate()).slice(-2); 

		var w = window.innerWidth;

		var events = [];

		{!! $eventList !!}.forEach(element => {
			if(element.start < formattedDate) {
				element.backgroundColor = '#BB1C2E';
				element.textColor = '#fff';
			} else {
				element.backgroundColor = '#FFD403';
				element.textColor = '#000';
			}

			events.push(element) 
		});

		console.log(events);

		if(768 >= w) {
			var calendar = new FullCalendar.Calendar(calendarEl, {
				initialView: 'dayGridMonth',
					themeSystem: 'bootstrap',
					locale: 'hr',
					weekNumberCalculation: 'ISO',
					contentHeight: 'auto',
					headerToolbar: false,
					events: events,
				eventClick: function(info) {
					$('.bd-example-modal-lg').modal('show');
					alert(info.event.title);
				}, 
			});
		} else {
			var calendar = new FullCalendar.Calendar(calendarEl, {
				initialView: 'dayGridMonth',
					themeSystem: 'bootstrap',
					locale: 'hr',
					weekNumberCalculation: 'ISO',
					headerToolbar: false,
					events: events,
				eventClick: function(info) {
					$('.bd-example-modal-lg').modal('show') ;
					$('#modal_event_title').text(info.event.title); 
					$('#modal_event_date').text(info.event.start);
					$('#modal_event_start_hour').text(info.event.start_hour);
					$('#modal_event_end_hour').text(info.event.end_hour);

				}, 
			});
		}
    
    calendar.render();

  });

</script>

{{-- Post request --}}
<script src="{{ asset('back/post-request.js')}}"></script>

@endsection('scripts')
