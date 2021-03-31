@extends ('layouts.page')

@section ('title')
	O nama
@endsection ('title')

@section('links')

<meta name="csrf-token" content="{{ csrf_token() }}" /> 

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<!-- Swiper -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

@endsection('links')

@section ('content')  

<section class="about-section position-relative">
	
	<section id="1">
		
		<!-- Container -->
		<div class="container">
			
			<!-- Row -->
			<div class="row">
				
				<div class="col-12 w-100 text-center mb-4">
					
					<h1>
						<span class="yellow-border-heading pb-1">Uvodna riječ i poziv pape Franje</span>
					</h1>

				</div>

			</div>
			<!-- /.Row -->

			<!-- Row -->
			<div class="row mt-3"> 

			<div class="col-md-12 col-lg-7 pr-lg-5 d-flex align-items-center"> 
				<img src="{{ asset('images/about/image-5.png') }}" class="img-fluid">
			</div>

			<div class="col-md-12 col-lg-5 mt-lg-0 mt-5 d-flex flex-row align-items-center justify-content-center position-relative">
				<span>
					<img src="{{ asset('icons/common/quote.svg') }}" class="about-section-image img-fluid">
				</span>
				<span class="ml-3 mt-5">
					<p>
						<strong>The Economy of Francesco</strong>  međunarodni je događaj koji na poziv i inicijativu Pape Franje okuplja mlade ekonomiste, poduzetnike i pokretače pozitivnih društvenih promjena, a sve u svrhu davanja doprinosa razvoju nove ekonomije kojoj je u središtu čovjek. 
					</p>
					<p>
						Upravo je on u mladima vidio nadu za zaokret postojećeg ekonomskog sustava u smjeru pravednije, manje isključive i moralnije  ekonomije. Papa je uvjeren kako mladi posjeduju želju i gorljivost da svojom osobnošću, idejama, aktivnošću i voljom utječu na sadašnju i daju „dušu'' budućoj ekonomiji. Pismom poslanim u svibnju 2019. godine ukazao je na nedostatke trenutnog ekonomskog sustava te pozvao sve one koji žele kreirati društvo i ekonomiju temeljenu na višim vrijednostima i etičkim načelima da se priključe. Kompletan poziv pape Franje pročitajte na našem blogu: (link).
					</p>
				</span>
			</div>

			</div>
			<!-- /.Row -->
			
			<!-- Row -->
			<div class="row mt-3">

				<div class="col-12 w-100 text-center text-md-left mb-4">
					<h2 class="mb-2 mb-md-4">
						<span class="yellow-border-heading pb-1">Opis, tijek događaja</span>
					</h2>
				</div>	

				<div class="col-12">
				<p>Događaj je u početku zamišljen kao trodnevan boravak u Asizu, mjestu usko vezanom za sv. Franju Asiškog, koji je ujedno i inspiracija 
				samom pokretu. Na ovaj događaj prijavilo se preko 3000 mladih iz cijelog svijeta. Njih 2000 iz 115 zemalja svijeta prošlo je zahtjevan i 
				precizan proces prijave i bili su pozvani na glavni događaj u Asiz. Prve pripreme krenule su početkom 2020.g. Mladi su imali priliku 
				odabrati svoju grupu, tzv. selo, odnosno područje unutar ekonomije za koje smatraju da najbolje odgovara njihovom obrazovanju, 
				iskustvu i interesnom području. Sela su oduvijek područja križanja kultura i pojedinaca koji vlastitim iskustvima i razmjenom istih 
				mogu zajednički djelovati kako bi pronašli najbolje rješenje. Slijedom toga, svako selo obuhvaća jedno od ključnih područja i tema 
				unutar ekonomije te je zamišljeno kao mjesto dijaloga i sučeljavanja misli, ideja, pitanja, različitih perspektiva i prijedloga. Riječ je o 
				dvanaest „sela" koja spajaju naizgled nespojivo pa imaju često paradoksalne nazive. </p>
				<p>
				Zbog svjetske epidemiološke situacije događaj je s ožujka prebačen na studeni i time je cijeli koncept EoF-a promijenjen. Naime, 
				mladi su se umrežili i krenuli s radom unutar svojih sela. Uz mlade sudionici sela su i koordinatori koji obavljaju poslove vođenja, 
				upravljanja i organiziranja aktivnosti unutar sela, raspoređuju sudionike u podgrupe, obavljaju komunikaciju s gostima i govornicima 
				te su ujedno članovi znanstvenog odbora EoF-a. Od travnja do listopada 2020.g. svako selo intenzivno je radilo na projektima i 
				razvoju ideja koje su predstaviti javnosti na glavnom eventu od 19. - 21. studenog 2020.</p>				
				<p>Uz intenzivan rad unutar grupa organizirano je i oko 30 webinara sa gostima predavačima, stručnim i iskusnim ekonomistima iz 
				raznih dijelova svijeta (dostupni na službenom YouTube kanalu).</p>
				</div>

			</div>
			<!-- /.Row -->

			<!-- Row -->
			<div class="row mt-3">

				<div class="col-12 w-100 text-center text-md-left my-4">
					<h2 class="mb-2 mb-md-4">
						<span class="yellow-border-heading pb-1">Priprema za glavni event</span>
					</h2>
				</div>	

				<div class="col-12">
				<p>Donesena je konačna odluka da će se događaj u potpunosti pratiti online. Program događaja je zamišljen dijelom zajednički, na 
				globalnoj razini The Economy of Francesco, a dijelom je prepušten nacionalnoj razini. Kako bi programi na nacionalnim razinama bili 
				što kvalitetniji, organizirali su se HUB-ovi, središta, diljem svijeta koji će preuzeti osmišljavanje dijela aktivnosti. U nastojanju da 
				navedena tri dana budu u potpunosti posvećena događaju EoF te da svi sudionici bez obzira na vremensku zonu provedu što više 
				vremena u zajedništvu, organizirao se "maraton" - ''AROUND THE CLOCK, AROUND THE WORLD" kojem je svaki HUB doprinjeo s dijelom 
				programa. Cilj je da program ne prestane niti jednom u 24 sata, tj. da je kontinuirano popraćen video prijenosom. HUB Croatia 
				aktivno je sudjelovao u maratonu u subotu, 21. studenog 2020. od 9:00 do 10:00 sati.</p>
				</div>

			</div>
			<!-- /.Row -->			

			<!-- Row -->
			<div class="row">
				
				<div class="col-12 w-100 text-center text-md-left my-4">
					<h2 class="mb-2 mb-md-4">
						<span class="yellow-border-heading pb-1">Opis eventa</span>
					</h2>
				</div>

				<div class="col-12">
					<p>Manifestacija je započela u četvrtak, 19. studenog u 14h filmom „Poslušaj vapaj najsiromašnijih da bi preobrazio Zemlju". Konferenciju 
					je otvorio američki harvardski ekonomist Jeffrey Sachs. Neki od sudionika su svjetski poznati ekonomisti: nobelovac Muhammad 
					Yunus, Kate Raworth, Vandana Shiva, Stefano Zamagni, Mauro Magatti, Juan Camilo Cárdenas, Jennifer Nedelsky te brojni drugi. 
					Program događaja obuhvaćao je predavanja i panel rasprave ekonomskih stručnjaka s mladim ekonomistima, iznošenje postignutih 
					rezultata i predlaganje konkretnih smjernica, posjete lokacijama u Asizu značajnima za život sv. Franje s razmatranjima vezana za taj 
					događaj, razna kulturna predstavljanja i dr. Online organizacija ovog eventa omogućilo je da preko 100 000 mladih iz cijelog svijeta 
					može pratiti ovaj jedinstveni događaj. Kompletan program dostupan je na službenom EoF YouTube kanalu.</p>
					
					<p>
						<span><span class="yellow-heading">Prvi dan</span> - <a href="https://www.youtube.com/watch?v=sSDky2r5eoE" class="text-dark text-decoration-none">https://www.youtube.com/watch?v=sSDky2r5eoE</a></span><br>
						<span><span class="yellow-heading">Drugi dan</span> - <a href="https://www.youtube.com/watch?v=wq2r0uA8hJA&t=6885s" class="text-dark text-decoration-none">https://www.youtube.com/watch?v=wq2r0uA8hJA&t=6885s</a></span><br>
						<span><span class="yellow-heading">Treći dan</span> - <a href="https://www.youtube.com/watch?v=4CbUfQ0k91Y&t=14397s" class="text-dark text-decoration-none">https://www.youtube.com/watch?v=4CbUfQ0k91Y&t=14397s</a></span>
					</p>	
				</div>

			</div>
			<!-- /.Row -->

			<!-- Row -->
			<div class="row">
				
				<div class="col-12 w-100 text-center text-md-left my-4">
					<h2 class="mb-2 mb-md-4">
						<span class="yellow-border-heading pb-1">Poruka pape Franje</span>
					</h2>
				</div>

				<div class="col-12">
					<div class="row">
					
						<div class="col-md-12 col-lg-7 pr-lg-5 d-flex align-items-center"> 
							<img src="{{ asset('images/about/image-7.png') }}" class="img-fluid">
						</div>

						<div class="col-md-12 col-lg-5 mt-lg-0 mt-5 d-flex align-items-center justify-content-start">
							<p>
								Pri kraju programa iz Asiza uključio se papa Franjo sa svojom porukom mladim ekonomistima u kojoj predlaže "pakt" za novi ekonomski model jer "Ne možemo naprijed ovako. Znate da je nužna drugačija ekonomska priča, da neodgodivo treba priznati činjenicu da je trenutni svjetski sustav neodrživ. Pozvani ste da konkretno utječete u vašim gradovima i na vašim sveučilištima, na poslu i u sindikatima, u poduzećima i pokretima, u javnim i privatnim uredima", dodao je, "dragi mladi ekonomisti, poduzetnici, radnici i menadžeri, vrijeme je da se odvažimo na rizik poticanja novih modela razvitka, napretka i održivosti u kojima su protagonisti ljudi, a osobito oni isključeni.'' 
							</p>
						</div>

					</div>
				</div>

				<div class="col-12">
					<p class="mt-4">Upozorio ih je: ''imate primarnu ulogu: posljedice naših postupaka i odluka utjecat će na vas osobno, stoga ne možete ostati izvan onih mjesta na kojima se generira vaša, ne kažem budućnost, nego sadašnjost ". Zato je ''bitno razvijati se i podržati upravljačke skupine sposobne za razvoj kulture, pokretanje procesa, promjenu načina života, modele proizvodnje i potrošnje, konsolidirane strukture moći koje danas upravljaju društvima. Bez toga nećete učiniti ništa. Dragi mladi, draga braćo i sestre, ne odričimo se velikih snova. Ne zadovoljavajmo se onim što smo dužni. Gospodin ne želi da suzimo obzore, ne želi da se parkiramo uz rub života, nego da jurimo put visokih ciljeva, radosno i smiono.''  Jer, kaže: ''nismo stvoreni da sanjamo odmore i vikende, nego da ostvarimo Božje sne na ovome svijetu''.
					Cijelu poruku pape Franje pročitajte na našem blogu: (link)</p>
				</div>

			</div>
			<!-- /.Row -->	

			<!-- Row -->
			<div class="row mt-3">

				<div class="col-12 w-100 text-center text-md-left my-4">
					<h2 class="my-2 mb-md-4">
						<span class="yellow-border-heading pb-1">Završna izjava i zajedničko opredjeljenje</span>
					</h2>
				</div>	

				<div class="col-12">
				<p>Svako selo postalo je kao obitelj – u besplatnosti, velikodušnom davanju raslo se šest mjeseci u mudrosti, ljubavi i znanju. Plod  
				ovakvog truda brojni su projekti i ideje koji su ostvareni u skupinama. Na samom događaju mladi su uputili svjetskim ekonomistima,  
				političarima i pojedincima 12 zahtjeva koje treba odmah implementirati u sustave da bi se mogla stvarati bolja ekonomija za bolji  
				svijet.</p>
				<p>Economy of  Francesco je odradio svoj početak. Uz svetog Oca preko 2 000 mladih uzvikuje ''idemo dalje'' te planira nove radne procese, a posebno se raduju planiranom susretu u Asizu na jesen 2021. Do tada i mi u HUB-u Hrvatska nastavljamo pratiti ovaj pokret te raditi na promicanju i razvijanju Franjine ekonomije. Papa nas je pozvao da EoF živimo kao ''poziv, kulturu i savez'' što iziskuje preobrazbu umova i srdaca. Upravo u prilikama za zajedničke susrete i radne skupine, komunikacije i razna izlaganja, razmjenu iskustva i ideja, davanju savjeta, podrške i molitve vidimo jasan put kako EoF može zaživjeti i u našem društvu.
				Cjelokupan članak pročitajte na našem blogu: (link)</p>
				</div>

			</div>
			<!-- /.Row -->	

			<!-- Row -->

			<!-- Slider main container -->
			<div class="swiper-container my-5">
			  <!-- Additional required wrapper -->
			  <div class="swiper-wrapper">
			    <!-- Slides -->
			    <div class="swiper-slide">
			    	<img src="{{ asset('images/about/villages-slider/selo-1.png')}}" class="img-fluid w-75 h-100">
			    </div>
			    <div class="swiper-slide">
			    	<img src="{{ asset('images/about/villages-slider/selo-2.png')}}" class="img-fluid w-75 h-100">
			    </div>
			    <div class="swiper-slide">
			    	<img src="{{ asset('images/about/villages-slider/selo-3.png')}}" class="img-fluid w-75 h-100">
			    </div>
			    <div class="swiper-slide">
			    	<img src="{{ asset('images/about/villages-slider/selo-4.png')}}" class="img-fluid w-75 h-100">
			    </div>
			    <div class="swiper-slide">
			    	<img src="{{ asset('images/about/villages-slider/selo-5.png')}}" class="img-fluid w-75 h-100">
			    </div>
			    <div class="swiper-slide">
			    	<img src="{{ asset('images/about/villages-slider/selo-6.png')}}" class="img-fluid w-75 h-100">
			    </div>
			    <div class="swiper-slide">
			    	<img src="{{ asset('images/about/villages-slider/selo-7.png')}}" class="img-fluid w-75 h-100">
			    </div>
			    <div class="swiper-slide">
			    	<img src="{{ asset('images/about/villages-slider/selo-8.png')}}" class="img-fluid w-75 h-100">
			    </div>
			    <div class="swiper-slide">
			    	<img src="{{ asset('images/about/villages-slider/selo-9.png')}}" class="img-fluid w-75 h-100">
			    </div>
			    <div class="swiper-slide">
			    	<img src="{{ asset('images/about/villages-slider/selo-10.png')}}" class="img-fluid w-75 h-100">
			    </div>
			    <div class="swiper-slide">
			    	<img src="{{ asset('images/about/villages-slider/selo-11.png')}}" class="img-fluid w-75 h-100">
			    </div>
			    <div class="swiper-slide">
			    	<img src="{{ asset('images/about/villages-slider/selo-12.png')}}" class="img-fluid w-75 h-100">
			    </div>
			  </div> 

			  <!-- If we need navigation buttons -->
			  <div class="swiper-button-prev"></div>
			  <div class="swiper-button-next"></div>
			</div>

			<!-- /.Row -->


		</div>
		<!-- /.Container -->

	</section>

	<section id="2">
		
		<!-- Container -->
		<div class="container mt-0 mt-md-5">
			
			<!-- Row -->
			<div class="row">
				
				<div class="col-12 w-100 text-center mb-5">
					<h1>
						<span class="yellow-border-heading pb-1">HUB Croatia danas je</span>
					</h1>
				</div>

				<div class="col-12">
					<p>U svom početku HUB je imao funkciju podrške na trodnevnom događaju Economy of Francesco u studenom 2020.g. 
					te kreiranje i realizaciju pratećeg nacionalnog programa u Križevcima u centru 'Faro'. Broj pratitelja, podupiratelja i 
					simpatizera počeo je rasti već na samom događaju. Danas nas je oko stotinu u Hrvatskoj i Bosni i Hercegovini s čijim 
					HUB-om surađujemo. Od tada odradili smo mnogo susreta zajedno kreirajući daljnji hod. Oformili smo radni tim, 
					proveli anketni upitnik između članova o njihovim područjima interesa, osmislili i počeli s ostvarivanjem prvih 
					aktivnosti kao što su kreiranje web platforme, formiranje strategije, osmišljavanje banke talenata i drugih projekata 
					poput financijske etičke pismenosti... Uz ove aktivnosti pojedinih timova osmislili smo i mjesečni program na kojem 
					mogu sudjelovati svi članovi, a to su webinari te susreti prvog i trećeg četvrtka u mjesecu koji se održavaju u već 
					uvriježenom vremenu u 19:30 sati.</p>
					<p>Ono što je važno istaknuti je naša povezanost s globalnim pokretom EoF-a. Neki od nas od početka sudjeluju u ovom 
					pokretu i aktivni su u selima koja su odabrali te u njima razvijaju ideje i projekte u duhu EOF-a da bi doprinijeli 
					ostvarenju konkretnetnih pothvata nužnih za ostvarenje nove, pravednije, čovječnije i inkluzivnije ekonomije. Cilj je 
					ideju o 12 'sela' prenijeti i u naš HUB, educirati se u tom smjeru, što već činimo sudjelovanjem u projektu EoF school, i u 
					konačnici stečene vrijednosti prenijeti kroz razne projekte u naše društvo, naše gradove, sela, naše zajednice i 
					obitelji...</p>
					<p>HUB Croatia umrežen je i s ostalim HUB-ovima kojih je ukupno 40 u cijelom svijetu. Sastajemo se i dijelimo informacije 
					i iskustva o razvoju EoF-a na regionalnim i lokalnim razinama. 
					EoF je proces što znači da se timovi, ideje, projekti mijenjaju i rastu tako da se radujemo svakom tko želi unijeti sebe i 
					novosti svoje jedinstvenosti u ovaj pokret.</p>
				</div>

			</div>
			<!-- /.Row -->

			<!-- Row -->
			<div class="row">
				
				<div class="col-12 w-100 text-center text-md-left mt-3 mb-4">
					<h2 class="mb-2 mb-md-4">
						<span class="yellow-border-heading pb-1">No kako je sve počelo?</span>
					</h2>
				</div>

				<div class="col-12">
					<p>Kada se u kolovozu 2020.g. odlučilo da glavni događaj Economy of Francesco bude održan online, organizatori su 
					osmislili HUB-ove ili čvorišta diljem svijeta gdje su mladi u svojim zemljama imali priliku pratiti ovaj program u 
					zajedništvu koje je temelj samog pokreta. Želja da EoF zaživi i u Hrvatskoj potaknula je dvije participantice EoF-a i 
					predsjednika udruge Ekonomije Zajedništva da organiziraju HUB u Hrvatskoj. U rujnu je osnovan akreditirani HUB u 
					Križevcima koji je do glavnog EoF događaja intenzivno radio na pripremi programa.</p>

					<p>Osim praćenja trodnevnog poslijepodnevnog programa iz Asiza, HUB u Križevcima paralelno je organizirao jutarnji 
					nacionalni program za sva tri dana. 
					Program prvog dana, 19. studenog, bio je posvećen duhovnosti tako da je započeo svetom misom koju je predslavio 
					p. Mijo Nikić. Slijedio je okrugli stol na temu ''Može li se ostvariti preobrazba sustava bez duhovnosti?''. Gosti panela bili 
					su: p.Mijo Nikić, Đina Perkov iz pokreta fokolara i Antun Matošević mag.oec. 
					Drugi dan programa bio je posvećen akademskoj zajednici i u skladu s tim organiziran je okrugli stol na temu ''Profit 
					koji brine'' na kojem su sudjelovali sljedeći gosti: doc.dr.sc.Marijana Kompes (HKS), izv.prof.dr.sc.Ivana Marić (EOFZG) , 
					doc.dr.sc.Jakša Krišto (EOFZG), dr.sc.Andreja Švigir (Altius) i prof.dr.sc Domagoj Sajter (EOFOS).  
					Treći dan programa HUB je pripremio i prenosio jedan sat programa uživo za cijeli svijet. U tom programu sudionici 
					su iznijeli svoja iskustva sudjelovanja u ovom pokretu zatim su bili prikazani video uradci u kojima je prikazan grad 
					Križevac kao zeleni grad, rad centra 'Faro' i dječjeg vrtića 'Zraka sunca', predstavljen pokret fokolara i 'Economy of 
					Francesco', prikazana očekivanja mladih iz 'Franjevačke mladeži' i na kraju poruka fra Marija Knezovića i prof. 
					Domagoja Sajetera. 
					</p>
					
					<p>
						<span><span class="yellow-heading">EOF Marathon Croatia</span> - <a href="https://www.youtube.com/watch?v=Ov9zXXYH7h4" class="text-dark text-decoration-none">https://www.youtube.com/watch?v=Ov9zXXYH7h4</a></span><br>
						<span><span class="yellow-heading">Fra Mario Knezović</span> - poruka mladima povodom Franjine ekonomije - <a href="https://www.youtube.com/watch?v=YCFLXp1E0Xc&t=379s" class="text-dark text-decoration-none">https://www.youtube.com/watch?v=YCFLXp1E0Xc&t=379s</a></span><br>
						<span><span class="yellow-heading">Prof. dr.sc. Domagoj Sajter</span> - poruka mladima povodom Franjine ekonomije - <a href="https://www.youtube.com/watch?v=jMGta145GxQ&t=7s" class="text-dark text-decoration-none">https://www.youtube.com/watch?v=jMGta145GxQ&t=7s</a></span>
					</p>	
				</div>

			</div>
			<!-- /.Row -->			

		</div>
		<!-- /.Container -->

	</section>

	<section id="3">

		<!-- Container -->
		<div class="container">
			
			<!-- Row -->
			<div class="row">
				
				<div class="col-12 w-100 text-center mb-5 mt-3 mt-md-5">
					
					<h1>
						<span class="yellow-border-heading pb-1">EoF budi i ti</span>
					</h1>

				</div>

				<div class="col-12 col-lg-6 d-flex align-items-center">
					
					<p class="pr-lg-5">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut </p>

				</div>
				<div class="col-12 col-lg-6 d-flex align-items-center">
					
					<img src="{{ asset('images/about/image-4.jpg') }}" class="img-fluid w-100 h-100">

				</div>

			</div>
			<!-- /.Row -->

			<!-- Form -->
			<form class="mt-5" action="{{ Route('about_store') }}" method="POST" id="create-form" enctype="multipart/u-data" autocomplete="off">
			  @csrf
				<div class="form-row">
			    <div class="form-group col-md-6 pr-md-3">
			      <label for="first_name" class="mb-1">Ime*</label>
			      <input type="text" class="form-control rounded-0" id="first_name" name="first_name" placeholder="Vaše ime">
			    </div>
			    <div class="form-group col-md-6 pl-md-3">
			      <label for="last_name" class="mb-1">Prezime*</label>
			      <input type="text" class="form-control rounded-0" name="last_name" id="last_name" placeholder="Vaše prezime">
			    </div>
			  </div>
			  <div class="form-row">
			  	<div class="form-group col-md-6 pr-md-3">
				    <label for="phone_number" class="mb-1">Broj telefona</label>
				    <input type="text" class="form-control rounded-0" id="phone_number" name="phone_number" placeholder="Vaš broj telefona">
				  </div>
				  <div class="form-group col-md-6 pl-md-3">
				    <label for="email" class="mb-1">Email adresa*</label>
				    <input type="email" class="form-control rounded-0" id="email" name="email" placeholder="Vaša email adresa">
				  </div>
			  </div> 
			  <div class="form-group mt-2">
			  	<label for="question">Vaše motivacije, zanimanja, aktivnosti i/ili poruka, upit nama..</label>
   				<textarea class="form-control rounded-0" id="question" name="question" rows="3" placeholder=""></textarea>
			  </div> 
			  <small>* Obavezna polja</small>
				<div class="form-group mt-2">
					<div class="form-group">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" required>
							<label class="form-check-label">
								Prihvatam <a href="">uvjete korištenja stranice</a> i <a href="">politiku zaštite privatnosti</a>
							</label> 
						</div>
					</div>
				</div>
			  <div class="text-center mt-3">
				  <button type="button" id="submit-button" form="create-form" class="btn py-2 px-5 text-white rounded-0 text-uppercase">Pošalji</button>
				</div>
			</form>				
			<!-- /.Form -->

		</div>
		<!-- /.Container -->
		
	</section>

</section>

@endsection ('content')

@section('scripts')

<!-- Smooth Scroll -->
<script src="{{ asset('js/scrollspy.js') }}" defer></script>

<!-- Swiper -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
  var swiper = new Swiper('.swiper-container', { 
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    slidesPerView: 1,
  });
</script> 

{{-- Post request --}}
<script src="{{ asset('back/post-request.js')}}"></script>

@endsection('scripts')