<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet">
	<link rel="stylesheet" href="{{ url('css/app.css')}}">

</head>

<body>
	@yield('header-banner') @include('partials.header') @yield('content')
	<script type='text/javascript' src="/js/jquery.min.js"></script>
	<script type='text/javascript' src="/js/bootstrap.min.js"></script>
	<script type='text/javascript' src="/js/carousel.js"></script>

</body>

@include('partials.footer')

</html>