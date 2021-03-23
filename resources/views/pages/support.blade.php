@extends ('layouts.page')

@section ('title')
	Podrška
@endsection ('title')

@section('links')

<!-- Swiper -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" /> 

@endsection('links')

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
					<h5 class="font-weight-normal ml-3 ml-sm-4 ml-md-0 ml-lg-0 ml-xl-4 mt-5">Izaberite iznos</h5>
					<small class="ml-3 ml-sm-4 ml-md-0 ml-lg-0 ml-xl-4">*Količina novca se odnosi na valutu €</small>
					<div class="row mt-2">
						<div class="col-6 col-md-3 text-center"><a href="" class="btn btn-lg rounded-0 text-decoration-none">100€</a></div>
						<div class="col-6 col-md-3 text-center"><a href="" class="btn btn-lg rounded-0 text-decoration-none">200€</a></div>
						<div class="col-6 col-md-3 text-center mt-2 mt-md-0"><a href="" class="btn btn-lg rounded-0 text-decoration-none">300€</a></div>
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

		<!-- Row -->
		<div class="row mt-5">
			
			<div class="col-12 col-lg-10 offset-lg-1 p-5 bank-donate">
				<span class="d-flex flex-column flex-lg-row justify-content-between text-center align-items-center px-lg-5 px-2">
					<h3>Također možete donirati i preko banke</h3>
					<img src="{{ asset('icons/support/bank.svg') }}" class="img-fluid mt-3 mt-lg-0">
				</span>

				<!-- Donate Form -->
				<span class="px-0 px-lg-5 mt-5">
					<h5 class="font-weight-normal ml-3 ml-sm-4 ml-md-0 ml-lg-0 ml-xl-4 mt-5">Banka</h5>
					<h5 class="ml-5 mt-3 font-weight-bold">Naziv banke</h5>
				</span>

				<span class="px-0 px-lg-5 mt-3">
					<h5 class="font-weight-normal ml-3 ml-sm-4 ml-md-0 ml-lg-0 ml-xl-4 mt-5">Broj žiro računa</h5>
					<h5 class="ml-5 mt-3 font-weight-bold">123 456 789 123</h5>
				</span>
					
				<!-- /.Donate Form -->

			</div>

		</div>
		<!-- /.Row -->

		<!-- Row -->
		<div class="row">
			
			<div class="col-12 text-center mt-5">
				<h1>
					<span class="yellow-border-heading pb-1">Partneri</span>
				</h1>				
			</div>	

		</div>
		<!-- /.Row -->	
			
	</div>
	<!-- /.Container -->

	<section class="support-background-section">

		<div class="support-background-section-overlay">
			
			<!-- Container -->
			<div class="container py-5">
				
				<!-- Row -->
				<div class="row my-5">
					
					<div class="col-12 col-md-10 offset-md-1 col-xl-8 offset-xl-2">

						<h5 class="text-white font-weight-normal text-center">
							Svatko se od nas barem jednom u životu našao u situaciji gdje je htio nešto pitati, ali nije imao ni znao koga. Međutim, nekada i znamo koga bi pitali, ali nam je neugodno, nesigurni smo ili se bojimo. S druge strane, možda imaš super ideju, ali ne znaš kako je započeti, ne želiš raditi sam/a, nedostaju ti resursi za provedbu... 
								<br><br>
							Zato smo mi tu, rado ćemo ti pokušati pomoći. <strong>Kontaktiraj nas!</strong>
						</h5>

					</div>

				</div>
				<!-- /.Row -->
			
			<!-- /.Container -->
			</div>

		</div>
		
	</section>

	<section class="py-5 support-page-partners-slider-section">
				
		<!-- Swiper -->
		  <div class="swiper-container support-page-partners-slider">
		    <div class="swiper-wrapper">

		    	<!-- Slide -->
		    	<div class="swiper-slide">
		      	<a href="http://www.astrotechworld.com/" target="_blank">
							<img src="{{ asset('images/partners/astrotech-logo.png') }}" class="img-fluid">
						</a>
		      </div>
		      <div class="swiper-slide">
		      	<a href="http://fokolar.hr/" target="_blank">
							<img src="{{ asset('images/partners/fokolar-logo.png') }}" class="img-fluid">
						</a>
		      </div>
		      <div class="swiper-slide">
		      	<a href="http://potrosacica.hr/" target="_blank">
							<img src="{{ asset('images/partners/potrosacica-logo.jpeg') }}" class="img-fluid">
						</a>
		      </div>
		      <div class="swiper-slide">
		      	<a href="https://scu-bih.ba/" target="_blank">
							<img src="{{ asset('images/partners/scu-logo.png') }}" class="img-fluid">
						</a>
		      </div>
		      <div class="swiper-slide">
		      	<a href="http://www.unicath.hr/" target="_blank" >
							<img src="{{ asset('images/partners/hks-logo.jpg') }}" class="img-fluid">
						</a>
		      </div>
		      <div class="swiper-slide">
		      	<a href="http://uez.hr/" target="_blank">
							<img src="{{ asset('images/partners/uez-logo-3.png') }}" class="img-fluid">
						</a>
		      </div>
		      <div class="swiper-slide">
		      	<a href="http://uez.hr/" target="_blank"> 
							<img src="{{ asset('images/partners/uez-logo-2.png') }}" class="img-fluid">
						</a>
		      </div>

	      </div>
	      <!-- Add Arrows -->
		    <div class="swiper-button-next"></div>
		    <div class="swiper-button-prev"></div>
    	</div>

	</section>

</section>

@endsection ('content')

@section('scripts')

<!-- Swiper -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
  var swiper = new Swiper('.support-page-partners-slider', {
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },  
    breakpoints: {
      640: {
        slidesPerView: 1,
        spaceBetween: 0,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 0,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 0,
      },
    }
  });
</script> 

@endsection('scripts')