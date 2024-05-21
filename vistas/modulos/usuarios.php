<?php

$roles = RolesControlador::ctrMostrarRoles(null, null); 

$estados = Funciones::MostrarEstados(null, null); 
?>

<div class="block block-rounded">
            <div class="block-header block-header-default usuarios ">  
              <h1 class="block-title">USUARIOS <i class="fa fa-2x fa-user-ninja"></i></h1> 
                 <button type="button" class="btn btn-primary btnBoton"  data-bs-toggle="modal" data-bs-target="#agregar-usuario" tipo="nuevo">
                   <i>Agregar Usuario</i> </button> 
            </div>
            <div class="col-sm-12">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo $url; ?>">Inicio</a></li> 
                        <li class="breadcrumb-item active">Usuarios</li>
                    </ol> 
            </div>
            <div class="block-content block-content-full">
               <input type="hidden" id="url" value="<?php echo $url; ?>">
              <table class="table table-bordered table-striped table-vcenter tablaUsuarios">
                <thead> 
                  <tr>
                    <th class="d-none d-sm-table-cell" style="width: 30%;">Nombre</th>
                    <th class="d-none d-sm-table-cell" style="width: 15%;" >Email</th>
                    <th class="d-none d-sm-table-cell" style="width: 15%;" >Rol</th> 
                    <th class="d-none d-sm-table-cell" style="width: 15%;" >Estado</th> 
                    <th style="width: 15%;">Acciones</th>
                  </tr>
                </thead>
              </table> 
            </div>
</div>

<div class="modal" id="agregar-usuario" tabindex="-1" role="dialog" aria-labelledby="modal-block-large" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form id="agregarUsuario" class="js-validation" method="POST" enctype="multipart/form-data" novalidate>       
                <div class="block block-rounded block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Agregar Usuario</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div> 
                    </div>   
                </div>
                <div class="block-content">
                    <div class="row justify-content-center"> 
                        <div class="col-lg-5 col-mb-6"> 
                        <div class="mb-4">
                        <label class="form-label" for="val-username">Nombre</label>
                        <input type="text" class="form-control"  name="nombre_usuario" placeholder="Ingrese un Nombre" required>
                        </div>
                        </div>
                        <div class="col-lg-5 col-mb-6">
                        <div class="mb-4">
                        <label class="form-label" for="val-currency">Email</label>
                        <input type="email" class="form-control" id="val-email" name="email_usuario" placeholder="Ingrese su email" required>
                        </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col-mb-12">
                            <div class="mb-4">
                            <label class="form-label" for="val-suggestions">Password</label>
                            <input type="Password" class="form-control" id="val-password" name="password_usuario" placeholder="Ingrese su contraseña" required>
                            </div>       
                        </div>
                    </div>
                    <div class="row justify-content-center mb-4">
                        <div class="col-md-10">
                            <label class="form-label valid" for="val-skill">Roles</label>
                            <select class="form-select valid"  name="id_rol_usuario" required>
                                <option value="">Seleccione un rol</option>
                                <?php foreach ($roles as $key => $value) { ?>
                                    <option value="<?php echo $value["id_rol"]; ?>"><?php echo $value["nombre_rol"]; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-4">
                       <div class="col-md-10"> 
                            <label class="form-label" for="val-skill">Estado</label>  
                            <select class="form-select valid" id="val-skill" name="estado_usuario" > 
                                <option value="">Seleccione un estado</option> 
                                <?php foreach ($estados as $key => $value) { ?>
                                <option value="<?php echo $value["id_estado"]; ?>
                                "><?php echo $value["nombre_estado"]; ?></option>
                                <?php } ?>
                            </select>
                        </div> 
                    </div> 
                </div> 
                    <?php
                    $agregarUsuario = new UsuariosControlador();
                    $agregarUsuario->ctrAgregarUsuario();
                    ?> 
                <div class="block-content block-content-full text-end bg-body">
                    <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-sm btn-primary" >Guardar</button>
                </div> 
            </form>
        </div>
    </div>
</div> <!-- /.modal -->  


<div class="modal" id="editar-usuario" tabindex="-1" role="dialog" aria-labelledby="modal-block-large" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form id="editarUsuario" method="POST" enctype="multipart/form-data" >       
                <div class="block block-rounded block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Editar Usuario</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div> 
                    </div>   
                </div>
                <div class="block-content">
                    <div class="row justify-content-center"> 
                        <div class="col-lg-5 col-mb-6"> 
                        <div class="mb-4">
                        <label class="form-label" for="val-username">Nombre</label>
                        <input type="text" class="form-control nombre_usuario"  name="editar_nombre_usuario"  >
                        </div>
                        </div>
                        <div class="col-lg-5 col-mb-6">
                        <div class="mb-4">
                        <label class="form-label" for="val-currency">Email</label>
                        <input type="email" class="form-control email_usuario"  name="editar_email_usuario"  >
                        </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col-mb-12">
                            <div class="mb-4">
                            <label class="form-label" for="val-suggestions">Password</label>
                            <input type="Password" class="form-control" name="editar_password_usuario">
                            </div>       
                        </div>
                    </div>
                    <div class="row justify-content-center mb-4">
                        <div class="col-md-10">
                            <label class="form-label" for="val-select2">Roles</label>
                            <select class="form-select valid" name="editar_id_rol_usuario" id="roles">  
                                <option value="">Seleccione un rol</option> 
                                <?php foreach ($roles as $key => $value) { ?>
                                    <option value="<?php echo $value["id_rol"]; ?>">
                                    <?php echo $value["nombre_rol"]; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-4">
                       <div class="col-md-10"> 
                            <label class="form-label" for="val-select2">Estado</label>  
                            <select class="form-select valid" id="estado" name="editar_estado_usuario">  
                                <option value="">Seleccione un estado</option> 
                                <?php foreach($estados as $key => $value) { ?>
                                <option value="<?php echo $value["id_estado"]; ?>
                                "><?php echo $value["nombre_estado"]; ?></option>
                                <?php } ?>
                            </select> 
                        </div> 
                    </div> 
                </div> 
                    <input type="hidden" class="editar_id_usuario" name="editar_id_usuario" value="">   
                    <?php
                    $editarUsuario = new UsuariosControlador(); 
                    $editarUsuario->ctrEditarUsuario();  
                    ?> 
                <div class="block-content block-content-full text-end bg-body">
                    <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-sm btn-primary" >Guardar</button>
                </div> 
            </form>
        </div>
    </div>
</div> <!-- /.modal --> 


<?php
$eliminar = new UsuariosControlador();
$eliminar->ctrEliminarUsuario();
?>  