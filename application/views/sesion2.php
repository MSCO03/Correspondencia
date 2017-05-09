<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>

  <link href="<?=CSS?>bootstrap.min.css" rel="stylesheet">
  <link href="<?=CSS?>bootstrap-theme.min.css" rel="stylesheet">
  <link href="<?=CSS?>default.css" rel="stylesheet">
  <link rel="stylesheet" href="<?=CSS?>sesion2.css">
</head>
<body>


  <form id="form-login">
    <div class="todo">
      <div class='login'>
        <h2 >Inicio de Sesion</h2>
        <input name='username' placeholder='Nombre de Usuario' type='text'/>
        <div id="errol29"> </div>
        <input id='pw' name='password' placeholder='Contraseña' type='password'/>
        <div id="errol30"> </div>
        <br>
        <br>
        <input id="enviar" onclick="Validacion();" type='button' value='INICIAR'/>
        <a class='forgot' href='#'>Haz olvidado tu contraseña?</a>
      </div>

    </form>
    <div class="margen1">
      <img id=imagen1 src="<?=IMG?>EscudoFIROJO.png" class="img-responsive" alt="img-responsive">
    </div>

    <!-- <script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script> -->

    <script src="<?=JS?>jquery.js"></script>
    <script src="<?=JS?>sesion2.js"></script>
    <script src="<?=JS?>Sesion2.js"></script>

  </div>
</body>
</html>
