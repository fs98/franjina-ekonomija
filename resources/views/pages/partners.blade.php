@extends('layouts.page')

@section ('title')
	Partneri
@endsection ('title')

@section('content')

<section class="partners-section">

<!-- Container -->

<div class="container">
	
	<!-- Row -->

	<div class="row" data-aos="zoom-in" data-aos-duration="1000">
		
		<div class="offset-lg-2 col-lg-8" data-aos="zoom-in" data-aos-duration="1000">

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

	<div class="row mt-5 partners-logos" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="1000">
		@foreach ($partnersAll as $index => $partnerSingle)
		<div class="col-lg-4 col-md-6 col-12 mt-0 my-3 d-flex justify-content-center align-items-center">
			<a href="{{ $partnerSingle->website_url }}" target="_blank">
				<img src="{{ $partnerSingle->header_image_url }}" class="img-fluid" alt="{{ $partnerSingle->cover_image_description }}">
			</a>
		</div>	
		@endforeach
	</div>

	<!-- /.Partners logos row -->

</div>

<!-- /.Container -->

</section>

@endsection('content')