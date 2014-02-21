<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CRSystem | Bienvenido</title>

    {{ HTML::style("vendor/css/bootstrap.min.css") }}
    {{ HTML::style("vendor/css/crsystem.css") }}

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  	<!-- Wrap all page content here -->
    <div id="wrap">

      <!-- Fixed navbar -->
      <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">

            <a class="navbar-brand" href="#">Dashboard</a>

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
          	</button>

          </div>
          <div class="collapse navbar-collapse navbar-left">
            <ul class="nav navbar-nav">
              <li class="active">{{ HTML::link("crsystem", "Inicio", array("title"=>"Inicio")) }}</li>
              <li>{{ HTML::link("crsystem/changes", "Gestión de Cambios", array("title"=>"Gestión de Cambios")) }}</li>
              <li>{{ HTML::link("crsystem/new", "Nuevo Cambio", array("title"=>"Nuevo Cambio")) }}</li>
            </ul>
          </div><!--/.nav-collapse -->
          <div class="collapse navbar-collapse navbar-right">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Jesús Michel <span class='badge'>4</span><b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Mis datos</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">Acciones</li>
                  <li><a href="#">Mensajes <span class='badge'>4</span></a></li>
                  <li><a href="#">Salir</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>

      	<!-- Begin page content -->
      	<div class="container">
        	<div class="page-header">
        		<h1>CRSystem</h1>
        	</div>
        	<p class="lead">Bienvenido al gestor de cambios de NedBlu para clientes, este sistema está desarrollado para la gestión de los changes request (CR). Para acciones muy específicas respecto al cambio de datos u contraseña contactar con la administración de la empresa.
        	</p>
        	<div class="alert alert-warning">
        		Para mayor seguridad le sugerimos siga los indicadores que se muestran en los apartados de cada operación.
			</div>

        	<!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
			<div class="row">
			  <div class="col-xs-6 col-md-4">
			  	<h3>Visualizar la tabla de Cambios</h3>
			  	<p>
			  		Para poder ver los estatus de los cambios que se han pedido hasta ahora, debe seguir este botón. Los cambios que se muestren tienen distintos colores según sea su estatus.
			  	</p>
			  	<a class="btn btn-primary btn-lg btn-block">Ver cambios</a>
			  </div>
			  <div class="col-xs-6 col-md-4">
			  	<h3>Realizar nueva petición</h3>
			  	<p>
			  		Para realizar una nueva petición existen ciertos parámetros que de seben cumplir de acuerdo al contrato que se ha 
			  		firmado. Para crear un nuevo CR (Change Request) clic al botón.
			  	</p>
			  	<a class="btn btn-primary btn-lg btn-block">Crear Cambio</a>
			  </div>
			  <div class="col-xs-6 col-md-4">
			  	<h3>Contácto directo</h3>
			  	<p>
			  		Esta opción es única y exclusivamente para informar al operador sobre alguna incidencia o inconsistencia que esté presentando el sistema. De lo contrario, es por vía correo electrónico.
			  	</p>
			  	<a class="btn btn-primary btn-lg btn-block">Contactar Nedblu</a>
			  </div>
			</div>
      	</div>
    </div>

    <div id="footer">
      <div class="container">
        <p class="text-muted">Sistema desarrollado por Nedblu y asociados. &copy; 2014. Todos los derechos reservados. Este sitio usa bootstrap como elemento de diseño.</p>
      </div>
    </div>
    
    {{ HTML::script("https://code.jquery.com/jquery-1.10.2.min.js") }}
    {{ HTML::script("vendor/js/bootstrap.min.js") }}
  </body>
</html>
