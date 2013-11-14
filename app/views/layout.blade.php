<!doctype html>
<html>
<head>
	<meta charset = 'UTF-8'>
	<title>Welcome to BookSmart</title>
	<link rel = "stylesheet" href = "{{ asset('css/bootstrap.min.css') }}" />
</head>
<body>
	<div class = "container">
		<nav class = "navbar navbar-default" role = "navigation">
			<div class = "navbar-header">
				<a href = "{{ action('OfferController@index') }}" class = "navbar-brand">Offers</a>
			</div>
		</nav>
		@yield('content')
	</div>
</body>
</html>