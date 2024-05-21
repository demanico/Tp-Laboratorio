<?php 
$categorias = CategoriasControlador::ctrMostrarCategorias(null,null); 

?>



<div class="block block-rounded">
            <div class="block-header block-header-default categorias "> 
              <h1 class="block-title">CATEGORIAS<i class="fa fa-2x fa-user-ninja"></i></h1> 
                 <button type="button" class="btn btn-primary btnBoton"  data-bs-toggle="modal" data-bs-target="#agregar-categoria" tipo="nuevo">
                   <i>Agregar Categoria</i> </button> 
            </div>
            <div class="col-sm-12">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo $url; ?>">Inicio</a></li> 
                        <li class="breadcrumb-item active">Categorias</li>
                    </ol> 
            </div>
            <div class="block-content block-content-full">
               <input type="hidden" id="url" value="<?php echo $url; ?>">
              <table class="table table-bordered table-striped table-vcenter tablaCategorias ">
                <thead> 
                  <tr>
                    <th class="d-none d-sm-table-cell" style="width: 30%;">Nombre</th>
                    <th style="width: 15%;">Acciones</th>
                  </tr>
                </thead>
              </table> 
            </div>
</div>


<div class="modal" id="agregar-categoria" tabindex="-1" role="dialog" aria-labelledby="modal-block-large" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form id="agregarCategoria" class="js-validation" method="POST" enctype="multipart/form-data" novalidate>       
                <div class="block block-rounded block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Agregar Categoria</h3>
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
                        <input type="text" class="form-control"  name="nombre_categoria" placeholder="Ingrese un Nombre" required>
                        </div>
                </div> 
                    <?php
                    $agregarCategoria = new CategoriasControlador();
                    $agregarCategoria->ctrAgregarCategoria(); 
                    ?> 
                <div class="block-content block-content-full text-end bg-body">
                    <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-sm btn-primary" >Guardar</button>
                </div> 
            </form>
        </div>
    </div>
</div> <!-- /.modal -->


<div class="modal" id="editar_categoria" tabindex="" role="dialog" aria-labelledby="modal-block-large" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form id="editarCategoria" method="POST" enctype="multipart/form-data">       
                <div class="block block-rounded block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Editar Categoria</h3>
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
                        <input type="text" class="form-control nombre_categoria"  name="editar_nombre_categoria">
                        </div>
                    </div>      
                </div> 
                    <input type="hidden" class="editar_id_categoria" name="editar_id_categoria" value="">
                    <?php
                    $editarCategoria = new CategoriasControlador();
                    $editarCategoria->ctrEditarCategoria(); 
                    ?> 
                <div class="block-content block-content-full text-end bg-body">
                    <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-sm btn-primary" >Guardar</button>
                </div> 
            </form>
        </div>
    </div>
</div> <!-- /.modal --

<?php
$eliminar = new CategoriasControlador();
$eliminar->ctrEliminarCategoria();
?>  