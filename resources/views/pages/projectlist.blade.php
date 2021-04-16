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

			@if ($projectsActive->isNotEmpty())

				<!-- Swiper -->
			  <div class="swiper-container px-4">
			    <div class="swiper-wrapper">

					@foreach ($projectsActive as $index => $projectsActiveSignleRow)
							
							<!-- Slide -->
							<div class="swiper-slide">

								<!-- Card -->
							  <div class="card border-0 text-center">
								  <img src="{{ $projectsActiveSignleRow->header_image_url }}" alt="{{ $projectsActiveSignleRow->cover_image_description }}">
								  <div class="card-body px-0">
								  <h5 class="card-title font-weight-bold mt-2">{{ $projectsActiveSignleRow->title }}</h5>
								  <p class="card-text text-center mt-2 px-3 h-100-px truncate-overflow" title="{{ $projectsActiveSignleRow->short_description }}" >{{ $projectsActiveSignleRow->short_description }}</p>

								  @if ($projectsActiveSignleRow->donations == true)
                    <div class="border project-card-box p-2 mt-2">
                      <span class="d-flex flex-row justify-content-between px-2 mt-1">
                        <span class="d-flex justify-content-start">
                          <img src="{{ asset('icons/projects/user.svg') }}" alt="user icon" class="img-fluid projects-card-icon">
                          <p class="my-auto pl-1">{{ $projectsActiveSignleRow->investors }}</p>
                        </span> 
                      </span>
                      <span class="d-flex flex-column px-2 mt-2">
                        <p class="font-weight-bold text-left mt-2">Cilj</p>
                          <div class="progress mx-4 mt-n2">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: {{  $projectsActiveSignleRow->percentage . '%' }}" aria-valuenow="300" aria-valuemin="0" aria-valuemax="10100"></div>
                          </div>	
                          <div class="mt-4 mx-4 d-flex justify-content-between align-items-start">
                            <span class="text-left">
                              <span class="p-2 money-amount">{{ $projectsActiveSignleRow->money_collected }}</span>
                            </span>
                            <span>&mdash;</span>
                            <span>
                              <span class="p-2 money-amount">{{ $projectsActiveSignleRow->money_goal }}</span>
                            </span>
                          </div>	 	    		
                      </span>
                        <p class="d-flex flex-row justify-content-between mt-3 px-2 mx-4">
                          <small>{{ $projectsActiveSignleRow->days_left }} dana do završetka</small>
                          <small>{{ $projectsActiveSignleRow->percentage }} % prikupljeno</small>
                        </p>
                        <a class="btn rounded-0 mb-2 text-white px-4 button" href="{{ Route('support') }}">Podržite kampanju</a>
                    </div>
                  @endif
                  
								  <a href="{{ Route('specificProject', ['project' => $projectsActiveSignleRow->title_slug]) }}" class="btn rounded-0 px-4 py-2 mt-3 text-white">Saznaj više</a>
								  </div>
							  </div>
							  <!-- /.Card -->
	  
						</div>
						<!-- /.Slide --> 
				  
					@endforeach  

			    </div>
			    <!-- Add Arrows -->
			    <div class="swiper-button-next"></div>
			    <div class="swiper-button-prev"></div>

			    <!-- Add Pagination -->
    			<div class="swiper-pagination"></div>
			  </div>

			@else 
			
				<div class="col-12 text-center">
					<h5 class="font-weight-normal">Trenutno nema aktivnih projekata</h5>	
				</div>

			@endif

		</div>
		<!-- /.Row -->

		<!-- Row -->
		<div class="row mt-5">

			<div class="col-12 text-center mb-5 mt-5">
				<h1>
					<span class="yellow-border-heading pb-1">Završeni projekti</span>
				</h1>				
			</div>

			@if ($projectsPassed->isNotEmpty())

				<!-- Swiper -->
			  <div class="swiper-container px-4">
			    <div class="swiper-wrapper">
				
					@foreach ($projectsPassed as $index => $projectsPassedSingleRow)
								
							<!-- Slide -->
							<div class="swiper-slide">

								<!-- Card -->
								<div class="card border-0 text-center">
									<img src="{{ $projectsPassedSingleRow->header_image_url }}" alt="{{ $projectsPassedSingleRow->cover_image_description }}">
									<div class="card-body px-0">
										<h4 class="card-title font-weight-bold mt-2">{{ $projectsPassedSingleRow->title }}</h4>
										<p class="card-text text-center mt-2 px-3">{{ $projectsPassedSingleRow->short_description }}</p>
										<a href="{{ Route('specificProject', ['project' => $projectsPassedSingleRow->title_slug]) }}" class="btn rounded-0 px-4 py-2 mt-3 text-white">Saznaj više</a>
									</div>
									</div>
									<!-- /.Card -->

							</div>
							<!-- /.Slide -->

					@endforeach	

			    </div>
			    <!-- Add Arrows -->
			    <div class="swiper-button-next"></div>
			    <div class="swiper-button-prev"></div>

			    <!-- Add Pagination -->
    			<div class="swiper-pagination"></div>
			  </div>

			@else

			<div class="col-12 text-center">
				<h5 class="font-weight-normal">Trenutno nema završenih projekata</h5>	
			</div>

			@endif	

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