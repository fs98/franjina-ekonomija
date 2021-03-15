@extends('layouts.page')

@section('content')

<section class="contact-section">
	
<!-- Container -->

<div class="container">
	
	<!-- Row -->

	<div class="row mx-0 mx-lg-5">
		
		<div class="col-12 col-xl-6 px-5 contact-info">
			
			<h2 class="my-5 text-white text-center">
				<span class="yellow-border-heading pb-1">Kontakt</span>
			</h2>

			<div class="d-flex align-items-center justify-content-start mt-3 mt-sm-5">
        <div>
          <img src="{{ asset('icons/Phone.svg') }}" class="contact-icon">
        </div>

        <div class="ml-4">
          <h5 class="text-white">Broj telefona</h5>
          <h6 class="mt-2 text-white">+387 95 123 456</h6>
        </div>
      </div>

      <div class="d-flex align-items-center mt-3">
        <div>
          <img src="{{ asset('icons/Email.svg') }}" class="contact-icon">
        </div>

        <div class="ml-4">
          <h5 class="text-white">Adresa</h5>
          <h6 class="mt-2"><a href="mailto:financial.education.eof@gmail.com" class="text-decoration-none text-white">financial.education.eof@gmail.com</a></h6>
        </div>
      </div>

      <div class="my-5">
      	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2944131.3864600165!2d15.4299034003914!3d43.89460926270403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x134ba215c737a9d7%3A0x6df7e20343b7e90c!2sBosnia%20and%20Herzegovina!5e0!3m2!1sen!2sba!4v1615803253917!5m2!1sen!2sba" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>

		</div>

		<div class="col-12 col-xl-6 bg-white px-0 pl-xl-5 pr-xl-0">
			
			<h4 class="my-4 pt-5 pt-xl-0 text-center">Imate neko pitanje, 
			<br>slobodno nas kontaktirajte! </h4>

			<form class="mt-5 pt-3">
			  <div class="form-group">
			    <label>Ime i prezime</label>
			    <input type="text" class="form-control rounded-0 border-0 py-4" placeholder="Jane Doe">
			  </div>
			  <div class="form-group">
			    <label>Email</label>
			    <input type="email" class="form-control rounded-0 border-0 py-4" placeholder="janedoe@gmail.com">
			  </div>
			  <div class="form-group">
			    <label>Broj telefona</label>
			    <input type="email" class="form-control rounded-0 border-0 py-4" placeholder="+38761234569">
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlTextarea1">Example textarea</label>
			    <textarea class="form-control border-0 py-4 rounded-0" id="exampleFormControlTextarea1" rows="3" placeholder="Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. at vero eos et."></textarea>
			  </div>
			  <div class="text-center">
			  	<button type="submit" class="btn rounded-0 text-white px-5 py-2 text-uppercase mt-4">Pošalji</button>
			  </div>
			</form>

		</div>

	</div>

	<!-- /.Row -->

</div>

<!-- /.Container -->

<script type="text/javascript">
	document.getElementById('contact').classList.add("active")
</script>
</section>

@endsection
