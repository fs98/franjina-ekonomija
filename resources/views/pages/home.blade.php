@extends('layouts.page')

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

	<!-- Container -->
	<div class="container">
		
		<!-- Row -->
		<div class="row">
			


		</div>
		<!-- /.Row -->

	</div>
	<!-- /.Container -->	

	<!-- Container -->
	<div class="container my-5">
		
		<!-- Row -->
		<div class="row">

		<div class="col-12 w-100 text-center mb-5">
			<h1>
				<span class="yellow-border-heading pb-1">Novosti</span>
			</h1>
		</div>

					
			<!-- Swiper News -->

			<!-- Swiper -->
			  <div class="swiper-container">
			    <div class="swiper-wrapper">
			      <div class="swiper-slide">
			      	<div class="card border-0">
							  <img src="{{ asset('images/home/400x450.png') }}" class="card-img-top rounded-0" alt="...">
							  <div class="card-body px-0">
							    <h4 class="card-title font-weight-bold mt-4">Lorem ipsum</h4>
							    <p class="card-text text-left mt-5 ">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed </p>
							    <a href="#" class="btn rounded-0 px-4 py-2 mt-3 text-white">Saznaj više</a>
							  </div>
							</div>
			      </div>
			      <div class="swiper-slide">
			      	<div class="card border-0">
							  <img src="{{ asset('images/home/400x450.png') }}" class="card-img-top rounded-0" alt="...">
							  <div class="card-body px-0">
							    <h4 class="card-title font-weight-bold mt-4">Lorem ipsum</h4>
							    <p class="card-text text-left mt-5 ">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed </p>
							    <a href="#" class="btn rounded-0 px-4 py-2 mt-3 text-white">Saznaj više</a>
							  </div>
							</div>
			      </div>
			      <div class="swiper-slide">
			      	<div class="card border-0">
							  <img src="{{ asset('images/home/400x450.png') }}" class="card-img-top rounded-0" alt="...">
							  <div class="card-body px-0">
							    <h4 class="card-title font-weight-bold mt-4">Lorem ipsum</h4>
							    <p class="card-text text-left mt-5 ">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed </p>
							    <a href="#" class="btn rounded-0 px-4 py-2 mt-3 text-white">Saznaj više</a>
							  </div>
							</div>
			      </div>
			      <div class="swiper-slide">
			      	<div class="card border-0">
							  <img src="{{ asset('images/home/400x450.png') }}" class="card-img-top rounded-0" alt="...">
							  <div class="card-body px-0">
							    <h4 class="card-title font-weight-bold mt-4">Lorem ipsum</h4>
							    <p class="card-text text-left mt-5 ">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed </p>
							    <a href="#" class="btn rounded-0 px-4 py-2 mt-3 text-white">Saznaj više</a>
							  </div>
							</div>
			      </div>
			      <div class="swiper-slide">
			      	<div class="card border-0">
							  <img src="{{ asset('images/home/400x450.png') }}" class="card-img-top rounded-0" alt="...">
							  <div class="card-body px-0">
							    <h4 class="card-title font-weight-bold mt-4">Lorem ipsum</h4>
							    <p class="card-text text-left mt-5 ">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed </p>
							    <a href="#" class="btn rounded-0 px-4 py-2 mt-3 text-white">Saznaj više</a>
							  </div>
							</div>
			      </div>
			      <div class="swiper-slide">
			      	<div class="card border-0">
							  <img src="{{ asset('images/home/400x450.png') }}" class="card-img-top rounded-0" alt="...">
							  <div class="card-body px-0">
							    <h4 class="card-title font-weight-bold mt-4">Lorem ipsum</h4>
							    <p class="card-text text-left mt-5 ">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed </p>
							    <a href="#" class="btn rounded-0 px-4 py-2 mt-3 text-white">Saznaj više</a>
							  </div>
							</div>
			      </div>
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
			  <div class="swiper-container">
			    <div class="swiper-wrapper">
			      <div class="swiper-slide">
			      	<div class="card border-0">
							  <img src="{{ asset('images/home/400x450.png') }}" class="card-img-top rounded-0" alt="...">
							  <div class="card-body px-0">
							    <h4 class="card-title font-weight-bold mt-4">Lorem ipsum</h4>
							    <p class="card-text text-left mt-5 ">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed </p>
							    <a href="#" class="btn rounded-0 px-4 py-2 mt-3 text-white">Saznaj više</a>
							  </div>
							</div>
			      </div>
			      <div class="swiper-slide">
			      	<div class="card border-0">
							  <img src="{{ asset('images/home/400x450.png') }}" class="card-img-top rounded-0" alt="...">
							  <div class="card-body px-0">
							    <h4 class="card-title font-weight-bold mt-4">Lorem ipsum</h4>
							    <p class="card-text text-left mt-5 ">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed </p>
							    <a href="#" class="btn rounded-0 px-4 py-2 mt-3 text-white">Saznaj više</a>
							  </div>
							</div>
			      </div>
			      <div class="swiper-slide">
			      	<div class="card border-0">
							  <img src="{{ asset('images/home/400x450.png') }}" class="card-img-top rounded-0" alt="...">
							  <div class="card-body px-0">
							    <h4 class="card-title font-weight-bold mt-4">Lorem ipsum</h4>
							    <p class="card-text text-left mt-5 ">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed </p>
							    <a href="#" class="btn rounded-0 px-4 py-2 mt-3 text-white">Saznaj više</a>
							  </div>
							</div>
			      </div>
			      <div class="swiper-slide">
			      	<div class="card border-0">
							  <img src="{{ asset('images/home/400x450.png') }}" class="card-img-top rounded-0" alt="...">
							  <div class="card-body px-0">
							    <h4 class="card-title font-weight-bold mt-4">Lorem ipsum</h4>
							    <p class="card-text text-left mt-5 ">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed </p>
							    <a href="#" class="btn rounded-0 px-4 py-2 mt-3 text-white">Saznaj više</a>
							  </div>
							</div>
			      </div>
			      <div class="swiper-slide">
			      	<div class="card border-0">
							  <img src="{{ asset('images/home/400x450.png') }}" class="card-img-top rounded-0" alt="...">
							  <div class="card-body px-0">
							    <h4 class="card-title font-weight-bold mt-4">Lorem ipsum</h4>
							    <p class="card-text text-left mt-5 ">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed </p>
							    <a href="#" class="btn rounded-0 px-4 py-2 mt-3 text-white">Saznaj više</a>
							  </div>
							</div>
			      </div>
			      <div class="swiper-slide">
			      	<div class="card border-0">
							  <img src="{{ asset('images/home/400x450.png') }}" class="card-img-top rounded-0" alt="...">
							  <div class="card-body px-0">
							    <h4 class="card-title font-weight-bold mt-4">Lorem ipsum</h4>
							    <p class="card-text text-left mt-5 ">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed </p>
							    <a href="#" class="btn rounded-0 px-4 py-2 mt-3 text-white">Saznaj više</a>
							  </div>
							</div>
			      </div>
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


	<script type="text/javascript">
	document.getElementById('contact').classList.add("active")
</script>


</section>

@endsection
