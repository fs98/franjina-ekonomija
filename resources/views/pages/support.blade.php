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
	<div class="container mt-5">
		
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
				<span class="d-flex flex-column flex-lg-row justify-content-between align-items-center ">
					<h3>Možete donirati preko banke</h3>
					<img src="{{ asset('icons/support/bank.svg') }}" class="img-fluid mt-3 mt-lg-0">
				</span>

				<!-- Donate -->
				<span class="px-2 px-lg-5">
					<h5 class="font-weight-normal ">Banka</h5>
					<h5 class="ml-5 mt-3 font-weight-bold">Naziv banke</h5>
				</span>

				<span class="px-0 px-lg-5 mt-4">
					<h5 class="font-weight-normal">Broj žiro računa</h5>
					<h5 class="ml-5 mt-3 font-weight-bold">123 456 789 123</h5>
				</span>

				<span class="px-0 px-lg-5 mt-4">
					<h5 class="font-weight-normal">SWIFT</h5>
					<h5 class="ml-5 mt-3 font-weight-bold">ZABAHR2X</h5>
				</span>
					
				<!-- /.Donate -->

			</div>

		</div>
		<!-- /.Row -->

		<!-- Row -->
		<div class="row mt-5 text-center">
			
			<div class="col-12 col-lg-10 offset-lg-1 p-5 bank-donate">
				<span class="d-flex flex-column flex-lg-row justify-content-lg-between align-items-center">
					<h3 class="text-center">Očitajte ovaj QR kod Vašom bankovnom internet aplikacijom</h3>
					<img src="{{ asset('icons/support/bank.svg') }}" class="img-fluid mt-3 mt-lg-0">
				</span>

				<!--  QR Code -->

				<span>
					<img src="{{ asset('images/QR/qr_kod_eof_donacija.svg') }}" class="img-fluid qr-code mt-5">
				</span>
					
				<!-- /.QR Code -->

			</div>

		</div>
		<!-- /.Row -->

		<!-- Row -->
		<div class="row">
			
			<div class="col-12 text-center mt-5">
				<h1>
					<span class="yellow-border-heading">Partneri</span>
				</h1>				
			</div>	

		</div>
		<!-- /.Row -->	
			
	</div>
	<!-- /.Container --> 

	<section class="pb-5 support-page-partners-slider-section">
				
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