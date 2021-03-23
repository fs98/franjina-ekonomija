@extends('layouts.page')

@section ('title')
	Partneri
@endsection ('title')

@section('content')

<section class="partners-section">

<!-- Container -->

<div class="container">
	
	<!-- Row -->

	<div class="row">
		
		<div class="offset-lg-2 col-lg-8">

			<h1 class="w-100 text-center mb-5 mt-5 mt-lg-0">
				<span class="yellow-border-heading">Partneri</span>
			</h1>		

			<p class="partners-text text-center">

			Kako bismo osjetili punu snagu radosti, moramo imati nekoga s kim ćemo je podijeliti. S toga ponosna i radosna srca ovim putem iskreno zahvaljujemo svim našim partnerima koji marljivo pomažu poboljšati naš pokret "Franjina ekonomija". Njihova profesionalnost, odgovornost, požrtvovanost i odanost vrlo su važne kvalitete za nas

			<br><br>

			Ukoliko i vi želite pomoći i raditi s mladima, iznijeti svoje ideje.. rado ćemo se susresti s vama, <a href="{{ url('/contact') }}" class="text-decoration-none"><strong class="text-dark">kontaktirajte nas.</strong></a>

			</p>
		
		</div>

	</div>

	<!-- /.Row -->

	<!-- Partners logos row -->

	<div class="row mt-5 partners-logos">
		
		<div class="col-lg-4 col-md-6 col-12 mt-0 my-3 d-flex justify-content-center align-items-center">
			<a href="http://www.astrotechworld.com/" target="_blank">
				<img src="{{ asset('images/partners/astrotech-logo.png') }}" class="img-fluid">
			</a>
		</div>

		<div class="col-lg-4 col-md-6 col-12 mt-0 my-3 d-flex justify-content-center align-items-center">
			<a href="http://fokolar.hr/" target="_blank">
				<img src="{{ asset('images/partners/fokolar-logo.png') }}" class="img-fluid">
			</a>
		</div>

		<div class="col-lg-4 col-md-6 col-12 mt-0 my-3 d-flex justify-content-center align-items-center">
			<a href="http://potrosacica.hr/" target="_blank">
				<img src="{{ asset('images/partners/potrosacica-logo.jpeg') }}" class="img-fluid">
			</a>
		</div>

		<div class="col-lg-4 col-md-6 col-12 mt-0 my-3 d-flex justify-content-center align-items-center">
			<a href="https://scu-bih.ba/" target="_blank">
				<img src="{{ asset('images/partners/scu-logo.png') }}" class="img-fluid">
			</a>
		</div>

		<div class="col-lg-4 col-md-6 col-12 mt-0 my-3 d-flex justify-content-center align-items-center">
			<a href="http://www.unicath.hr/" target="_blank">
				<img src="{{ asset('images/partners/hks-logo.jpg') }}" class="img-fluid">
			</a>
		</div>

		<div class="col-lg-4 col-md-6 col-12 mt-0 my-3 d-flex justify-content-center align-items-center">
			<a href="http://uez.hr/" target="_blank">
				<img src="{{ asset('images/partners/uez-logo-3.png') }}" class="img-fluid">
			</a>
		</div>

		<div class="col-lg-4 col-md-6 col-12 mt-0 my-3 d-flex justify-content-center align-items-center">
			<a href="http://uez.hr/" target="_blank"> 
				<img src="{{ asset('images/partners/uez-logo-2.png') }}" class="img-fluid">
			</a>
		</div>

	</div>

	<!-- /.Partners logos row -->

</div>

<!-- /.Container -->

</section>

@endsection('content')