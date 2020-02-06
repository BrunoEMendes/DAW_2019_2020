<!DOCTYPE html>
<head>
<meta http-equiv="refresh" content="3; url={{ url('/') }}" />
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
    <img class="d-block img-fluid" src="{{asset('resources/assets/img/walp_5.png')}}" alt="First slide" style="z-index:-10; opacity:0.4;position:absolute; display:flex !important; align-items:center;">
        <table class="text-center" style="height:inherit;width:100%">
        <tbody>
            <tr>
                <td class="align-middle"> <h1> {{ Session::get('message') }} </h1> </td>
        </tr>
        </tbody>
    </table>
    </img>
</body>
</html>