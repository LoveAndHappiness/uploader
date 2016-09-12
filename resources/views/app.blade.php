<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Styles -->
		<link href="/css/app.css" rel="stylesheet">

		<!-- Fonts -->
		<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	</head>

	<body>
		<div class="container-fluid">

			@include('orders.headline')
			@yield('content')

		</div>
		<!-- Scripts -->
		<script src="/js/app.js"></script>
		
		@section('scripts')
	</body>
</html>
