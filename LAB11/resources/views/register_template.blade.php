
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

    <div class="form-body container mt-5 pt-5 pb-5">

      <div class="register-body text-center mb-3" id="register">
          <h2>Register</h2>
      </div>

    <div class="form-group col-10 container">
        <form method="post" action="{{ action ('eStore@register_action') }}">
        {{csrf_field()}}
            <label>
                  Username
              </label>
              <input type="text" class="form-control" name="username" value="{{ old('username') }}" id="userfield" placeholder="username">
              <p><small class="text-danger">

              @if ($errors->has('username'))
                {{ $errors->first('username') }}
              @endif
              </small></p>
              <label>
                  Email Address
              </label>
              <input type="email" class="form-control" name="email" value=" @if(!$errors->has('email')) {{ old('email') }} @endif " id="emailField" placeholder="email"/>
              <p><small class="text-danger">
              @if ($errors->has('email'))
                {{ $errors->first('email') }}
              @endif
              </small></p>
              <label>
                  Password
              </label>
              <input type="password" class="form-control" name="password_1" id="passwordField" placeholder="password"/>
                <p><small class="text-danger">
                @if ($errors->has('password_1'))
                {{ $errors->first('password_1') }}
                 @endif
                </small></p>
              <label>
                  Password Confirmation
              </label>
             <input type="password" class="form-control" name="password_2" id="passwordConfirmationField" placeholder="password confirmation">
              <p><small class="text-danger">
              @if ($errors->has('password_2'))
                {{ $errors->first('password_2') }}
              @endif
              </small></p>
            <button type="submit" class="btn btn-primary" id="btnsignup" name="reg_user">Sign Up</button>
             <a href="{{ url('/login') }} ">already have an account?</a>
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