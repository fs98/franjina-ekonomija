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
			

			<div class="col-12 col-lg-8 offset-lg-2">

				<div class="row">
					<h1 class="w-100 text-center my-5 pb-2">
						<span class="yellow-border-heading">Blog</span>
					</h1>	
				</div>

				<div class="row">

					@if ($searchResults->isNotEmpty()) 

					@foreach ($searchResults as $index => $searchResultSingle)
						
					<div class="col-12">
						<div class="card mb-5 w-100 border-0">
							<div class="row no-gutters">
								<div class="col-sm-4 col-12">
									<img src="{{ $searchResultSingle->header_image_url }}" class="img-fluid">
								</div>
								<div class="col-sm-8 col-12">
									<div class="card-body d-flex flex-column justify-content-between h-100">
										<div>
											<h5 class="card-title font-weight-bold">{{ $searchResultSingle->title }}</h5>
											<p class="card-text my-0">{{ $searchResultSingle->short_description }}</p>
										</div>
										<div class="text-right mt-3 mt-md-0">
											<a href="{{ Route('blogPost', ['post' => $searchResultSingle->title_slug]) }}" class="btn rounded-0 px-4 py-2 mt-3 text-dark font-weight-bold bg-light">Saznaj više</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					@endforeach

					@else 

					<div class="col-12 my-5 text-center">
						Nema rezultata pretraživaja.
					</div>
							
					@endif
					
					
	
					<div class="d-flex w-100 justify-content-center">
						{{ $searchResults->links() }}
					</div>
					
				</div>

				 

			</div>

		</div>
		<!-- /.Row -->

	</div>
	<!-- /.Container -->

</section>

@endsection ('content') 