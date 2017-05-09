<!DOCTYPE html>
<html>
<head>
  <title></title>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


  <!-- <link href="<?=CSS?>bootstrap.min.css" rel="stylesheet"> -->
  <!-- <link href="<?=CSS?>bootstrap-theme.min.css" rel="stylesheet"> -->
  <!-- <link href="<?=CSS?>default.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="<?=CSS?>estilo.css">
  <!-- <link rel="stylesheet" href="<?=CSS?>sesion2.css"> -->
</head>
<body>
  <header>
    <img class="img-responsive" src="<?=IMG?>header-civiles1.jpg" alt="">
  </header>

  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <ul class="nav navbar-nav">
        <li class="active"><a href="Inicio">Inicio</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Correspondencia<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="Buzon">Buzon</a></li> <!--barra de busqueda-->
            <li><a href="TurnarOficioM">Turnar Oficio</a></li>


            <!-- Trigger the modal with a button -->
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

            <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                  </div>
                  <div class="modal-body">
                    <p>Some text in the modal.</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>

              </div>
            </div>


          </ul>
        </li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Oficios <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="Bitacora">Bitácora</a></li> <!--barra de busqueda-->
            <li><a href="modal">Nuevo Oficio</a></li>
          </ul>
        </li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Usuarios<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="Usuarios">Usuarios</a></li>
            <li><a href="Modal">Nuevo Usuario</a></li>
          </ul>
        </li>

      </ul>

      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" >
        </div>
        <button type="submit" class="btn btn-default">Buscar</button>
      </form>
      <div class="btn-group">

        <button type="button" class="btn btn-default">
          <span class="glyphicon glyphicon-refresh"></span>
        </button>

      </div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span>Cerrar Sesion</a></li>
      </ul>


    </div>
  </nav>

  <!--caja de consulta en correos-->


  <div class="panel panel-default">
    <div class="panel-heading">Bandeja de Entrada
    </div>


    <div class="">

      <div class="table">
        <div class="row">
          <div >
            Remitente
          </div>
          <div>
            Turnado a:
          </div>
          <div>
            Asunto
          </div>
          <div>
            Folio
          </div>
          <div>
            Oficio
          </div>
          <div>
            Fecha
          </div>
          <div>
            Responsable
          </div>
        </div>
      </div>
    </div>

  </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!--

  <script src="<?=JS?>jquery.js"></script>
  <script src="<?=JS?>bootstrap.min.js"></script> -->
</body>
</html>
