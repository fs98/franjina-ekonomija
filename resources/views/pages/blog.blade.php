@extends ('layouts.page')

@section ('title')
	Blog
@endsection ('title')

@section ('content')

<section class="blog-section">
	
	<!-- Container -->
	<div class="container">
		
		<!-- Row -->
		<div class="row">
			

			<div class="col-lg-8">

				<h1 class="w-100 text-center my-5 pb-2">
					<span class="yellow-border-heading">Blog</span>
				</h1>	

				@foreach ($postAll as $index => $postSingle)
						
						<div class="card mb-5 w-100 border-0" style="height: 250px !important;">
							<div class="row no-gutters">
								<div class="col-sm-4 col-12" style="height: 250px;">
									<img src="https://via.placeholder.com/300x300" class="img-fluid py-0 my-0 w-100 h-100" style="object-position: center; object-fit: cover">
								</div>
								<div class="col-sm-8 col-12">
									<div class="card-body d-flex flex-column justify-content-between h-100">
										<div>
											<h5 class="card-title font-weight-bold">Lorem ipsum</h5>
											<p class="card-text my-0">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
										</div>
										<div class="text-right">
											<button class="btn bg-white font-weight-bold px-3 py-2 rounded-0">Saznaj više</button>
										</div>
									</div>
								</div>
							</div>
						</div>

				@endforeach

				<div class="d-flex justify-content-center">
					{{ $postAll->links() }}
				</div>
		

			</div>
			
			<div class="col-lg-4 bloggers">
	
			<h1 class="w-100 text-center my-5">
				<span class="yellow-border-heading">Blogeri</span>
			</h1>	

			<div class="mb-5">
				
				<div class="text-center">
					<img src="{{ asset('images/blog/260x260-circle.png') }}" class="img-fluid mt-4">
					<h5 class="mt-2">Jane Doe</h5>
				</div>

				<div class="text-center mt-5">
					<img src="{{ asset('images/blog/260x260-circle.png') }}" class="img-fluid mt-3">
					<h5 class="mt-2">Jane Doe</h5>
				</div>

				<div class="text-center mt-5">
					<img src="{{ asset('images/blog/260x260-circle.png') }}" class="img-fluid mt-3">
					<h5 class="mt-2">Jane Doe</h5>
				</div>

				<div class="text-center mt-5">
					<img src="{{ asset('images/blog/260x260-circle.png') }}" class="img-fluid mt-3">
					<h5 class="mt-2">Jane Doe</h5>
				</div>

			</div>

			</div>

		</div>
		<!-- /.Row -->

	</div>
	<!-- /.Container -->

</section>

@endsection ('content')
