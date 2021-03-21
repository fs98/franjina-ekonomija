@extends ('layouts.page')

@section ('title')
	Aktivnosti
@endsection ('title')

@section ('content')  

<section class="activities-section mb-5">
	
	<!-- Container -->
	<div class="container">
		
		<!-- Row -->
		<div class="row">

			<h1 class="w-100 text-center my-5 pb-5">
				<span class="yellow-border-heading">Aktivnosti</span>
			</h1>		
			
			<div class="col-12 col-md-6 col-12 px-4 text-center">
				<img src="{{ asset('icons/activities/besplatnost.svg') }}" class="img-fluid activity-icon mt-lg-0 mt-4">
				<h4 class="text-uppercase text-center font-weight-bold mt-5">Besplatnost</h4>
				<p class="mt-4 text-center">upućuje na besprijekornost neke usluge ili dobra kada ih oni imaju isplate se izuzimaju bez da korisnik plaća naknadu.</p>
			</div>
			<div class="col-12 col-md-6 col-12 px-4 text-center">
				<img src="{{ asset('icons/activities/solidarnost.svg') }}" class="img-fluid activity-icon mt-lg-0 mt-4">
				<h4 class="text-uppercase text-center font-weight-bold mt-5">Solidarnost</h4>
				<p class="mt-4 text-center">je dobrovoljna socijalna kohezija, spremnost da se pomogne i dodijeli međusobna podrška unutar grupe.</p>
			</div>
			<div class="col-12 col-md-6 col-12 px-4 text-center">
				<img src="{{ asset('icons/activities/cjelozivotno-ucenje.svg') }}" class="img-fluid activity-icon mt-lg-0 mt-4">
				<h4 class="text-uppercase text-center font-weight-bold mt-5">Cjeloživotno učenje</h4>
				<p class="mt-4 text-center">definira se kao aktivnost učenja tijekom cijelog života s ciljem unapređenja znanja, vještina i sposobnosti unutar osobne, društvene i poslovne perspektive</p>
			</div>
			<div class="col-12 col-md-6 col-12 px-4 text-center">
				<img src="{{ asset('icons/activities/ekologija.svg') }}" class="img-fluid activity-icon mt-lg-0 mt-4">
				<h4 class="text-uppercase text-center font-weight-bold mt-5">Ekologija</h4>
				<p class="mt-4 text-center"> znanost koja proučava odnose među živim organizmima, kao i njihov utjecaj na okoliš u kojem obitavaju, te utjecaj tog okoliša na njih.</p>
			</div>

		</div>
		<!-- /.Row -->

	</div>
	<!-- /.Container -->

	<!-- Container -->
	<div class="container mb-5">
		
		<!-- Row -->
		<div class="row">
			
			<div class="col-12 w-100 text-left my-3">
				<h1 class="my-4 mb-0">
					<span class="yellow-border-heading pb-1 mb-1">Susreti</span>
				</h1>
			</div>

		</div>
		<!-- /.Row -->

		<!-- Row -->
		<div class="row">	

			<div class="col-lg-6 col-12 mb-5 text-left">
				<img src="{{ asset('images/activities/1.png') }}" class="img-fluid meetings-img">
			</div>
			<div class="col-lg-6 col-12 d-flex align-items-center">
				<p class="px-0 px-lg-3 text-lg-center text-left">Na susretima prvog četvrtka u mjesecu sastajemo se svi zajedno kako bismo se bolje upoznali, prenijeli entuzijazam i dodatno motivirali jedni druge. Za promijeniti ekonomiju najprije moramo promijeniti čovjeka. Zato dijelimo svoja iskustva i svjedočanstva o životu EoF-a i ostale događaje gdje smo doživjeli providnost, bratstvo te druge pozitivne primjere iz naše okoline. Komentiramo svoja nova ostvarenja. Razmjenjujemo ideje i zajedno pokušavamo biti "Franjina ekonomija". Pridruži nam se, čekamo i tebe. Svaki susret započinjemo Molitvom sv. Franje za preobraženu svakodnevicu. </p>
			</div>

			<div class="col-lg-6 col-12 d-flex flex-column justify-content-center order-12 order-lg-1">
				<h3 class="font-weight-bold"><span class="yellow-border-heading">Pridruži nam se, čekamo i tebe</span></h3>
				<p class="mt-3">Svaki susret započinjemo Molitvom sv. Franje za preobraženu svakodnevnicu.</p>
			</div>
			<div class="col-lg-6 col-12 order-1 order-lg-12 mb-5 mb-lg-0 mt-3 mt-lg-0 text-lg-right text-left">
				<img src="{{ asset('images/activities/2.jpg') }}" class="img-fluid meetings-img">
			</div>

		</div>
		<!-- /.Row -->

		<!-- Row -->
		<div class="row">
			
			<div class="col-12 w-100 text-left my-3">
				<h1 class="my-4 mb-0">
					<span class="yellow-border-heading pb-1 mb-1">Molitva</span>
				</h1>
			</div>

		</div>
		<!-- /.Row -->		

		<!-- Row -->
		<div class="row mb-5 pb-5">	

			<div class="col-lg-6 col-12 mb-5">
				<img src="{{ asset('images/activities/4.png') }}" class="img-fluid meetings-img">
			</div>
			<div class="col-lg-6 col-12 d-flex align-items-center">
				<p class="px-0 px-lg-3 text-lg-center text-left">Svakog mjeseca organiziramo jedan webinar. Predavanja održavaju mnogi predavači različitih zanimanja. Zajedno prolazimo razne teme iz područja ekonomije i društva. Postavljamo razna pitanja, iznosimo svoje vizije i ideje, nadopunjujemo jedni druge i širimo svoje znanje i iskustva. Svaki webinar biti će unaprijed najavljen i prikazan na našem kalendaru. Uz najavu webinara bit će objavljen i kratki uvod o temi i predavaču kako bi interakcija između predavača i sudionika bila što konkretnija, konstruktivnija i kreativnija te na dobro nas kao pojedinca i zajednice.</p>
			</div>

			<div class="col-lg-6 col-12 d-flex flex-column justify-content-center order-12 order-lg-1">
				<p class="mt-3 text-lg-center text-left">Molitveni susret održava se svakog trećeg četvrtka u mjesecu. Ovim susretima čuvamo i jačamo karizmu "Franjine ekonomije" i duh zajedništva. Kao i na svim ostalim područjima djelovanjima, tako i ovdje pokušavamo biti što kreativniji te svaki susret obilježimo na drugačiji način. Možeš nam se priključiti i podržati nas svojim molitvama iako možda još nisi službeni član EoF-a.</p>
			</div>
			<div class="col-lg-6 col-12 order-1 order-lg-12 mb-5 mb-lg-0 mt-3 mt-lg-0 text-lg-right text-left">
				<img src="{{ asset('images/activities/3.png') }}" class="img-fluid meetings-img">
			</div>

		</div>
		<!-- /.Row -->		

	</div>
	<!-- /.Container -->

</section>

@endsection ('content')
