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
              <li>{{ HTML::link("crsystem", "Inicio", array("title"=>"Inicio")) }}</li>
              <li class="active">{{ HTML::link("crsystem/changes", "Gestión de Cambios", array("title"=>"Gestión de Cambios")) }}</li>
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
        		<h1>CRSystem | Gestión de Cambios</h1>
        	</div>
          <div class="panel panel-default">

            <div class="panel-heading">Reporte de Cambios a Petición</div>
            <div class="panel-body">
              <p>
                Aquí se muestra el estatus de cada cambio.
              </p>
            </div>
            
            <table class="table table-striped">
              <thead>
                  <tr>
                      <th width="80">CRID</th>
                      <th>Descripción</th>
                      <th>Fecha</th>
                      <th>Autor</th>
                      <th>Asignado</th>
                      <th>Estado</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                      <td><a href="#">CR00001</a></td>
                      <td>This is longer content Donec id elit non mi porta gravida at eget m....</td>
                      <td>20/01/2014 13:00 hrs.</td>
                      <td>Pablo Rodriguez</td>
                      <td>Sin asignación</td>
                      <td><span class="label label-default" >Pendiente</span></td>
                  </tr>
                  <tr>
                      <td><a href="#">CR00002</a></td>
                      <td>This is longer Content Goes Here Donec id elit non mi porta gravida....</td>
                      <td>20/01/2014 13:00 hrs.</td>
                      <td>Jesús Michel</td>
                      <td>Emilio Ojeda</td>
                      <td><span class="label label-danger" >Cancelado</span></td>
                  </tr>
                  <tr>
                      <td><a href="#">CR00003</a></td>
                      <td>This is longer Content Goes Here Donec id elit non mi porta gravida...</td>
                      <td>20/01/2014 13:00 hrs.</td>
                      <td>Jesús Michel</td>
                      <td>Felipe Pérez</td>
                      <td><span class="label label-success" >Realizado</span></td>
                  </tr>
                  <tr>
                      <td><a href="#">CR00004</a></td>
                      <td>This is longer Content Goes Here Donec id elit non mi porta gravida...</td>
                      <td>20/01/2014 13:00 hrs.</td>
                      <td>Jesús Michel</td>
                      <td>Carlos Aguilar</td>
                      <td><span class="label label-primary">Asignado</span></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <p>
              <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-print"></span> Imprimir</button>
            </p>
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
