<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ciclo de Cine</title>
	<meta name="robots" content="noindex, nofollow">
	<link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">
	{{ HTML::style('css/editar.css') }}
</head>
<body>
	
	<section id="user_data">
		<div class="user">
			{{ Auth::user()->username }}
		</div><!--
		--><div class="logout">
			{{ HTML::link('/cine/logout', 'Logout') }}
		</div>		
	</section>
	<header>
		<h1>Ciclo de Cine Telematica</h1>
	</header>
	
	<h2>Editando</h2>

	<section id="edit">
		<div class="box_form">
		{{ Form::open(['url' => '/cine/lista/actualizar']) }}

			{{ Form::hidden('id', $data[0]->id) }}

			<p>{{ Form::label('No. de Cuenta:') }}
			{{ Form::text('nocuenta', $data[0]->nocuenta, [
				'placeholder' => 'No. de Cuenta',
				'required' => 'required'
			]) }}</p>

			<p>{{ Form::label('Nombre:') }}
			{{ Form::text('nombre', $data[0]->nombre, [
				'placeholder' => 'Nombre Completo',
				'required' => 'required'
			]) }}</p>

			<p>{{ Form::label('Escuela:') }}
			{{ Form::text('escuela', $data[0]->escuela, [
				'placeholder' => 'Escuela',
				'required' => 'required'
			]) }}</p>

			<p>{{ Form::label('Cant. Peliculas:') }}
			{{ Form::text('pelis', $data[0]->peliculas, [
				'placeholder' => 'No. peliculas',
				'required' => 'required'
			]) }}</p>

			{{ Form::submit('Editar') }}

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