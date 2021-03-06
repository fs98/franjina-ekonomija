@extends('layouts.page')

@section ('title')
	Kontakt
@endsection ('title')

@section('links') 

@endsection

@section('content')

<section class="contact-section">
	
<!-- Container -->

<div class="container">

	<!-- Row -->

	<div class="row"  data-aos="zoom-in" data-aos-duration="1000">
 
		<div class="col-md-8 offset-md-2 col-10 offset-1 mb-5 mt-5 mt-md-0 text-center">
				
				<p>
					Svatko se od nas barem jednom u životu našao u situaciji gdje je htio nešto pitati, ali nije imao ni znao koga. Međutim, nekada i znamo koga bi pitali, ali nam je neugodno, nesigurni smo ili se bojimo. S druge strane, možda imaš super ideju, ali ne znaš kako je započeti, ne želiš raditi sam/a, nedostaju ti resursi za provedbu... 
						<br><br>
					Zato smo mi tu, rado ćemo ti pokušati pomoći. <strong>Kontaktiraj nas!</strong>
				</p>

		</div>

	</div>

	<!-- /.Row -->
	
	<!-- Row -->

	<div class="row mx-0 mx-lg-5"  data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="1000">
		
		<div class="col-12 col-xl-6 px-2 px-lg-5 contact-info rounded-15">
			
			<h2 class="my-5 text-white text-center">
				<span class="yellow-border-heading pb-1">Kontakt</span>
			</h2>

			<div class="d-flex align-items-center justify-content-start mt-3 mt-sm-5">
        <div>
          <img src="{{ asset('icons/common/phone.svg') }}" alt="phone-icon" class="contact-icon">
        </div>

        <div class="ml-4">
          <h5 class="text-white">Broj telefona</h5>
          <h6 class="mt-2 text-white"><a href="tel:+38795123456" class="text-decoration-none text-white">+385 48 682 847</a></h6>
        </div>
      </div>

      <div class="d-flex align-items-center mt-3">
        <div>
          <img src="{{ asset('icons/common/email.svg') }}" alt="email-icon" class="contact-icon">
        </div>

        <div class="ml-4">
          <h5 class="text-white">Email</h5>
          <h6 class="mt-2"><a href="mailto:hub@franjinaekonomija.hr" class="text-decoration-none text-white">hub@franjinaekonomija.hr</a></h6>
        </div>
      </div>

      <div class="my-5"> 
      	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2770.074185873584!2d16.542290615825472!3d46.02966837911176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47661658ac32c181%3A0x284666b99e25dd46!2sUEZ%20-%20udruga%20za%20ekonomiju%20zajedni%C5%A1tva!5e0!3m2!1sen!2sba!4v1616488642259!5m2!1sen!2sba" width="100%" height="300" class="rounded-15" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>

		</div>

		<div class="col-12 col-xl-6 bg-white px-0 pl-xl-5 pr-xl-0">

			<form class="mt-2 pt-3" action="{{ Route('question_store') }}" method="POST" id="create-form" autocomplete="off">
				@csrf
			  <div class="form-group">
			    <label>Ime i prezime*</label>
			    <input type="text" name="full_name" id="full_name" class="form-control rounded-15 border-0 py-4" placeholder="Jane Doe" maxlength="128">
			  </div>
			  <div class="form-group mt-4">
			    <label>Email*</label>
			    <input type="email" name="email" id="email" class="form-control rounded-15 border-0 py-4" placeholder="janedoe@gmail.com" maxlength="128">
			  </div>
			  <div class="form-group mt-4">
			    <label>Broj telefona</label>
			    <input type="text" id="phone_number" name="phone_number" class="form-control rounded-15 border-0 py-4" placeholder="+xxx xxx xxx xx" maxlength="128">
			  </div>
			  <div class="form-group mt-4">
			    <label for="question">Vaše pitanje, prijedlog ili ideja*</label> 
			    <textarea class="form-control border-0 py-4 rounded-15" rows="3" id="question" name="question" placeholder="Vaše pitanje, prijedlog ili ideja" maxlength="4096"></textarea>
					<small>* obavezna polja</small>
			  </div>
				<div class="form-group">
					<div class="form-group">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" required>
							<label class="form-check-label">
								Prihvaćam <a href="{{ Route('gdpr') }}">uvjete korištenja stranice</a> i <a href="{{ Route('gdpr') }}">politiku zaštite privatnosti</a>
							</label> 
						</div>
					</div>
				</div>
        <div class="form-group"> 
            {!! NoCaptcha::renderJs() !!}
            {!! NoCaptcha::display() !!}
            @error('g-recaptcha-response')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>
				<input type="hidden" id="route" name="route" value="contact">
			  <div class="text-center">
			  	<button type="button" id="submit-button" form="create-form" class="btn rounded-15 text-white px-5 py-2 text-uppercase mt-4">Pošalji</button>
			  </div>
			</form>

		</div>

	</div>

	<!-- /.Row -->

</div>

<!-- /.Container -->

</section>

@endsection

@section('scripts')

@endsection
