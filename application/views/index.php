<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <link href="<?=CSS?>bootstrap.min.css" rel="stylesheet">
  <link href="<?=CSS?>bootstrap-theme.min.css" rel="stylesheet">
  <link href="<?=CSS?>default.css" rel="stylesheet">
  <link rel="stylesheet" href="<?=CSS?>estilo.css">
  <!-- <link rel="stylesheet" href="<?=CSS?>sesion2.css"> -->
</head>
<body>
  <header>
    <img src="<?=IMG?>header-civiles1.jpg" class="img-responsive" alt="">
  </header>

  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <ul class="nav navbar-nav">
        <li class="active"><a href="Inicio">Inicio</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Correspondencia<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="Buzon">Buzon</a></li> <!--barra de busqueda-->
            <li><a href="TurnarOficioM">Turnar Oficio</a></li>
          </ul>
        </li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Oficios <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="Bitacora">Bitácora</a></li> <!--barra de busqueda-->
            <li><a href="Modal">Nuevo Oficio</a></li>
          </ul>
        </li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Usuarios<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="Usuarios">Usuarios</a></li>
            <li><a href="Modal">Nuevo Usuario</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="sesion"><span class="glyphicon glyphicon-user"></span>Cerrar Sesion</a></li>
      </ul>
    </div>
  </nav>
  <div class="container">
    <p>
      <center>INICIO</center>
    </p>
  </div>
  <script src="<?=JS?>jquery.js"></script>
  <script src="<?=JS?>bootstrap.min.js"></script>
</body>
</html>
