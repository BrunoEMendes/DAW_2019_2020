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

    <div class="container pt-5" id="order_table">

    @foreach ($order as $o)
    <div>
        <div class="pb-3">Order id:{{$o->id}}</div>  <div style="float:left">date: <strong>{{$o->created_at}}</strong></div>  <div style="float:right">total: <strong class="text-success">{{$o->total}}€</strong></div>
    </div>
     <table class="table checkout mb-5" id="checkout-table">
        <thead>
        <tr>
            <th scope="col">image</th>
            <th scope="col">name</th>
            <th scope="col">quantity</th>
            <th scope="col">price</th>
        </tr>
        </thead>
        <tbody>
            @foreach($order_items as $oi)
            @if($oi->id == $o->id)
            @foreach ($product as $p)
            @if($oi->pid == $p->id)
                <tr>
                    <td class="img"><img src="{{$p->image}}"></img></td>
                    <td class="name">{{$p->name}}</td>
                    <td class="qtt">{{$oi->qt}}</td>
                    <td class="price">{{$p->price}}€</td>
                </tr>
            @endif
            @endforeach
            @endif
            @endforeach
        </tbody>
        </table>
    @endforeach

    </div>




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