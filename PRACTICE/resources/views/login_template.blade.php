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
			    		<a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
						<nav id="nav-menu-container">
							<ul class="nav-menu">
							  <li><a href="{{ url ('')}}">Home</a></li>
							  <li><a href="{{ url('')}}">Menu</a></li>
							  <li><a href="{{ url('login') }}">Login</a></li>
							</ul>
						</nav><!-- #nav-menu-container -->
			    	</div>
			    </div>
			  </header><!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Login
							</h1>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start contact-page Area -->
			<section class="contact-page-area section-gap">
				<div class="container">
					<div class="row">

						<div class="col-lg-12">
							<form class="form-area " method="post" id="myForm"  class="contact-form text-right" action="{{ action ('Bakery@login_action') }}">
								{{csrf_field()}}
								<div class="row">
									<div class="col-lg-6 form-group">

										<input name="email" placeholder="Enter email address" value = " @if(!$errors->has('email')) {{ old('email') }} @endif " pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">
										@if ($errors->has('email'))
											{{ $errors->first('email') }}
										@endif

										<input name="password" placeholder="Enter password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter password'" class="common-input mb-20 form-control" required="" type="password">
										@if ($errors->has('password'))
										{{ $errors->first('password') }}
										@endif


									</div>
									<div class="col-lg-12">
										<div class="alert-msg" style="text-align: left;"></div>
										<button  class="genric-btn primary" style="float: left;">Login</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
			<!-- End contact-page Area -->

			<!-- start footer Area -->
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>About Us</h6>
								<p>
									We are the best bakery in town!
								</p>
							</div>
						</div>
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay update with our latest</p>
								<div class="" id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
										<input class="form-control" name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" required="" type="email">
			                            	<button class="click-btn"><i class="lnr lnr-arrow-right" aria-hidden="true"></i></button>
			                            	<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>
										<div class="info"></div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-dribbble"></i></a>
									<a href="#"><i class="fa fa-behance"></i></a>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<p class="footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
						</div>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->

			<script src="{{asset ('resources/assets/js/vendor/jquery-2.2.4.min.js')}}"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="{{asset ('resources/assets/js/vendor/bootstrap.min.js')}}"></script>
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="{{asset ('resources/assets/js/easing.min.js')}}"></script>
			<script src="{{asset ('resources/assets/js/hoverIntent.js')}}"></script>
			<script src="{{asset ('resources/assets/js/superfish.min.js')}}"></script>
			<script src="{{asset ('resources/assets/js/jquery.ajaxchimp.min.js')}}"></script>
			<script src="{{asset ('resources/assets/js/jquery.magnific-popup.min.js')}}"></script>
 			<script src="{{asset ('resources/assets/js/jquery-ui.js')}}"></script>
			<script src="{{asset ('resources/assets/js/owl.carousel.min.js')}}"></script>
			<script src="{{asset ('resources/assets/js/jquery.nice-select.min.js')}}"></script>
			<script src="{{asset ('resources/assets/js/mail-script.js')}}"></script>
			<script src="{{asset ('resources/assets/js/main.js')}}"></script>
		</body>
	</html>