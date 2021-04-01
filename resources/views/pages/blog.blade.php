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
			

			<div class="col-12 col-lg-8">

				<div class="row">
					<h1 class="w-100 text-center my-5 pb-2">
						<span class="yellow-border-heading">Blog</span>
					</h1>	
				</div>

				<div class="row">
					
					@foreach ($postAll as $index => $postSingle)
						
					<div class="col-12">
						<div class="card mb-5 w-100 border-0">
							<div class="row no-gutters">
								<div class="col-sm-4 col-12">
									<img src="{{ $postSingle->header_image_url }}" class="img-fluid">
								</div>
								<div class="col-sm-8 col-12">
									<div class="card-body d-flex flex-column justify-content-between h-100">
										<div>
											<h5 class="card-title font-weight-bold">{{ $postSingle->title }}</h5>
											<p class="card-text my-0">{{ $postSingle->short_description }}</p>
										</div>
										<div class="text-right mt-3 mt-md-0">
											<a href="{{ Route('blogPost', ['post' => $postSingle->title_slug]) }}" class="btn rounded-0 px-4 py-2 mt-3 text-dark font-weight-bold bg-light">Saznaj više</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					@endforeach
	
					<div class="d-flex w-100 justify-content-center">
						{{ $postAll->links() }}
					</div>
					
				</div>

				 

			</div>
			
			<div class="col-lg-4 bloggers">
	
			<h1 class="w-100 text-center my-5">
				<span class="yellow-border-heading">Blogeri</span>
			</h1>	

			<div class="row mb-5">
				
				<div class="col-12 col-md-6 col-lg-12 mb-4">
					<div class="text-center">
						<img src="https://via.placeholder.com/260x260" class="img-fluid mt-2">
						<h5 class="mt-2">Jane Doe</h5>
					</div>
				</div>

				<div class="col-12 col-md-6 col-lg-12 mb-4">
					<div class="text-center">
						<img src="https://via.placeholder.com/260x260" class="img-fluid mt-2">
						<h5 class="mt-2">Jane Doe</h5>
					</div>
				</div>

				<div class="col-12 col-md-6 col-lg-12 mb-4">
					<div class="text-center">
						<img src="https://via.placeholder.com/260x260" class="img-fluid mt-2">
						<h5 class="mt-2">Jane Doe</h5>
					</div>
				</div>

				<div class="col-12 col-md-6 col-lg-12 mb-4">
					<div class="text-center">
						<img src="https://via.placeholder.com/260x260" class="img-fluid mt-2">
						<h5 class="mt-2">Jane Doe</h5>
					</div>
				</div>

			</div>

			</div>

		</div>
		<!-- /.Row -->

	</div>
	<!-- /.Container -->

</section>

@endsection ('content')

@section('scripts')
	

<script>
	var previous = document.querySelector('[aria-label="« Previous"] span').innerHTML = "Nazad";
	var previous = document.querySelector('[aria-label="Next »"]').innerHTML = "Naprijed";
</script>

@endsection