<?php
require_once '../controladores/productos.controlador.php';
require_once '../modelos/productos.modelo.php';
require_once '../controladores/categorias.controlador.php';
require_once "../controladores/marcas.controlador.php";

class TablaProductos
{
    /*========================
    MOSTRAR TABLA DE PRODUCTOS
    =============================================*/

    public function mostrarTablaProductos()
    {
        $productos = ProductosControlador::ctrMostrarProductos(null, null);

        //print_r(count($productos)); 

        if (count($productos) == 0) { 

            echo '{"data": []}';

            return;
        }

        $datosJson = '{"data" : [';

        for ($i = 0; $i < count($productos); $i++) {
            if ($productos[$i]["estado_producto"] == 2) {
                $estado = "<span class='badge bg-success'>Activo</span>";
            } else {
                $estado = "<span class='badge bg-danger'>Inactivo</span>"; 
            }
               
            $categorias= CategoriasControlador::ctrobtenerNombreCategoria($productos[$i]["categoria_producto"]);

            $marcas= MarcasControlador::ctrObtenerNombreMarcas($productos[$i]["marca_producto"]); 


            //Traemos las acciones
            $acciones = "<button type='button' class='btn btn-info btnVerDetalleProducto' data-bs-toggle='modal' data-bs-target='#detalle-Producto' data-id-producto='" . $productos[$i]["id_producto"] . "'><i class='fas fa-eye'></i></button> <button type='button' class='btn btn-warning btnBoton' data-bs-toggle='modal' data-bs-target='#editar-producto' tipo='editar' id_producto = '" . $productos[$i]["id_producto"] . "'><i class='fas fa-edit'></i></button> <button type='button' id_producto = '" . $productos[$i]["id_producto"] . "' class='btn btn-danger btnEliminarProducto'><i class='fas fa-trash'></i></button>";

            $datosJson .= '[
                        "' . $productos[$i]["nombre_producto"] . '",
                        "' . $productos[$i]["precio_producto"] . '",
                        "' . $marcas. '",
                        "' . $categorias. '",
                        "' . $estado . '",
                        "' . $acciones . '"
                    ],';
        }
        $datosJson = substr($datosJson, 0, -1);

        $datosJson .= ']
        }';

        echo $datosJson;
    }
}

/*========================

    ACTIVAR TABLA DE PRODUCTOS
    =============================================*/
$activarproductos = new TablaProductos();
$activarproductos->mostrarTablaProductos();
