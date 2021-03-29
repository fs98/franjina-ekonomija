@extends ('layouts.page')

@section ('title')
	Blog post
@endsection ('title')

@section ('content')

<section class="blog-post-section">
	
	<!-- Container -->
	<div class="container">
		
		<!-- Row -->
		<div class="row my-5">
			
			<div class="col-12 text-center mb-5">
				<h1>
					<span class="yellow-border-heading pb-1">{{ $postSingle->title }}</span>
				</h1>				
			</div>

			<!-- Blog Content -->
			<div class="col-12">
				
			{!! $postSingle->content !!}

			</div>
			<!-- /.Blog Content -->

		</div>
		<!-- /.Row -->

	</div>
	<!-- /.Container -->

</section>
 
@endsection ('content')