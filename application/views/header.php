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


          <!--modal de buzons-->

          <!--Button trigger modal-->
          <!-- <div class="btn-group btn-group-vertical"> -->

            <li>
                <a data-toggle="modal" data-target="#myModal" href="#">Turnar oficio</a>
            </li>

          <!-- </div> -->
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Oficios <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="Bitacora">Bitácora</a></li> <!--barra de busqueda-->

          <li><a data-toggle="modal" data-target="#myModal1" href="#">Nuevo Oficio</a></li>

          
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Usuarios<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="Usuarios">Usuarios</a></li>
          <li><a data-toggle="modal" data-target="#myModal2" href="#">Nuevo Usuario</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="sesion"><span class="glyphicon glyphicon-user"></span>   Cerrar Sesion</a></li>
    </ul>
  </div>
</nav>
<div class="container">




  <!-- Modal de Buzon -->

  <!-- line modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-content">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">X</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title" id="lineModalLabel"><span class="glyphicon glyphicon-blackboard glyphicon-align-left"></span>   Turnar Nuevo Oficio</h4>
        </div>

        <!-- content goes here -->
        <form id="contenido" class="modal-content">
          <div class="row">
            <div class="col-md-6">
              <br>
              <div class="form-group">
                <label>Folio:</label>
                <input type="text" class="form-control" name="name" placeholder="195" disabled>
              </div>
              <div class="form-group">
                <label for="email">Fecha de Ingreso:</label>
                <input type="email" class="form-control" name="email" placeholder="18-Abril-2017">
              </div>
              <div class="form-group">
                <label for="subject">Remitente:</label>
                <select class="form-control" name="subject">
                  <option select value="0">Seleccione una Opción</option>
                  <option selected value="1">Tanya Itzel Arteaga Ricci</option>

                </select>
                <br>
                <div class="form-group">
                  <label for="prueba">Adjuntar un archivo </label>
                  <input type="file" id="prueba">
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <br>
              <div class="form-group">
                <label for="email">No. de Oficio:</label>
                <input type="email" class="form-control" name="email" placeholder="1532" disabled>
              </div>
              <div class="form-group">
                <label for="email">Turnado a:</label>
                <input type="email" class="form-control" name="email" placeholder="Turnar">
              </div>
              <div class="form-group">
                <label for="email">Reponsable:</label>
                <input type="email" class="form-control" name="email" placeholder="Responsable">
              </div>
            </div>
            <div class="col-md-12">

              <div class="form-group">
                <label for="message">Asunto</label>
                <textarea class="form-control" name="message" rows="3" placeholder="Detalles del Oficio"></textarea>
              </div>

            </div>
            <div class="form-group">
              <button id="enviar" class="btn  pull-right" type="submit"><span class="glyphicon glyphicon-send"> </span>  Enviar</button>
            </div>

          </div>
        </form>
      </div>
    </div>
  </div>



<!-- Modal de Nuevo Oficio -->

<!-- line modal -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-content">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">X</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="lineModalLabel"><span class="glyphicon glyphicon-plus-sign"> </span> Nuevo Oficio</h4>
      </div>

      <!-- content goes here -->
      <form id="contenido" class="modal-content">
        <div class="row">
          <div class="col-md-6">
            <br>
            <div class="form-group">
              <label>Folio:</label>
              <input type="text" class="form-control" name="name" placeholder="195" disabled>
            </div>
            <div class="form-group">
              <label for="email">Fecha de Ingreso:</label>
              <input type="email" class="form-control" name="email" placeholder="18-Abril-2017">
            </div>
            <div class="form-group">

              <div class="form-group">
                <label for="prueba">Adjuntar un archivo </label>
                <span id="azul" class="glyphicon glyphicon-folder-open"></span> <input type="file" id="prueba">
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <br>

            <div class="form-group">
              <label for="email">Dependencia:</label>
              <input type="email" class="form-control" name="email" placeholder="Dependencia">
            </div>
            <div class="form-group">
              <label for="email">Elaboró:</label>
              <input type="email" class="form-control" name="email" placeholder="Elaboró">
            </div>
          </div>
          <div class="col-md-12">

            <div class="form-group">
              <label for="message">Asunto</label>
              <textarea class="form-control" name="message" rows="3" placeholder="Detalles del Oficio"></textarea>
            </div>

          </div>
          <div class="form-group">
            <button id="enviar" class="btn pull-right" type="submit"><span class="glyphicon glyphicon-floppy-disk"></span>  Guardar</button>
          </div>

        </div>
      </form>
    </div>
  </div>
</div>





<!-- Modal de Usuarios -->

<!-- line modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-content">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">X</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="lineModalLabel"><span class="glyphicon glyphicon-user"></span>   Nuevo Usuario</h4>
      </div>

      <!-- content goes here -->
      <form id="contenido" class="modal-content">
        <div class="row">
          <div class="col-md-6">
            <br>
            <div class="form-group">
              <label>Nombre:</label>
              <input type="text" class="form-control" name="name" placeholder="Nombre">
            </div>
            <div class="form-group">
              <label for="email">Puesto:</label>
              <input type="email" class="form-control" name="email" placeholder="Puesto">
            </div>
            <div class="form-group">
              <label for="subject">Nivel:</label>
              <select class="form-control" name="subject">
                <option select value="0">Seleccione una Opción</option>
                <option selected value="1">1</option>
                <option selected value="2">2</option>
                <option selected value="3">3</option>
              </select>

            </div>
            <div class="form-group">
              <label for="email">Agregar Correo:</label>
              <input type="email" class="form-control" name="email" placeholder="Correo">
            </div>
          </div>

          <div class="col-md-6">
            <br>
            <div class="form-group">
              <label for="email">Login:</label>
              <input type="email" class="form-control" name="email" placeholder="login">
            </div>
            <div class="form-group">
              <label for="email">Contraseña:</label>
              <input type="email" class="form-control" name="email" placeholder="Contraseña">
            </div>
            <div class="form-group">
              <label for="email">Confirmar Contraseña:</label>
              <input type="email" class="form-control" name="email" placeholder="Confirmar">
            </div>
          </div>
          <div class="col-md-12">

            <div class="form-group">
              <label for="message">Detalles de la Cuenta</label>
              <textarea class="form-control" name="message" rows="3" placeholder="Comentarios"></textarea>
            </div>

          </div>
          <div class="form-group">
            <button id="enviar" class="btn pull-right" type="submit"><span class="glyphicon glyphicon-floppy-disk"></span>   Guardar</button>
          </div>

        </div>
      </form>
    </div>
  </div>
</div>
