          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto bg-dark fixed-top py-2 top-navbar" id="menuTop">
            <div class="row align-items-center">
              <div class="col-md-9">
                <h4 class="text-light text-uppercase mb-0">Administración / <?php echo $titulo ?></h4>
              </div>

              <div class="col-md-3 ">
                <ul class="navbar-nav d-flex justify-content-center">
                  <!--<li class="nav-item ml-md-auto"><a href="../index.php" class="nav-link">Web</a></li>-->
                  <li class="nav-item ml-md-auto"><a href="#" class="nav-link" data-toggle="modal" data-target="#sign-out"><i class="fas fa-sign-out-alt text-danger fa-lg"></i></a></li>
                </ul>
              </div>

            </div>

          </div>

          <!-- modal salir -->
          <div class="modal fade" id="sign-out">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Qué deseas hacer?</h4>
                  <button type="button" name="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                  Presiona SALIR para cerrar sesion
                </div>
                <div class="modal-footer">
                  <button type="button" name="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
                  <button type="button" name="button" class="btn btn-danger"><a href="../logout.php" class="text-white ">Salir</a> </button>
                </div>
              </div>
            </div>
          </div>
          <!-- end modal salir-->

          <!-- modal SETTING -->
          <div class="modal fade" id="setting" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Cambiar colores de menú</h4>
                  <button type="button" name="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body row">
                  <div class="col-4">
                    <label for="exampleColorInput" class="form-label">Sidebar</label>
                    <input type="color" class="form-control form-control-color" id="colorMenu" value="#563d7c" onclick="bgcolor('menu','colorMenu','bg-dark')">
                  </div>

                  <div class="col-4">
                    <label for="exampleColorInput" class="form-label">TopBar</label>
                    <input type="color" class="form-control form-control-color" id="colorMenuTop" value="#563d7c" onclick="bgcolor('menuTop','colorMenuTop','bg-dark')">
                  </div>


                </div>

              </div>
            </div>
          </div>
          <!-- End modal SETTING -->