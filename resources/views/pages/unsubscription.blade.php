@extends ('layouts.page')

@section ('title')
	Pravila privatnosti
@endsection ('title')

@section ('content')  

<section class="my-5">
	
	<!-- Container -->
	<div class="container">
		
		<!-- Row -->
		<div class="row">
			          
      <div class="col-12 text-center">
        <h2 class="mt-5">Upišite svoju e-mail adresu kako bismo Vam poslali link preko kojeg možete otkazati pretplatu.</h2>
        <form class="mt-5" action="{{ Route('newsletter.unsubscribelink') }}" method="POST" id="unsubscribe-form" autocomplete="off">
          @csrf
          <div class="form-group row mb-2"> 
            <div class="col-12 col-md-8 offset-md-2 col-xl-6 offset-xl-3">
              <input type="text" class="form-control rounded-15" id="unsubscriber_email" name="unsubscriber_email" placeholder="janedoe@gmail.com">
              <button type="button" class="btn rounded-15 text-white get-unsubscribe-mail-btn mt-3 px-4" type="button" id="submit-unsubscription" form="unsubscribe-form">Pošalji mi link</button>
            </div>
          </div> 
        </form>
      </div>

		</div>
		<!-- /.Row -->

	</div>
	<!-- /.Container -->

</section>

@endsection ('content')
