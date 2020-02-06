<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>PEPE SHOP</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="{{asset('resources/assets/img/product/ezpepe.ico')}}" rel="shortcut icon"/>
	<link href="{{asset('resources/assets/fontawesome/css/all.css')}}" rel="stylesheet">
	<link href="{{asset('resources/assets/css/custom_css.css')}}" rel="stylesheet">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ asset('resources/assets/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('resources/assets/css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('resources/assets/css/flaticon.css')}}"/>
	<link rel="stylesheet" href="{{asset('resources/assets/css/slicknav.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('resources/assets/css/jquery-ui.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('resources/assets/css/owl.carousel.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('resources/assets/css/animate.css')}}"/>
	<link rel="stylesheet" href="{{asset('resources/assets/css/style.css')}}"/>


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>


	<!-- Header section -->
	<header class="header-section  navbar-fixed-top" id="headnev">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 text-center text-lg-left">
						<!-- logo -->
						<a class="pointer" href="{{ url('/') }}" id="site-logo">
							PEPE SHOP
						</a>
					</div>
					<div class="col-xl-6 col-lg-5">

					</div>
					<div class="col-xl-4 col-lg-5 pt-2">
						<div class="user-panel">

							<div class="up-item" id="user">
								@if (!Session::has('id'))
									<a href="{{ url('/login') }}">Sign In</a>  or <a href="{{ url('/register')}}">Create Account</a>
								@else
									<a style="font-weight:bold;"> Welcome {{ Session::get('name') }}</a>
								@endif

							</div>
							<div class="up-item pr-5">
								<a href="{{ url('/checkout') }}" class="shopping-card" id="shopping-cart">
									<i class="fas fa-shopping-cart"></i>
									<span></span>
								</a>
							</div>
							@if (Session::has('id'))
								<a class="pr-2 up-item" href="{{ url('/orders') }}"> my orders</a>
								<a href="{{ url('/logout') }}">Logout</a>
							@endif

						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="main-navbar">
			<div class="container">
				<!-- menu -->
				<ul class="main-menu">
					<li><a href="{{ url('/store') }}">All</a></li>
					<li><a href="{{ url('/store/1') }}">Fresh</a></li>
					<li><a href="{{ url('/store/3') }}">Spicy</a></li>
					<li><a href="{{ url('/store/2') }}">Premium
					<span class="new">New</span>
					</a></li>
					<li><a href="{{ url('/store/4') }}">Old School
					</a></li>
					<!-- <li><a href="#">Shoes</a>
						<ul class="sub-menu">
							<li><a href="#">Sneakers</a></li>
							<li><a href="#">Sandals</a></li>
							<li><a href="#">Formal Shoes</a></li>
							<li><a href="#">Boots</a></li>
							<li><a href="#">Flip Flops</a></li>
						</ul>
					</li> -->
					<!-- <li><a href="#">Pages</a>
						<ul class="sub-menu">
							<li><a href="./product.html">Product Page</a></li>
							<li><a href="./category.html">Category Page</a></li>
							<li><a href="./cart.html">Cart Page</a></li>
							<li><a href="./checkout.html">Checkout Page</a></li>
							<li><a href="./contact.html">Contact Page</a></li>
						</ul>
					</li> -->
					<li><a href="http://all.deei.fct.ualg.pt/~a62181/LAB9_10/">Blog</a></li>
				</ul>
			</div>
		</nav>
	</header>
	<!-- Header section end -->



	<!-- Hero section -->
	<section class="" >
    <div id="carouselExampleIndicators" class="carousel slide span12" data-ride="carousel">
	<div class="row" style="margin-right:0px !important; margin-left: 0px !important; max-width: 100%">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active" ></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
        </div>
        <div class="row" style="margin-right:0px !important; margin-left: 0px !important; max-width: 100%">
            <div class="carousel-inner" role="listbox" >
                <div class="carousel-item active">
               		<img class="d-block img-fluid" src="{{asset('resources/assets/img/walp_1.png')}}" alt="First slide" style="z-index:-10">
                </div>
              <div class="carousel-item">
                    <img class="d-block img-fluid" src="{{asset('resources/assets/img/walp_2.png')}}" alt="Second slide">
                </div>
            </div>
        </div>
    </div>
	</section>
	<!-- Hero section end -->



	<!-- Features section -->
	<section class="features-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
						<i class="fas fa-credit-card"></i>
						</div>
						<h2>Fast Secure Payments</h2>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
						<i class="far fa-star"></i>
						</div>
						<h2>Premium Products</h2>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<i class="far fa-paper-plane"></i>
						</div>
						<h2>Free & fast Delivery</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Features section end -->


	<!-- latest product section -->
	<section class="top-letest-product-section">
		<div class="container">
			<div class="section-title">
				<h2>LATEST PRODUCTS</h2>
			</div>
			<div class="product-slider owl-carousel">
				@foreach ($product as $p)
				@if ($p->cat_id == 3)
				<div class="product-item">
					<div class="pi-pic">
						<div class="tag-new">NEW</div>
						<div id="temporary_message"> added to the cart</div>
						<img src="{{ $p->image }}" alt="">
						<div class="pi-links">
							<a  class="add-card"><i class="fas fa-shopping-cart"></i><span>ADD TO CART</span></a>
							<a class="wishlist-btn"><i class="fas fa-heart"></i></a>
							<a href="{{ url('/detail') }}/{{ $p->id }}"><i class="fas fa-expand"></i></a>
						</div>
					</div>
					<div class="pi-text">
						<h6>{{ $p->price }}€</h6>
						<div>{{ $p->name }}</div>
					</div>
				</div>
				@endif
				@endforeach
			</div>
		</div>
	</section>
	<!-- letest product section end -->



	<!-- Product filter section -->
	<section class="product-filter-section">
		<div class="container">
			<div class="section-title">
				<h2>BROWSE TOP SELLING PRODUCTS</h2>
			</div>
			<ul class="product-filter-menu">
				<li><a href="{{ url('/store/1') }}">Fresh</a></li>
				<li><a href="{{ url('/store/3') }}">Spicy</a></li>
				<li><a href="{{ url('/store/2') }}">Premium</a></li>
				<li><a href="{{ url('/store/4') }}">Old School</a></li>
			</ul>
			<div class="row">
				@foreach ($product as $p)
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<div id="temporary_message"> added to the cart</div>
							<img src="{{ $p->image}}" alt="">
							<div class="pi-links">
								<a class="add-card"><i class="fas fa-shopping-cart"></i><span>ADD TO CART</span></a>
								<a class="wishlist-btn"><i class="fas fa-heart"></i></a>
								<a href="{{ url('/detail') }}/{{ $p->id }}"><i class="fas fa-expand"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>{{ $p->price }}€</h6>
							<div id="name">{{ $p->name }}</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>
	<!-- Product filter section end -->


	<!-- Footer section -->
	<section class="footer-section">
		<div class="container">
			<div class="footer-logo text-center">
				<a href="index.html"><img src="./img/logo-light.png" alt=""></a>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>About</h2>
						<p>Donec vitae purus nunc. Morbi faucibus erat sit amet congue mattis. Nullam frin-gilla faucibus urna, id dapibus erat iaculis ut. Integer ac sem.</p>
						<img src="img/cards.png" alt="">
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>Questions</h2>
						<ul>
							<li><a href="">About Us</a></li>
							<li><a href="">Track Orders</a></li>
							<li><a href="">Returns</a></li>
							<li><a href="">Jobs</a></li>
							<li><a href="">Shipping</a></li>
							<li><a href="">Blog</a></li>
						</ul>
						<ul>
							<li><a href="">Partners</a></li>
							<li><a href="">Bloggers</a></li>
							<li><a href="">Support</a></li>
							<li><a href="">Terms of Use</a></li>
							<li><a href="">Press</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>Questions</h2>
						<div class="fw-latest-post-widget">
							<div class="lp-item">
								<div class="lp-thumb set-bg" data-setbg="img/blog-thumbs/1.jpg"></div>
								<div class="lp-content">
									<h6>what shoes to wear</h6>
									<span>Oct 21, 2018</span>
									<a href="#" class="readmore">Read More</a>
								</div>
							</div>
							<div class="lp-item">
								<div class="lp-thumb set-bg" data-setbg="img/blog-thumbs/2.jpg"></div>
								<div class="lp-content">
									<h6>trends this year</h6>
									<span>Oct 21, 2018</span>
									<a href="#" class="readmore">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget contact-widget">
						<h2>Questions</h2>
						<div class="con-info">
							<span>C.</span>
							<p>Your Company Ltd </p>
						</div>
						<div class="con-info">
							<span>B.</span>
							<p>1481 Creekside Lane  Avila Beach, CA 93424, P.O. BOX 68 </p>
						</div>
						<div class="con-info">
							<span>T.</span>
							<p>+53 345 7953 32453</p>
						</div>
						<div class="con-info">
							<span>E.</span>
							<p>office@youremail.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="social-links-warp">
			<div class="container">
				<div class="social-links">
					<a href="" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
					<a href="" class="google-plus"><i class="fa fa-google-plus"></i><span>g+plus</span></a>
					<a href="" class="pinterest"><i class="fa fa-pinterest"></i><span>pinterest</span></a>
					<a href="" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
					<a href="" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
					<a href="" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>
					<a href="" class="tumblr"><i class="fa fa-tumblr-square"></i><span>tumblr</span></a>
				</div>

<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<p class="text-white text-center mt-5">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

			</div>
		</div>
	</section>
	<!-- Footer section end -->



	<!--====== Javascripts & Jquery ======-->
	<script src="{{asset('resources/assets/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('resources/assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('resources/assets/js/jquery.slicknav.min.js')}}"></script>
	<script src="{{asset('resources/assets/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('resources/assets/js/jquery.nicescroll.min.js')}}"></script>
	<script src="{{asset('resources/assets/js/jquery.zoom.min.js')}}"></script>
	<script src="{{asset('resources/assets/js/jquery-ui.min.js')}}"></script>
	<script src="{{asset('resources/assets/js/main.js')}}"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
	<script src="{{asset('resources/assets/js/my_js.js')}}"></script>

	</body>
</html>
