@extends ('layouts.page')

@section ('title')
	Projekti
@endsection ('title')

@section('links')

 <!-- Swiper -->
 <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

@endsection('links')

@section ('content')
	
<section class="projects-section">
	
	<!-- Container -->
	<div class="container my-5">
			
		<!-- Row -->
		<div class="row">

			<div class="col-12 text-center mb-5">
				<h1>
					<span class="yellow-border-heading pb-1">Trenutni projekti</span>
				</h1>				
			</div>

			<!-- Swiper -->
			  <div class="swiper-container px-4">
			    <div class="swiper-wrapper">

			    	<!-- Slide -->
			      <div class="swiper-slide">

			      	<!-- Card -->
    					<div class="card border-0 text-center">
							  <img src="{{ asset('images/home/400x450.png') }}" alt="...">
							  <div class="card-body px-0">
							    <h4 class="card-title font-weight-bold mt-2">Lorem ipsum</h4>
							    <p class="card-text text-center mt-2 px-3">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed </p>
							    <div class="border project-card-box p-2">
							    	<span class="d-flex flex-row justify-content-between px-2 mt-1">
							    		<span class="d-flex justify-content-start">
							    			<img src="{{ asset('icons/projects/user.svg') }}" class="img-fluid projects-card-icon">
							    			<p class="my-auto pl-1">1000 ulagača</p>
							    		</span>
							    		<span class="d-flex justify-content-end px-0 mr-0">
							    			<img src="{{ asset('icons/projects/heart.svg') }}" class="img-fluid projects-card-icon">
							    			<p class="my-auto pl-1">10 Sviđa mi se</p>
							    		</span> 
							    	</span>
							    	<span class="d-flex flex-column px-2 mt-2">
							    		<p class="font-weight-bold text-left mt-2">Cilj</p>
											<div class="progress mx-4 mt-n2">
											  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 20%" aria-valuenow="300" aria-valuemin="0" aria-valuemax="10100"></div>
											</div>	
											<div class="mt-4 mx-4 d-flex justify-content-between align-items-start">
												<span class="text-left">
													<span class="p-2 money-amount">300,00</span>
												</span>
												<span>&mdash;</span>
												<span>
													<span class="p-2 money-amount">101.00,00</span>
												</span>
											</div>	 	    		
							    	</span>
							    		<p class="d-flex flex-row justify-content-between mt-3 px-2 mx-4">
							    			<small>10 dana do završetka</small>
							    			<small>100% prikupljeno</small>
						    			</p>
							    	<button class="btn rounded-0 mb-2 text-white px-4">Podržite kampanju</button>
							    </div>
							    <a href="#" class="btn rounded-0 px-4 py-2 mt-3 text-white">Saznaj više</a>
							  </div>
							</div>
							<!-- /.Card -->

			      </div>
			      <!-- /.Slide -->				    	

			    </div>
			    <!-- Add Arrows -->
			    <div class="swiper-button-next"></div>
			    <div class="swiper-button-prev"></div>

			    <!-- Add Pagination -->
    			<div class="swiper-pagination"></div>
			  </div>

		</div>
		<!-- /.Row -->

		<!-- Row -->
		<div class="row mt-5">

			<div class="col-12 text-center mb-5 mt-5">
				<h1>
					<span class="yellow-border-heading pb-1">Završeni projekti</span>
				</h1>				
			</div>

			<!-- Swiper -->
			  <div class="swiper-container px-4">
			    <div class="swiper-wrapper">

			    	<!-- Slide -->
			      <div class="swiper-slide">

			      	<!-- Card -->
    					<div class="card border-0 text-center">
							  <img src="{{ asset('images/home/400x450.png') }}" alt="...">
							  <div class="card-body px-0">
							    <h4 class="card-title font-weight-bold mt-2">Lorem ipsum</h4>
							    <p class="card-text text-center mt-2 px-3">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed </p>
							    <a href="#" class="btn rounded-0 px-4 py-2 mt-3 text-white">Saznaj više</a>
							  </div>
							</div>
							<!-- /.Card -->

			      </div>
			      <!-- /.Slide -->

			    </div>
			    <!-- Add Arrows -->
			    <div class="swiper-button-next"></div>
			    <div class="swiper-button-prev"></div>

			    <!-- Add Pagination -->
    			<div class="swiper-pagination"></div>
			  </div>

		</div>
		<!-- /.Row -->		

	</div>
	<!-- /.Container -->

</section>

@endsection ('content')

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

@endsection('scripts')