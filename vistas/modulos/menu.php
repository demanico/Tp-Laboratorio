<?php
$usuarios = UsuariosControlador::ctrMostrarUsuarios(null,null);
$roles = RolesControlador::ctrMostrarRoles(null, null);  

?>
        <div class="smini-hidden">
          <div class="content-header justify-content-lg-center">
            <!-- Logo -->
            <a class="fw-semibold text-white tracking-wide" href="index.html">
              Dema<span class="opacity-75">Skill</span>
              <span class="fw-normal">Gaming</span>
            </a>
            <!-- END Logo -->

            <!-- Options -->
            <div class="d-lg-none">
              <!-- Close Sidebar, Visible only on mobile screens -->
              <a class="text-white ms-2" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                <i class="fa fa-times-circle"></i>
              </a>
              <!-- END Close Sidebar -->
            </div>
            <!-- END Options -->
          </div>
        </div> 
        <div class="content-side content-side-full bg-black-10 text-center">
            <div class="smini-hide">
              <a class="img-link d-block mb-3" href="javascript:void(0)">
                <img class="img-avatar img-avatar-thumb" src="" alt="">
              </a>
              <a class="fw-semibold text-dual" href="javascript:void(0)">
                @<?php foreach($usuarios as $value){ ?> 
                      <?php echo $value["nombre_usuario"]; 
                         break?> 
                           <?php } ?>Craft 
              </a>
              <span class="badge rounded-pill bg-danger"><?php foreach($roles as $value1){ ?> 
                      <?php echo $value1["nombre_rol"];  
                         break?> 
                           <?php } ?></span>
            </div>
          </div> 
          <div class="content-side content-side-full">
            <ul class="nav-main">
              <li class="nav-main-item">
                <a class="nav-main-link" href="<?php echo $url ?>"> 
                <i class="nav-main-link-icon fas fa-home"></i> 
                <span class="nav-main-link-name">Inicio</span> 
                </a>
              </li>
              
              <li class="nav-main-item">
                <a class="nav-main-link" href="usuarios"> 
                  <i class="nav-main-link-icon fa fa-server"></i>
                  <span class="nav-main-link-name">Usuarios</span>
                  
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="productos">
                  <i class="nav-main-link-icon fa fa-desktop"></i>
                  <span class="nav-main-link-name">Productos</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="categorias">
                  <i class="nav-main-link-icon fa fa-inbox"></i>
                  <span class="nav-main-link-name">Categorias</span>
                  
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="salir">
                  <i class="nav-main-link-icon fa fa-wrench"></i>
                  <span class="nav-main-link-name">Salir</span> 
                </a>
              </li>
            </ul>
          </div>