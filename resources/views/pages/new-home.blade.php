@extends('layouts.page')

@section ('title')
	Franjina ekonomija
@endsection ('title')

@section('links')

<meta name="csrf-token" content="{{ csrf_token() }}" /> 

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<!-- Swiper -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<!-- Calendar -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/calendar/main.min.css') }}">

<style>
    	/* Carousel */

	/* Center caption */
	

    .carousel{
        height: calc(100vh - 177px);
    }
	.custom-carousel .carousel-item{
		-webkit-transform-style: preserve-3d;
		-moz-transform-style: preserve-3d;
		transform-style: preserve-3d;
	}

	.custom-carousel .carousel-caption{
		top: 50%; 
		transform: translateY(-50%); 
		bottom: initial;
	}

		/* Black overlay over carousel image */

		.custom-carousel .carousel-item{
			position: relative;
		}

		.custom-carousel .carousel-item img{
			-webkit-animation: zoomin 20s ease-in;
			animation: zoomin 20s ease-in; 
			overflow: hidden;
				}

		.custom-carousel .black-overlay{
			position: absolute; 
			top: 0; 
			left: 0; 
			height: 100%; 
			width: 100%; 
			background-color: rgba(0,0,0,0.44);
		}

		/* Carousel Size For Medium devices (tablets, less than 992px) */
		@media (max-width: 991.98px) { 
			.custom-carousel{
				height: 500px;
			}
			.custom-carousel img{
				object-position: center;
				object-fit: cover;
				object-position: center;
			}
		}	

		/* Zoom in Keyframes */
		@-webkit-keyframes zoomin {
			0% {transform: scale(1);} 
			50% {transform: scale(1.2);}
			100% {transform: scale(1);}
		}
		@keyframes zoomin {
			0% {transform: scale(1);}
			50% {transform: scale(1.2);}
			100% {transform: scale(1);} 
		} /*End of Zoom in Keyframes */
 
</style>

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

@endsection('links')

@section('content')

<section id="home">

	<section id="sliderSection">

		<!-- Carousel Container -->

        <div id="carouselExampleCaptions" class="carousel slide custom-carousel carousel-fade" data-ride="carousel">
            <div class="carousel-inner h-100 w-100">
              <div class="carousel-item h-100 w-100 active">
                <img src="{{ asset('images/home/background.jpeg') }}" class="d-block w-100 h-100" alt="..." style="object-fit: cover">
                <div class="black-overlay"></div>
                <div class="carousel-caption d-flex flex-column align-items-end">
                  <div class="w-auto">
										<h3 class="font-weight-normal bg-white text-dark p-3" data-aos="fade-left" data-aos-duration="3000">Mladi ekonomisti, poduzetnici i changemakeri</h3>
										<h4 class="font-weight-light text-uppercase ml-5 bg-dark text-white p-3 mt-n3"  data-aos="fade-right" data-aos-duration="3000" style="width: 300px">okupljeni u svrhu</h4>
										<h4 class="font-weight-bold ml-auto p-3 mt-n2" data-aos="fade-left"  data-aos-duration="3000" data-aos-delay="" style="background-color: #ffde59; color: #414141; width: 300px; margin-right: 200px">davanja doprinosa</h4>
										<h4 class="font-weight-light bg-light text-dark ml-5 p-3 mt-n3" data-aos="fade-right" data-aos-duration="3000" data-aos-delay="6000" style="width: 550px">razvoju nove GLOBALNE i LOKALNE EKONOMIJE</h4>
									</div>
                </div>
              </div> 
            </div>
          </div>

          <!-- /.Carousel Container -->

	</section>		


@endsection

@section('scripts')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
	AO S.init();
</script>
@endsection('scripts')
