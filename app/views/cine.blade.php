<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="robots" content="noindex, nofollow">
	<link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">
	<title>Ciclo de Cine</title>
	{{ HTML::style('css/lista.css') }}
	{{ HTML::script('js/jquery-1.10.2.min.js') }}
	{{ HTML::script('js/search.js') }}
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
	<section id="add">
		<div class="box_form">
			{{ Form::open(['url' => '/cine/lista/agregar']) }}

				<p>{{ Form::label('No. de Cuenta:') }}
				{{ Form::text('nocuenta', '', [
					'placeholder' => ':numero',
					'required' => 'required'
				]) }}</p>
				
				<p>{{ Form::label('Nombre:') }}
				{{ Form::text('nombre', '', [
					'placeholder' => ':texto',
					'required' => 'required',
					'class' => 'align'
				]) }}</p>

				<p>{{ Form::label('Escuela:') }}
				{{ Form::text('escuela', '', [
					'placeholder' => ':texto',
					'required' => 'required'
				]) }}</p>

				<p>{{ Form::label('Cant. Peliculas:') }}
				{{ Form::text('pelis', '', [
					'placeholder' => ':numero',
					'required' => 'required'
				]) }}</p>

				{{ Form::submit('Agregar') }}

			{{ Form::close() }}
		</div>
		@if($msg = Session::get('msg'))
			<div class="notification">
				<p>{{ $msg = Session::get('msg') }}</p>
			</div>
		@endif
	</section>
	
	<!-- <br> -->

	@if($datos)
		<div class="total">
			<?php $total = 0; ?>
			@foreach($datos as $dato)
				<?php $total += ($dato->peliculas * 15); ?>
			@endforeach
			<p>Total = <span>${{ $total }} </span></p>			
		</div>
		<div id="search">
			<input type="search" class="light-table-filter" data-table="order-table" placeholder="Busqueda">
		</div>
		<table border="1" style="text-align: center;" class="order-table table">
			<thead>
				<tr class="t_head">
					{{--<td>ID</td>--}}
					<td>No. Cuenta</td>
					<td>Nombre</td>
					<td>Escuela</td>
					<td>Cant. pelis</td>
					<td>Dinero</td>
					<td>Operaciones</td>
				</tr>
			</thead>
			<tbody>
		@foreach($datos as $dato)
			<tr>
				{{--<td>{{ $dato->id }}</td>--}}
				<td>{{ $dato->nocuenta }}</td>
				<td>{{ $dato->nombre }}</td>
				<td>{{ $dato->escuela }}</td>
				<td>{{ $dato->peliculas }}</td>
				<td>{{ '$ '.$dato->peliculas * 15 }}</td>
				<td>
					{{ HTML::link('/cine/lista/editar/'.$dato->id, 'Editar', [
						'class' => 'edit'
					]) }} |
					{{ HTML::link('/cine/lista/eliminar/'.$dato->id, 'Eliminar', [
						'class' => 'delete'
					]) }}
				</td>
			</tr>
		@endforeach
			</tbody>
		</table>
	@else
		<h2>Aun no hay datos...</h2>
	@endif
	
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