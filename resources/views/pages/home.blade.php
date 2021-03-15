@extends('layouts.page')

@section('content')

<section id="sliderSection">

	<!-- Carousel -->

		<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" >
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="{{ asset('images/slider/1.png') }}" class="d-block w-100" alt="...">
		    </div>
		    <div class="carousel-item">
		      <img src="{{ asset('images/slider/2.png') }}" class="d-block w-100" alt="...">
		    </div>
		    <div class="carousel-item">
		      <img src="{{ asset('images/slider/3.png') }}" class="d-block w-100" alt="...">
		    </div>
		    <div class="carousel-item">
		      <img src="{{ asset('images/slider/4.png') }}" class="d-block w-100" alt="...">
		    </div>
		    <div class="carousel-item">
		      <img src="{{ asset('images/slider/5.png') }}" class="d-block w-100" alt="...">
		    </div>
		    <div class="carousel-item">
		      <img src="{{ asset('images/slider/6.png') }}" class="d-block w-100" alt="...">
		    </div>
		    <div class="carousel-item">
		      <img src="{{ asset('images/slider/7.png') }}" class="d-block w-100" alt="...">
		    </div>
		    <div class="carousel-item">
		      <img src="{{ asset('images/slider/8.jpg') }}" class="d-block w-100" alt="...">
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
	<script type="text/javascript">
	document.getElementById('contact').classList.add("active")
</script>
</section>

@endsection
