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
		<div class="row" data-aos="zoom-in" data-aos-duration="1000">
			
			<div class="col-12 text-center">
				<h1>
					<span class="yellow-border-heading pb-1">Podrška</span>
				</h1>				
			</div>

			<div class="offset-lg-1 col-lg-10">

				<p class="partners-text text-left">

          Zahvaljujemo svim institucijama privatnog, civilnog i javnog sektora na njihovom prepoznavanju pokreta Franjina ekonomija - zajedničko dijeljenje vrijednosti, misije i vizije kroz kvalitetnu umreženost omogućuje nam uspješnost u ostvarivanju ciljeva.

          <br><br>Želite li i vi podržati razvoj i projekte ovog pokreta?
          
          <br><br>Ukoliko nas želite podržati i doprinijeti razvoju ovog pokreta svoje donacije možete uplatiti slijedećim putem:
          

				</p>
			
			</div>		

		</div>
		<!-- /.Row -->

		<!-- Row -->
		<div class="row" data-aos="zoom-in" data-aos-duration="1000">
			
			<div class="col-12 col-lg-10 offset-lg-1 p-5 card-donate rounded-15">
        <div class="row">
          <div class="col-9">
            <h3>Možete donirati preko banke</h3>
          </div>
          <div class="col-3">
            <img src="{{ asset('icons/support/bank.svg') }}" alt="bank icon" class="img-fluid mt-3 mt-lg-0 float-right">
          </div>
        </div> 

				<!-- Donate -->
        <div class="row">
          <div class="col-12">
            <h5 class="font-weight-normal">Ime</h5>					
            <h5 class="ml-5 mt-3 font-weight-bold">Udruga za Ekonomiju zajedništva</h5>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-12">
            <h5 class="font-weight-normal">Adresa</h5>					
            <h5 class="ml-5 mt-3 font-weight-bold">Franje Račkog 26, 48260 Križevci - HR</h5>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-12">
            <h5 class="font-weight-normal">Swift</h5>					
            <h5 class="ml-5 mt-3 font-weight-bold">ZABAHR2x</h5>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-12">
            <h5 class="font-weight-normal ">Banka</h5>
				  	<h5 class="mt-3 ml-5 font-weight-bold">Zagrebačka banka d.d.</h5>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-12">
            <h5 class="font-weight-normal">Broj žiro računa</h5>					
            <h5 class="ml-5 mt-3 font-weight-bold">HR9423600001101828177</h5>
          </div>
        </div> 
        <div class="row mt-3">
          <div class="col-12">
            <h5 class="font-weight-normal">Svrha</h5>				
            <h5 class="ml-5 mt-3 font-weight-bold">donacija za FE</h5>
          </div>
        </div> 
				<!-- /.Donate -->

			</div>

		</div>
		<!-- /.Row -->

		<!-- Row -->
		<div class="row mt-5 text-center"  data-aos="zoom-in" data-aos-duration="1000">
			
			<div class="col-12 col-lg-10 offset-lg-1 p-5 bank-donate rounded-15">
        <div class="row">
          <div class="col-9">
            <h3 class="text-center">Očitajte ovaj QR kod Vašom bankovnom internet aplikacijom</h3>
          </div>
          <div class="col-3">
            <img src="{{ asset('icons/support/creditcard.svg') }}" alt="credit card icon" class="img-fluid mt-3 mt-lg-0 float-right">
          </div>
        </div> 

				<!--  QR Code -->

				<div class="row">
          <div class="col-md-6 offset-md-3 col-10 offset-1">
            <img src="{{ asset('images/QR/qr_kod_eof_donacija.svg') }}" alt="qr kod" class="img-fluid qr-code mt-5">
          </div>
        </div>
					
				<!-- /.QR Code -->

			</div>

		</div>
		<!-- /.Row -->

		<!-- Row -->
		<div class="row">
			
			<div class="col-12 text-center mt-5 mb-3">
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

					@foreach ($partnersAll as $index => $partnerSingle)
						<!-- Slide -->
						<div class="swiper-slide">
							<a href="{{ $partnerSingle->website_url }}" target="_blank">
								<img src="{{ $partnerSingle->header_image_url }}" class="img-fluid" alt="{{ $partnerSingle->cover_image_description }}">
							</a>
						</div>
					@endforeach

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
    loop: true,   
    speed: 2000,
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
  $('.support-page-partners-slider').on('mouseenter', function(){
    swiper.autoplay.stop();
  })
  $('.support-page-partners-slider').on('mouseleave', function(){
    swiper.autoplay.start();
  })
</script> 

@endsection('scripts')