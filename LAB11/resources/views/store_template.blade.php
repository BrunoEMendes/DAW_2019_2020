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
					<li><a class=".active" href="{{ url('/store/1') }}">Fresh</a></li>
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

    <section class="product-filter-section">
		<div class="container pt-5">
			<div class="section-title">
				<h2>
				@if(isset($id))
					@if($id == 1)
						FRESHEST ONES
					@elseif($id == 2)
						EXTRA RARE ULTRA PREMIUM PEPES
					@elseif($id == 3)
						ARRIBAAA SPICY ARRIBAAAA
					@else
						JUST LIKE UR GRANDMAH, OLD
					@endif
				@else
					BROWSE ALL THE SAD BOIOS
				@endif
			</h2>
			</div>
			<div class="row">
				@foreach ($product as $p)
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div  class="pi-pic">
                            <div id="temporary_message"> added to the cart</div>

                            @if(isset($id))
                                <img src="{{ url('/') }}/{{ $p->image}}" alt="">
                            @else
                                <img src="{{ $p->image}}" alt="">
                            @endif
							<div class="pi-links">
								<a class="add-card"><i class="fas fa-shopping-cart"></i><span>ADD TO CART</span></a>
								<a class="wishlist-btn"><i class="fas fa-heart"></i></a>
								<a href="{{ url('/detail') }}/{{ $p->id }}"><i class="fas fa-expand"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>{{ $p->price }}€</h6>
							<div id="name">{{ $p->name}}</div>
						</div>
					</div>
				</div>
				@endforeach
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