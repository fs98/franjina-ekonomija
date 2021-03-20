@extends ('layouts.page')

@section ('content')
	
<section class="projects-section">
	
	<!-- Container -->
	<div class="container my-5">
			
		<!-- Row -->
		<div class="row">

			<div class="col-12 text-center mb-3">
				<h1>
					<span class="yellow-border-heading pb-1">Trenutni projekti</span>
				</h1>				
			</div>
			
			<div class="col-12 mt-5">
				<div class="card border-0 text-center">
				  <img src="{{ asset('images/home/400x450.png') }}" alt="...">
				  <div class="card-body px-0">
				    <h4 class="card-title font-weight-bold mt-4">Lorem ipsum</h4>
				    <p class="card-text text-center mt-2 px-3">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed </p>
				    <div class="border border-danger p-2">
				    	<span class="d-flex flex-row justify-content-between px-2">
				    		<span class="d-flex justify-content-start">
				    			<img src="{{ asset('icons/projects/user.svg') }}" class="img-fluid projects-card-icon">
				    			<p class="my-auto pl-1">1000 ulagača</p>
				    		</span>
				    		<span class="d-flex justify-content-end px-0 mr-0">
				    			<img src="{{ asset('icons/projects/heart.svg') }}" class="img-fluid projects-card-icon">
				    			<p class="my-auto pl-1">10 Sviđa mi se</p>
				    		</span> 
				    	</span>
				    </div>
				    <a href="#" class="btn rounded-0 px-4 py-2 mt-3 text-white">Saznaj više</a>
				  </div>
				</div>
			</div>

		</div>
		<!-- /.Row -->

	</div>
	<!-- /.Container -->

</section>

@endsection ('content')