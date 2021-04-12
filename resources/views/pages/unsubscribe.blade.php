@extends ('layouts.page')

@section ('title')
	Pravila privatnosti
@endsection ('title')

@section ('content')  

<section class="my-5">
	
	<!-- Container -->
	<div class="container">
		
		<!-- Row -->
		<div class="row">
			          
      <div class="offset-lg-1 col-lg-10 px-3 mt-5 text-center">

        <h1 class="unsubscribe-heading">Gotovo!</h1>

        <h2 class="text-center">Uspješno ste uklonili pretplatu te više neće primati naše newsletter mejlove.</h2>

				<h3 class="text-center">Žao nam je što idete!</h3>

        <a href="{{ Route('index') }}" class="btn go-back-btn text-white rounded-0 mt-2 px-5">Početna</a>
			
			</div>

		</div>
		<!-- /.Row -->

	</div>
	<!-- /.Container -->

</section>

@endsection ('content')
