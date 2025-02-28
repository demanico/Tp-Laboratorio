  <div id="page-container">

      <!-- Main Container -->
      <main id="main-container">
      
        <!-- Page Content -->
        <div class="bg-image" style="background-image: url('vistas/assets/media/photos/photo22@2x.jpg');">
          <div class="row g-0 bg-primary-op">
            <!-- Main Section -->
            <div class="hero-static col-md-6 d-flex align-items-center bg-body-extra-light">
              <div class="p-3 w-100">
                <!-- Header -->
                <div class="mb-3 text-center">
                  <a class="link-fx fw-bold fs-1" >
                    <span class="text-dark">Nico</span><span class="text-primary">TEC</span>
                  </a>
                  <p class="text-uppercase fw-bold fs-sm text-muted">Ingresar</p>
                </div>
                <!-- END Header -->

                <div class="row g-0 justify-content-center"> 
                   

                  <div class="col-sm-8 col-xl-6">
                    <form class="js-validation-signin"  method="POST"> 
                          
                      <div class="py-3"> 
                        <div class="mb-4">
                          <input type="email" class="form-control form-control-lg form-control-alt" id="login-username" name="email_usuario" placeholder="Email" required>
                        </div>
                        <div class="mb-4">
                          <input type="password" class="form-control form-control-lg form-control-alt" id="login-password" name="password_usuario" placeholder="Contraseña" required>
                        </div>
                      </div>
                      <div class="mb-4">
                        <button type="submit" class="btn w-100 btn-lg btn-hero btn-primary">
                          <i class="fa fa-fw fa-sign-in-alt opacity-50 me-1"></i> Ingresar
                        </button>
                          <?php 
                            $login = new UsuariosControlador();
                            $login->ctrIngresoUsuario()
                            ?> 
                        <p class="mt-3 mb-0 d-lg-flex justify-content-lg-between"> 
                          <a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1" href="op_auth_reminder.html">
                            <i class="fa fa-exclamation-triangle opacity-50 me-1"></i>Olvidaste tu contraseña
                          </a>
                          <a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1" href="op_auth_signup.html">
                            <i class="fa fa-plus opacity-50 me-1"></i>Añadir otra cuenta 
                          </a>
                        </p>
                      </div>
                         
                    </form>
                  </div>
                </div>
                <!-- END Sign In Form -->
              </div>
            </div>
            <!-- END Main Section -->

            <!-- Meta Info Section -->
            <div class="hero-static col-md-6 d-none d-md-flex align-items-md-center justify-content-md-center text-md-center">
              <div class="p-3">
                <p class="display-4 fw-bold text-white mb-3">
                    Bienvenido ;) 
                </p>
               
              </div>
            </div>
            <!-- END Meta Info Section -->
          </div>
        </div>
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->
    </div>
    <!-- END Page Container -->

    <!--
      Dashmix JS

      Core libraries and functionality
      webpack is putting everything together at assets/_js/main/app.js
      
    --> 
   

  </div>  
