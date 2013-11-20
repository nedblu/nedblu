<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="robots" content="noindex, nofollow">
	<title>Ciclo de Cine</title>
	<link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">
	{{ HTML::style('css/cinelogin.css') }}
</head>
<body>
	
	<header>
		<h1>Ciclo de Cine Telematica</h1>
	</header>
	<section>
		<div class="box">
			<h2>Log In</h2>
			{{ Form::open(['url' => '/cine/login']) }}
				
				{{ Form::label('Usuario:') }}

				{{ Form::text('user', '', [
					// 'placeholder' => 'usuario',
					'required' => 'required'
				]) }}

				{{ Form::label('Contraseña:') }}

				{{ Form::password('pass', '', [
					// 'placeholder' => 'Contraseña',
					'required' => 'required'
				]) }}

				{{ Form::submit('Log In') }}

			{{ Form::close() }}
		</div>
	</section>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-45855038-1', 'nedblu.com');
		ga('send', 'pageview');
	</script>
	
</body>
</html>