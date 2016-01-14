<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>@yield('title')</title>
	
	<link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.min.css">
	
	<style>
		.inner.cover {
			text-align: left;
		}
	</style>

</head>

<body>
	@include('layouts.menu')
	<div class="container">
		@yield('body')      		
	</div>
</div>
</body>
</html>