	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="{{ asset ('resources/assets/img/fav.png') }}">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Bakery</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<!-- <link rel="stylesheet" href="{{ asset ('resources/assets/css/main.css') }}" type = "text/css"> -->
		<!-- <link rel="stylesheet" href="{{ asset ('resources/assets/css/bootstrap/boostrap.css') }}" type = "text/css"> -->

			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="{{ asset ('resources/assets/css/linearicons.css') }}">
			<link rel="stylesheet" href="{{ asset ('resources/assets/css/font-awesome.min.css') }}">
			<link rel="stylesheet" href="{{ asset ('resources/assets/css/bootstrap.css') }}">
			<link rel="stylesheet" href="{{ asset ('resources/assets/css/magnific-popup.css') }}">
			<link rel="stylesheet" href="{{ asset ('resources/assets/css/nice-select.css')}}">
			<link rel="stylesheet" href="{{ asset ('resources/assets/css/animate.min.css') }}">
			<link rel="stylesheet" href="{{ asset ('resources/assets/css/jquery-ui.css') }}">
			<link rel="stylesheet" href="{{ asset ('resources/assets/css/owl.carousel.css') }}">
			<link rel="stylesheet" href="{{ asset ('resources/assets/css/main.css') }}">
		</head>
		<body>
			  <header id="header" id="home">
		  		<div class="header-top">
		  			<div class="container">
				  		<div class="row align-items-center">
				  			<div class="col-lg-6 col-sm-6 col-4 header-top-left no-padding">
					      	<div class="menu-social-icons">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-dribbble"></i></a>
								<a href="#"><i class="fa fa-behance"></i></a>
							</div>
				  			</div>
				  			<div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">
								<a class="btns" href="tel:+953 012 3654 896">+953 012 3654 896</a>
				  				<a class="btns" href="mailto:support@colorlib.com">support@colorlib.com</a>
				  				<a class="icons" href="tel:+953 012 3654 896">
				  					<span class="lnr lnr-phone-handset"></span>
				  				</a>
				  				<a class="icons" href="mailto:support@colorlib.com">
				  					<span class="lnr lnr-envelope"></span>
				  				</a>
				  			</div>
				  		</div>
		  			</div>
				</div>
			    <div class="container main-menu">
			    	<div class="row align-items-center justify-content-between d-flex">
			    		<a href="{{ url('') }}"><img src="{{ asset ('resources/assets/img/logo.png') }}" alt="" title="" /></a>
						<nav id="nav-menu-container">
							<ul class="nav-menu">

							  <li><a href="{{ url ('') }}">Menu</a></li>
							  @if (Session::has('id'))

							  <li><a href="{{ url ('') }}">Welcome {{ Session::get('name') }}</a></li>
							 @else
							  <li><a href="{{ url ('register') }}">Register</a></li>
							 @endif
							  @if (Session::has('id'))
							  <li><a href="{{ url ('logout') }}">Logout</a></li>
								@else
							  <li><a href="{{ url ('login') }}">Login</a></li>
								@endif
							</ul>
							</ul>
						</nav><!-- #nav-menu-container -->
			    	</div>
			    </div>
			  </header><!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row fullscreen d-flex justify-content-center align-items-center">
						<div class="banner-content col-lg-10 col-md-12 justify-content-center">
							<h6 class="text-uppercase">Whenever we bake, bake with our heart</h6>
							<h1>
								Love with baking items
							</h1>
							<p class="text-white mx-auto">
								Since Americans in the South began roasting pigs publicly, Barbecues have been a staple of North American living. For many, grilling becomes a routine mealtime activity.
							</p>
							<a href="menu.html" class="primary-btn squire text-uppercase mt-10">Check Our Menu</a>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->
			<section class="menu-list-area section-gap">
				<div class="container">
					<div class="row">
						<div class="menu-cat mx-auto">
							<ul class="nav nav-pills" id="pills-tab" role="tablist">
							  @foreach ($categories as $c)
							  <li class="nav-item">
							    <a class="nav-link active" id="pizza-tab" data-toggle="pill" href="{{ url('menu')}}/{{$c->id}}" role="tab" aria-controls="pizza" aria-selected="true">{{ $c->name }}</a>
							  </li>
							  @endforeach
							</ul>
						</div>

					</div>
					<div id="pills-tabContent" class="tab-content absolute">
						@foreach ($products as $p)
						<div class="tab-pane fade show active" id="pizza" role="tabpanel" aria-labelledby="pizza-tab">
							<div class="single-menu-list row justify-content-between align-items-center">
								<div class="col-lg-9">
									<a href="#"><h4>{{$p->name}}</h4></a>
									<p>
										{{ $p->description}}
									</p>
								</div>
								<div class="col-lg-3 flex-row d-flex price-size">
									<div class="s-price col">

										<span>${{ $p->price }}</span>
									</div>

								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</section>
		    <!-- End menu-list Area -->


			<script src="{{ asset ('resources/assets/js/vendor/jquery-2.2.4.min.js') }}"></script>

			<script src="{{ asset ('resources/assets/js/vendor/bootstrap.min.js') }}"></script>

			<script src="{{ asset ('resources/assets/js/main.js')}}"></script>
		</body>
	</html>