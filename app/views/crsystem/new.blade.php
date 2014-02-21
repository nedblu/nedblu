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
              <li>{{ HTML::link("crsystem/changes", "Gestión de Cambios", array("title"=>"Gestión de Cambios")) }}</li>
              <li class="active">{{ HTML::link("crsystem/new", "Nuevo Cambio", array("title"=>"Nuevo Cambio")) }}</li>
            </ul>
          </div><!--/.nav-collapse -->
          <div class="collapse navbar-collapse navbar-right">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Jesús Michel  <span class='badge'>4</span><b class="caret"></b></a>
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
            <h1>CRSystem | Nuevo cambio</h1>
          </div>
          <div class="panel panel-default">

            <div class="panel-heading">Petición de nuevo cambio</div>
            <div class="panel-body">
              <div class="alert alert-warning alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Para realizar un cambio es necesario que especifique todos los campos que se le piden. Y se trate de ser lo más 
                explícito con las solicitudes de lo contrario podrían no cumplirse a tiempo y forma.
              </div>
            </div>
            
            <div class="box-form">
              <form class="form-horizontal" role="form">
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Solicitante</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" value="Jesús Michel Nava" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Dirección</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" value="Santos Degollado, 223, Los Girasoles Querétaro, Querétaro" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Empresa</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" value="Salad Michel Fresh, S.A. de C.V., México" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Sitio Web</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" value="http://www.saladmichelfresh.com" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Correo Electrónico</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" value="direccion@saladmichelfresh.com" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Titulo</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Titulo del cambio">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Detalle</label>  
                  <div class="col-sm-10">
                    <textarea class="form-control" rows="5"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Crear Ticket</button>
                    <button type="submit" class="btn btn-default">Cancelar</button>
                  </div>
                </div>
              </form>
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
