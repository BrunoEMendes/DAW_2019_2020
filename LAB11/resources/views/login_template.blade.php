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
				</div>
			</div>
		</div>
    </header>

    <img class="d-block img-fluid" src="{{asset('resources/assets/img/walp_2.png')}}" alt="First slide" style="z-index:-10; opacity:0.4;position:absolute; display:flex !important; align-items:center;">
    <div class="form-body container mt-5 pt-5 pb-5" style="padding-top:100px">
      <div class="register-body text-center mb-3" id="register">
          <h2 class="pb-3">Login</h2>
      </div>
      @if (Session::has('login_fail'))
      <div class="register-body text-center mb-3" id="register">
          <h3 class="pb-3 alert alert-danger">  {{ Session::get('login_fail') }}</h3>
        </div>
     @endif
    <div class="form-group col-10 container">
    <form method="post" action="{{ action ('eStore@login_action') }}">
            {{csrf_field()}}
            <label>
                Email Adress
            </label>
            <input type="email" class="form-control" name="email" id="emailField" placeholder="email">
            <p class="text-danger"><small>

            @if ($errors->has('email'))
                {{ $errors->first('email') }}
              @endif
            </small></p>
            <label>
                Password
            </label>
            <input type="password" class="form-control" name="password" id="passwordField" placeholder="password">
            <p class="text-danger"><small>
            @if ($errors->has('password'))
                {{ $errors->first('password') }}
            @endif
            </small></p>
            <button type="submit" class="btn btn-primary" id="btnsignup" name="reg_user">Login</button>
            <input class ="pt-5" type="checkbox"name="autologin" value="1"> Remember me
            <a href="{{ url('/register') }}">need an account?</a>
          </form>
        </div>
    </div>
    </img>
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