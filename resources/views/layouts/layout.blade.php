<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>@yield('title')</title>
	
	<link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://getbootstrap.com/examples/cover/cover.css">
	
	<style>
		.inner.cover {
			text-align: left;
		}
	</style>

</head>

<body>
	<div class="site-wrapper">
		<div class="site-wrapper-inner">
			<div class="cover-container">
				<div class="masthead clearfix">
					<div class="inner">
						@include('layouts.menu')
			 		</div>
          		</div>
	  			<div class="inner cover">
        			@yield('body')
          		</div>
          		<div class="mastfoot">
            		<div class="inner">
              			<p>En utvilkers drøm</p>
            		</div>
          		</div>
          	</div>
  		</div>
	</div>
</div>
</body>
</html>