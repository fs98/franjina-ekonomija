@extends('layouts.page')

@section('content')

<section class="partners-section">

<!-- Container -->

<div class="container">
	
	<!-- Row -->

	<div class="row">
		
		<div class="offset-lg-2 col-lg-8">

			<h1 class="w-100 text-center mb-5">
				<span>Partneri</span>
			</h1>

			<p class="partners-text px-3">

			Kako bismo osjetili punu snagu radosti, moramo imati nekoga s kim ćemo je podijeliti. S toga ponosna i radosna srca ovim putem iskreno zahvaljujemo svim našim partnerima koji marljivo pomažu poboljšati naš pokret "Franjina ekonomija". Njihova profesionalnost, odgovornost, požrtvovanost i odanost vrlo su važne kvalitete za nas

			<br><br>

			Ukoliko i vi želite pomoći i raditi s mladima, iznijeti svoje ideje.. rado ćemo se susresti s vama, <a href="{{ url('/contact') }}" class="text-decoration-none"><strong class="text-dark">kontaktirajte nas.</strong></a>

			</p>
		
		</div>

	</div>

	<!-- /.Row -->

	<!-- Partners logos row -->

	<div class="row mt-5 partners-logos">
		
		<div class="col-4">
			<a href="" class="d-flex justify-content-center align-items-center">
				<img src="{{ asset('images/partners/astrotech_logo.png') }}" class="img-fluid">
			</a>
		</div>

		<div class="col-4">
			<a href="" class="d-flex justify-content-center align-items-center" >
				<img src="{{ asset('images/partners/fokolar logo.png') }}" class="img-fluid">
			</a>
		</div>

		<div class="col-4">
			<a href="" class="d-flex justify-content-center align-items-center">
				<img src="{{ asset('images/partners/potrosacica.jpeg') }}" class="img-fluid">
			</a>
		</div>

		<div class="col-4">
			<a href="" class="d-flex justify-content-center align-items-center">
				<img src="{{ asset('images/partners/scu.png') }}" class="img-fluid">
			</a>
		</div>

		<div class="col-4">
			<a href="" class="d-flex justify-content-center align-items-center">
				<img src="{{ asset('images/partners/hks.jpg') }}" class="img-fluid">
			</a>
		</div>

		<div class="col-4">
			<a href="" class="d-flex justify-content-center align-items-center">
				<img src="{{ asset('images/partners/Logo (2).png') }}" class="img-fluid">
			</a>
		</div>

		<div class="col-4">
			<a href="" class="d-flex justify-content-center align-items-center"> 
				<img src="{{ asset('images/partners/UEZ_logo.png') }}" class="img-fluid">
			</a>
		</div>

	</div>

	<!-- /.Partners logos row -->

</div>

<!-- /.Container -->

</section>

@endsection('content')