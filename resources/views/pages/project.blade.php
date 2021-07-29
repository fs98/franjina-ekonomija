@extends ('layouts.page')

@section ('title')
{{ $projectSingle->title }}
@endsection ('title')

@section('links')
<meta name="keywords" content="{{ $projectSingle->keywords }}">

<!-- Fancybox Gallery -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.fancybox.min.css') }}">

<link rel="stylesheet" href="{{ asset('vendor/fonts/fontawesome/css/fontawesome-all.css')}}"> 

@endsection('links')

@section ('content')

<section class="blog-post-section">
	
	<!-- Container -->
	<div class="container">
		
		<!-- Row -->
		<div class="row my-5">
			
			<div class="col-12 text-center mb-5">
				<h1>
					<span class="yellow-border-heading pb-1">{{ $projectSingle->title }}</span>
				</h1>				
			</div>

			<!-- Project Description -->
			<div class="col-12">
				
				{!! $projectSingle->content !!}

			</div>
			<!-- /.Project Description -->		

		</div>
		<!-- /.Row -->

	</div>
	<!-- /.Container -->

	
	<!-- Container -->
	<div class="container">
		
		@if ($projectSingle->donations == true)
		
		<!-- Row -->
		<div class="row">
			<div class="mb-5 col-lg-6 offset-lg-3 col-sm-10 offset-sm-1 col-12 offset-0"> 
				<div class="border project-card-box p-4 text-center rounded-15">
					<span class="d-flex flex-row justify-content-between px-2 mt-1">
						<span class="d-flex justify-content-start">
							<img src="{{ asset('icons/projects/user.svg') }}" alt="user icon" class="img-fluid projects-card-icon">
							<p class="my-auto">{{ $projectSingle->investors }} ulagača</p>
						</span>
					</span>
					<span class="d-flex flex-column px-2 mt-2">
						<p class="font-weight-bold text-left mt-2">Cilj</p>
						<div class="progress mx-4 mt-n2 rounded-15">
						  <div class="progress-bar progress-bar-striped progress-bar-animated rounded-15" role="progressbar" style="width: {{  $projectSingle->percentage . '%' }}" aria-valuenow="300" aria-valuemin="0" aria-valuemax="10100"></div>
						</div>	
						<div class="mt-4 mx-4 d-flex justify-content-between align-items-start">
							<span class="text-left">
								<span class="py-2 px-3 money-amount rounded-15"><span>{{ $projectSingle->money_collected }} €</span></span>
							</span>
							<span>&mdash;</span>
							<span>
								<span class="py-2 px-3 money-amount rounded-15"><span>{{ $projectSingle->money_goal}} €</span></span>
							</span>
						</div>	 	    		
					</span>
						<p class="d-flex flex-row justify-content-between mt-3 px-2 mx-4">
							<small>{{ $projectSingle->days_left}} dana do završetka</small>
							<small>{{ $projectSingle->percentage}} % prikupljeno</small>
						</p>
					<a class="btn rounded-15 mb-2 text-white px-4 button" href="{{ Route('support') }}">Podržite kampanju</a>
				</div>

			</div>

		</div>
		<!-- /.Row -->

		@endif

    @if (($projectSingle->photos)->isNotEmpty())
        
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

        @foreach($projectSingle->photos as $index => $photo)
          <div class="col mb-4">
            <a href="{{ $photo->header_image_url }}" data-fancybox="gallery">
              <img src="{{ $photo->header_image_url }}" alt="{{ $photo->cover_image_description }}" class="img-fluid rounded-15"  alt="">
            </a>
          </div>
        @endforeach

        <!-- /.Gallery -->		

      </div>
      <!-- /.Row -->

    @endif		

	</div>
	<!-- /.Container -->

</section>


@endsection ('content')

@section('scripts')

<!-- [Fancybox Image Gallery] -->
<script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
<script type="text/javascript">
$().fancybox({
    selector : '.imglist a:visible'
});

$('[data-fancybox="gallery"]').fancybox({
   buttons: [
    "close"
  ],
  loop: false,
  keyboard: true,
  infobar: true,

});
    
</script>  

@endsection('scripts')