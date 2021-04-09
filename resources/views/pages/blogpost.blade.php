@extends ('layouts.page')

@section ('title')
{{ $postSingle->title }}
@endsection ('title')

@section('links')
<meta name="keywords" content="{{ $postSingle->keywords }}">

<style>
	.MsoNormal span{
		font-family: Poppins !important;
	}
</style>

@endsection

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