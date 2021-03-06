<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
        <meta http-equiv="refresh" content="3; url={{ url('/') }}" />

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
</body>
<h1> {{ Session::get('message') }} </h1>
</body>
</html>