<!-- Dynamic Table Responsive -->
<?php 

$categorias = CategoriasControlador::ctrMostrarCategorias(null, null); 
#print_r($categorias);
$productos = ProductosControlador::ctrMostrarProductos(null,null) ; 
//print_r($productos); 
$marcas = MarcasControlador::ctrMostrarMarcas(null,null);  

$estados = Funciones::MostrarEstados(null,null); 


?> 


<div class="block block-rounded">
            <div class="block-header block-header-default productos "> 
              <h1 class="block-title">PRODUCTOS <i class="fab fa-2x fa-github"></i></h1> 
                 <button type="button" class="btn btn-primary btnBoton"  data-bs-toggle="modal" data-bs-target="#agregar-producto" tipo="nuevo">
                   <i>Agregar producto</i> </button> 
            </div>
            <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo $url; ?>">Inicio</a></li>
                        <li class="breadcrumb-item active">Productos</li>
                    </ol> 
            </div>
            <div class="block-content block-content-full">
               <input type="hidden" id="url" value="<?php echo $url; ?>">
              <table class="table table-bordered table-striped table-vcenter tablaProductos">
                <thead>
                  <tr>
                    <th class="d-none d-sm-table-cell" style="width: 20%;">Nombre</th>
                    <th class="d-none d-sm-table-cell" style="width: 15%;" >Precio</th>
                    <th class="d-none d-sm-table-cell" style="width: 15%;" >Marca</th> 
                    <th class="d-none d-sm-table-cell" style="width: 15%;" >categoria</th> 
                    <th class="d-none d-sm-table-cell" style="width: 15%;" >Estado</th>
                    <th style="width: 25%;">Acciones</th>
                  </tr>
                </thead>
              </table> 
            </div>
</div>

<div class="modal" id="agregar-producto" tabindex="-1" role="dialog" aria-labelledby="modal-block-large" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form id="agregarProducto" class="js-validation" method="POST" enctype="multipart/form-data" novalidate>       
                <div class="block block-rounded block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Agregar Productos</h3>
                        <div class="block-options">
                        <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                        </div>
                    </div>   
                </div> 
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-mb-6"> 
                     <div class="mb-1">
                       <label class="form-label" for="val-username">Nombre</label>
                       <input type="text" class="form-control"  name="nombre_producto" placeholder="Ingrese un Nombre" required>
                     </div>
                    </div>
                    <div class="col-lg-5 col-mb-6">
                    <div class="mb-1">
                      <label class="form-label" for="val-currency">Precio</label>
                      <input type="text" class="form-control" id="val-currency" name="precio_producto" placeholder="$" required>
                    </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-11 col-mb-12">
                        <div class="mb-4">
                        <label class="form-label" for="val-suggestions">Descripción del producto</label>
                        <textarea class="form-control" id="val-suggestions" name="descripcion_producto" rows="5" placeholder="" required></textarea>
                        </div>       
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="mb-4">
                           <label class="form-label" for="val-select2">Marcas </label>
                            <select class="js-select2 form-select" id="val-select2" name="marca_producto" style="width: 100%;" required>
                                <option>Seleccione una Marca</option>
                                  <?php foreach($marcas as $key => $value){ ?> 
                                    <option value="<?php echo $value["id_marca"]?>"> 
                                       <?php echo $value["nombre_marca"]; ?> </option>
                                    <?php } ?>
                        
                            </select>
                        </div>      
                    </div>
                    <div class="col-lg-4"> 
                    <div class="mb-4">
                           <label class="form-label" for="val-select2">Categorias</label>
                            <select class="js-select2 form-select" id="val-select2" name="categoria_producto" style="width: 100%;" required>
                            <option value="">Seleccione una categoria</option>
                                <?php foreach ($categorias as $key => $value) { ?>
                                    <option value="<?php echo $value["id_categoria"]; ?>">
                                        <?php echo $value["nombre_categoria"]; ?></option>
                                <?php } ?> 
                               
                            </select>
                        </div>      
                    </div>
                    <div class="col-lg-4">
                    <div class="mb-4">
                           <label class="form-label" for="val-select2">Estado</label>
                            <select class="js-select2 form-select" id="val-select2" name="estado_producto" style="width: 100%;" required>
                             <option value="">Seleccione el estado</option>
                                <?php foreach ($estados as $key => $value) { ?>
                                    <option value="<?php echo $value["id_estado"]; ?>">
                                        <?php echo $value["nombre_estado"]; ?></option>
                                <?php } ?>
                            </select>
                        </div>      
                    </div>
                </div>
                <div class="image"> 
                   <label for="exampleInputFile">Imagen</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="subirImagen" name="imagen_producto">
                                    <label class="custom-file-label" for="exampleInputFile">Seleccione una imagen</label>
                                </div>
                            </div>
                             <img width="100"  class="previsualizarImagen" src="" alt=""> 
               </div> 
                   <?php
                    $agregar = new ProductosControlador();
                    $agregar->ctrAgregarProducto();
                    ?> 
               <div class="block-content block-content-full text-end bg-body">
                    <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-sm btn-primary" data-bs-dismiss="modal">Guardar</button>
                </div>   
            </form> 
        </div>
    </div>
</div>


<div class="modal" id="editar-producto" tabindex="-1" role="dialog" aria-labelledby="modal-block-large" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form id="editarProducto"  method="POST" enctype="multipart/form-data">      
                <div class="block block-rounded block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Editar Productos</h3> 
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
                        <input type="text" class="form-control nombre_producto"  name="editar_nombre_producto" placeholder="" >
                        </div>
                        </div>
                        <div class="col-lg-5 col-mb-6">
                        <div class="mb-4">
                        <label class="form-label" for="val-currency">Precio</label>
                        <input type="text" class="form-control precio_producto" id="val-currency" name="editar_precio_producto" placeholder="" >
                        </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-11 col-mb-12">
                            <div class="mb-4">
                            <label class="form-label" for="val-suggestions">Descripción del producto</label>
                            <textarea class="form-control descripcion_producto" id="val-suggestions" name="editar_descripcion_producto" rows="5" placeholder="" ></textarea>
                            </div>       
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-4">
                            <div class="mb-4">
                            <label class="form-label" for="val-select2">Marcas </label>
                                <select class="form-select valid" id="marca" name="editar_marca_producto" style="width: 100%;" >
                                    <option>Seleccione una Marca</option>
                                    <?php foreach($marcas as $key => $value){ ?> 
                                        <option value="<?php echo $value["id_marca"]?>"> 
                                        <?php echo $value["nombre_marca"]; ?> </option> 
                                        <?php } ?>
                            
                                </select>
                            </div>      
                        </div>
                        <div class="col-lg-4"> 
                        <div class="mb-4">
                            <label class="form-label" for="val-select2">Categorias</label>
                                <select class="form-select valid" id="categoria" name="editar_categoria_producto" style="width: 100%;" >
                                <option value="">Seleccione una categoria</option>
                                    <?php foreach ($categorias as $key => $value) { ?>
                                        <option value="<?php echo $value["id_categoria"]; ?>">
                                            <?php echo $value["nombre_categoria"]; ?></option>
                                    <?php } ?> 
                                
                                </select>
                            </div>      
                        </div>
                        <div class="col-lg-4">
                        <div class="mb-4">
                            <label class="form-label" for="val-select2">Estado</label>
                                <select class="form-select valid" id="estado" name="editar_estado_producto" style="width: 100%;" >
                                <option value="">Seleccione el estado</option>
                                    <?php foreach ($estados as $key => $value) { ?>
                                        <option value="<?php echo $value["id_estado"]; ?>">
                                            <?php echo $value["nombre_estado"]; ?></option>
                                    <?php } ?>
                                </select>
                            </div>      
                        </div>
                    </div>
                    <div class="row">
                        <label for="exampleInputFile">Imagen</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="subirImagen" name="editar_imagen_producto">
                                            <label class="custom-file-label" for="exampleInputFile">Seleccione una imagen</label>
                                        </div>
                                    </div>
                                    <img width="100px" height="100px" class="previsualizarImagen" src="" alt="">
                    </div>
                </div>
                <input type="hidden" class="editar_id_producto" name="editar_id_producto" value=""> 
                <?php
                 $editar = new ProductosControlador();
                 $editar->ctrEditarProducto();  
                ?> 
                <div class="block-content block-content-full text-end bg-body">
                    <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-sm btn-primary" >Guardar</button> 
                </div>   
            </form> 
        </div>
    </div>
</div> 



<div class="modal" id="detalle-Producto" tabindex="-1" role="dialog" aria-labelledby="modal-default-extra-large" aria-hidden="true">
    <div class="modal-dialog modal-xl"> 
        <div class="modal-content">      
            <div class="block block-rounded block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Detalles Producto</h3>  
                    <div class="block-options">
                    <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa fa-fw fa-times"></i>
                    </button>
                    </div>
                </div>   
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5">
                        <h5>Nombre: <span class="nombre_producto"></span></h5>
                        <p>Precio: $<span class="precio_producto"></span></p>
                        <p>Descripción: <span class="descripcion_producto"></span></p>
                        <p>Categoría: <span class="categoria_producto"></span></p> 
                        <p>Marca: <span class="marca_producto"></span></p>
                        <p>Estado: <span class="estado_producto"></span></p>
                    </div>
                    <div class="col-md-7 ">
                        <img src="" alt="Imagen del Producto" class="previsualizarImagen">
                    </div>
                </div> 
                
            </div>
            <div class="block-content block-content-full text-end bg-body">
                <button type="button" class="btn btn-sm bg-xinspire-op" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div> 
    </div>
</div> 

<?php
$eliminar = new ProductosControlador();
$eliminar->ctrEliminarProducto();
?> 




          <!-- Dynamic Table Responsive -->