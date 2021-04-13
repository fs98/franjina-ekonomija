@extends ('layouts.page')

@section ('title')
	Pravila privatnosti
@endsection ('title')

@section ('content')  

<section class="gdpr-section mb-5">
	
	<!-- Container -->
	<div class="container">
		
		<!-- Row -->
		<div class="row gdpr">

			<h1 class="w-100 text-center my-5">
				<span class="yellow-border-heading">GDPR</span>
			</h1>		
			          
      <div class="offset-lg-1 col-lg-10 px-3">

				<p class="gdpr-text text-left">

          {!! $gdprContent->content !!}

				</p>
			
			</div>

		</div>
		<!-- /.Row -->

	</div>
	<!-- /.Container -->

</section>

@endsection ('content')
