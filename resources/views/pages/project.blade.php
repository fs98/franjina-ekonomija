@extends ('layouts.page')

@section ('title')
	Projekat
@endsection ('title')

@section ('content')

<section class="blog-post-section">
	
	<!-- Container -->
	<div class="container">
		
		<!-- Row -->
		<div class="row my-5">
			
			<div class="col-12 text-center mb-5">
				<h1>
					<span class="yellow-border-heading pb-1">Lorem ipsum</span>
				</h1>				
			</div>

			<!-- Project Description -->
			<div class="col-12">
				
				...

			</div>
			<!-- /.Project Description -->		

		</div>
		<!-- /.Row -->

	</div>
	<!-- /.Container -->

	<!-- Container -->
	<div class="container">
		
		<!-- Row -->
		<div class="row">
			
			<div class="mb-5 col-lg-6 offset-lg-3 col-sm-10 offset-sm-1 col-12 offset-0">
				
				<div class="border project-card-box p-4 text-center">
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

			</div>

		</div>
		<!-- /.Row -->

		<!-- Row -->
		<div class="row mb-5">
			
			<div class="col-12 text-center">
				<h1>
					<span class="yellow-border-heading pb-1">Galerija</span>
				</h1>				
			</div>

		</div>
		<!-- /.Row -->

		<!-- Row -->
		<div class="mb-5 row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 gallery">

			<!-- Gallery -->
				
			<div class="col mb-4">
        <a href="https://via.placeholder.com/150" data-fancybox="gallery">
          <img src="https://via.placeholder.com/150" class="img-fluid"  alt="">
        </a>
      </div>

      <div class="col mb-4">
        <a href="https://via.placeholder.com/150x600" data-fancybox="gallery">
          <img src="https://via.placeholder.com/150x600" class="img-fluid"  alt="">
        </a>
      </div>

      <div class="col mb-4">
        <a href="https://via.placeholder.com/300x60" data-fancybox="gallery">
          <img src="https://via.placeholder.com/300x60" class="img-fluid"  alt="">
        </a>
      </div>

      <div class="col mb-4">
        <a href="https://via.placeholder.com/700" data-fancybox="gallery">
          <img src="https://via.placeholder.com/700" class="img-fluid"  alt="">
        </a>
      </div>

      <div class="col mb-4">
        <a href="https://via.placeholder.com/1200x180" data-fancybox="gallery">
          <img src="https://via.placeholder.com/1200x180" class="img-fluid"  alt="">
        </a>
      </div>

			<!-- /.Gallery -->		

		</div>
		<!-- /.Row -->		

	</div>
	<!-- /.Container -->

</section>



@endsection ('content')