@extends ('layouts.page')

@section ('content')

<section class="support-section">
	
	<!-- Container -->
	<div class="container my-5">
		
		<!-- Row -->
		<div class="row">
			
			<div class="col-12 text-center mb-5">
				<h1>
					<span class="yellow-border-heading pb-1">Podrška</span>
				</h1>				
			</div>

			<div class="offset-lg-1 col-lg-10 px-3">

				<p class="partners-text text-left">

				Zahvaljujući vašoj velikodušnosti, podržali smo sudjelovanje više od 200 mladih putem potpora za sudjelovanje i putnih doprinosa, o kojima nećemo izgubiti trag s obzirom na događaj 2021. godine.

				<br><br>Kandidati koji su se prijavili za potporu predali su obvezu uzajamnosti kako bi zauzvrat pomogli nekoj zajednici ili za opće dobro.

				<br><br>Međutim, još uvijek treba obaviti mnogo posla: i oko postavljanja događaja i potpore cijelom procesu.
				Ako želite, i dalje nam možete pomoći.

				</p>
			
			</div>		

		</div>
		<!-- /.Row -->

		<!-- Row -->
		<div class="row">
			
			<div class="col-12 col-lg-10 offset-lg-1 p-5 card-donate">
				<span class="d-flex flex-column flex-lg-row justify-content-between align-items-center px-lg-5 px-2">
					<h3>Možete donirati putem kartice</h3>
					<img src="{{ asset('icons/support/creditcard.svg') }}" class="img-fluid mt-3 mt-lg-0">
				</span>

				<!-- Donate Form -->
				<form>
					<span class="px-0 px-lg-5 mt-5">
					<h5 class="font-weight-normal ml-3 ml-sm-4 ml-md-0 ml-lg-0 mt-5">Izaberite iznos</h5>
					<small class="ml-3 ml-sm-4 ml-md-0 ml-lg-0">*Količina novca se odnosi na valutu €</small>
					<div class="row mt-2">
						<div class="col-6 col-md-3 text-center"><button class="btn btn-lg rounded-0">100€</button></div>
						<div class="col-6 col-md-3 text-center"><button class="btn btn-lg rounded-0">100€</button></div>
						<div class="col-6 col-md-3 text-center mt-2 mt-md-0"><button class="btn btn-lg rounded-0">100€</button></div>
						<div class="col-6 col-md-3 text-center text-right mt-2 mt-md-0"><input type="number" name="" min="1" class="h-100 form-control border-0 rounded-0 mx-auto" placeholder="Drugi iznos"></div>
					</div> 

					</span>
					<span class="d-flex flex-row px-lg-5 px-0 mt-5 justify-content-center">	
						<button class="btn donate-button px-2 rounded-0 border-0">Doniraj</button>
					</span>
				</form>
				<!-- /.Donate Form -->

			</div>

		</div>
		<!-- /.Row -->

	</div>
	<!-- /.Container -->

</section>

@endsection ('content')