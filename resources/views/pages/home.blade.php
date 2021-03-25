@extends('layouts.page')

@section ('title')
	Franjina ekonomija
@endsection ('title')

@section('links')

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

	<section class="calendar-sectionr" style="margin-top: 100px;">
		
		<!-- Container -->
		<div class="container">
		
				<!-- Row -->
			<div class="row">
				
				<div class="col-12 col-xl-7">

					<div class="text-center mb-4">

						<h5 class="mb-3">{{ date('d') }}</h5>
						<h2>
							<span class="yellow-border-month text-uppercase py-1 px-5">{{ Helper::enToHrMonth(date('m')) }}</span>
						</h2>
						<h5 class="mt-3">{{ date('Y') }}</h5>

					</div>

					 <div id='calendar' class="my-5"></div>
				</div>

				<div class="col-12 col-xl-5 d-flex align-items-end my-5 pb-2">
					
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

	<!-- Container -->
	<div class="container">
		
		<!-- Row -->
		<div class="row">
			


		</div>
		<!-- /.Row -->

	</div>
	<!-- /.Container -->	

<section class="bg-light">	

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

			    	<!-- Slide -->
			      <div class="swiper-slide">
			      	<div class="card border-0">
							  <img src="{{ asset('images/home/400x450.png') }}" alt="...">
							  <div class="card-body px-0">
							    <h4 class="card-title font-weight-bold mt-4">Lorem ipsum</h4>
							    <p class="card-text text-center mt-5 px-3">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed </p>
							    <a href="#" class="btn rounded-0 px-4 py-2 mt-3 text-white">Saznaj više</a>
							  </div>
							</div>
			      </div>
			      <!-- /.Slide -->
			      
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


	<!-- Container -->
	<div class="container mb-5">
		
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
			      
			      <!-- Slide -->
			      <div class="swiper-slide">
			      	<div class="card border-0">
							  <img src="{{ asset('images/home/400x450.png') }}" class="card-img-top rounded-0" alt="...">
							  <div class="card-body px-0">
							    <h4 class="card-title font-weight-bold mt-4">Lorem ipsum</h4>
							    <p class="card-text text-center mt-5 px-3">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed </p>
							    <a href="#" class="btn rounded-0 px-4 py-2 mt-3 text-white">Saznaj više</a>
							  </div>
							</div>
			      </div>
			      <!-- /.Slide -->

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
	      		<h4 class="mt-5 w-100">Naziv događaja: <span class="w-100 border-bottom text-muted ml-3">Lorem ipsum</span> </h4>
	      	</div>
	      	<div class="col-lg-5 col-12">
	      		<h4 class="mt-4 w-100">Datum: <span class="w-100 border-bottom text-muted ml-3">Datum</span></h4>
	      	</div>
	      	<div class="col-lg-7 col-12 text-lg-right text-left">
	      		<h4 class="mt-4 w-100">Satnica od<span class="w-100 border-bottom text-muted ml-3">13:00 h</span> do <span class="w-100 border-bottom text-muted">14:00 h</span></h4>
	      	</div>
	      	<div class="col-12">
	      		<h4 class="mt-4 w-100 border p-3">Zoom link: <span></span></h4>
	      	</div>
	      	<div class="col-lg-3 col-12">
	      		<h4 class="mt-4">Osnovne informacije</h4>
	      	</div>
	      	<div class="col-lg-9 col-12 mt-4">
	      		<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd </p>
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
    var formattedDate = date.getFullYear() + "-" + ("0" + (date.getMonth()+1)) + "-" + date.getDate();

    	var firstEvent = {
		      id: '1',
		      title: 'Test',
		      start: '2021-03-19',
		      end: '2021-03-18', 
		      backgroundColor: '#FFD403'
		    };

		  var secondEvent =  {
		      id: '2',
		      title: '2',
		      start: '2021-03-23',
		      end: '2021-03-23', 
		    }  

		    console.log(firstEvent.end + formattedDate);

		    if(firstEvent.end <= formattedDate) {
		    	firstEvent.backgroundColor = '#BB1C2E',
		    	firstEvent.textColor = '#fff';
		    }
		    else {
		    	firstEvent.backgroundColor = '#FFD403',
		    	firstEvent.textColor = '#000';
		    };

		    if(secondEvent.end <= formattedDate) {
		    	secondEvent.backgroundColor = '#BB1C2E',
		    	secondEvent.textColor = '#fff';
		    }
		    else {
		    	secondEvent.backgroundColor = '#FFD403';
		    	secondEvent.textColor = '#000';
		    }


    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
        themeSystem: 'bootstrap',
        locale: 'hr',
        weekNumberCalculation: 'ISO',
        headerToolbar: false,
        events: [
		   	 	firstEvent,
		  		secondEvent  
		  ],
	    eventClick: function(info) {
		    $('.bd-example-modal-lg').modal('show')  
		  }, 
    });
    calendar.render();

  });

</script>

@endsection('scripts')
