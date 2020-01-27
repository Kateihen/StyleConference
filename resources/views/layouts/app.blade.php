<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Style Conference @yield('title')</title>
		<link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
		<link rel="icon" href="{{ URL::asset('img/favicon.ico') }}">
		<link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
	</head>
	
	<body>
	
		<header class="primary-header container clearfix">
			<h1 class="logo">
				<a href="/">Styles <br/> Conference</a>
			</h1>
			
			<h3 class="tagline">August 24&ndash;26 &mdash; Chicago, Il.</h3>
			
			<nav class="nav primary-nav">
				<ul>
					<li><a href="/">Home</a></li><!--
					--><li><a href="/speakers">Speakers</a></li><!--
					--><li><a href="/schedule">Schedule</a></li><!--
					--><li><a href="/venue">Venue</a></li><!--
					--><li><a href="/signup">Register</a></li>
				</ul>
			</nav>
		</header>

		@yield('content')

		@if(Auth::check())
			<div class="container logout-btn">
				<form action="/logout" method="POST">
				@csrf
				<button value="submit" class="btn btn-default">Logout</button>
				</form>
			</div>
		@endif

		<footer class="container primary-footer clearfix">

			<small>&copy; Styles Conference</small>
			<nav class="nav">
				<ul>
					<li><a href="/">Home</a></li><!--
					--><li><a href="/speakers">Speakers</a></li><!--
					--><li><a href="/schedule">Schedule</a></li><!--
					--><li><a href="/venue">Venue</a></li><!--
					--><li><a href="/signup">Register</a></li>
				</ul>
			</nav>
			
		</footer>
	</body>
</html>