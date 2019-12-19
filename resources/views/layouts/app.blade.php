<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Style Conference @yield('title')</title>
		<link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
		<link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
	</head>
	
	<body>
	
		<header class="primary-header container clearfix">
			<h1 class="logo">
				<a href="index.html">Styles <br/> Conference</a>
			</h1>
			
			<h3 class="tagline">August 24&ndash;26 &mdash; Chicago, Il.</h3>
			
			<nav class="nav primary-nav">
				<ul>
					<li><a href="index.html">Home</a></li><!--
					--><li><a href="speakers.html" target="_blank">Speakers</a></li><!--
					--><li><a href="schedule.html" target="_blank">Schedule</a></li><!--
					--><li><a href="venue.html" target="_blank">Venue</a></li><!--
					--><li><a href="register.html" target="_blank">Register</a></li>
				</ul>
			</nav>
		</header>

		@yield('content')

		<footer class="container primary-footer clearfix">
			<small>&copy; Styles Conference</small>
			<nav class="nav">
				<ul>
					<li><a href="index.html">Home</a></li><!--
					--><li><a href="speakers.html" target="_blank">Speakers</a></li><!--
					--><li><a href="schedule.html" target="_blank">Schedule</a></li><!--
					--><li><a href="venue.html" target="_blank">Venue</a></li><!--
					--><li><a href="register.html" target="_blank">Register</a></li>
				</ul>
			</nav>
			</nav>
		</footer>
	</body>
</html>