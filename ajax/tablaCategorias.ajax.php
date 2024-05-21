<?php
require_once '../controladores/productos.controlador.php';
require_once '../modelos/productos.modelo.php';
require_once '../controladores/categorias.controlador.php';
require_once '../Modelos/categorias.modelo.php';
require_once "../controladores/marcas.controlador.php";

class TablaCategorias
{
    /*========================
    MOSTRAR TABLA DE PRODUCTOS
    =============================================*/

    public function mostrarTablaCategorias()
    {
        $categorias = CategoriasControlador::ctrMostrarCategorias(null, null); 

    

        if (count($categorias) == 0) {  

            echo '{"data": []}';

            return;
        }

        $datosJson = '{"data" : [';

        for ($i = 0; $i < count($categorias); $i++) {
            
               
            //Traemos las acciones
            $acciones = "<button type='button' class='btn btn-warning btnBoton' data-bs-toggle='modal' data-bs-target='#editar-categoria' tipo='editar' id_categoria = '" . $categorias[$i]["id_categoria"] . "'><i class='fas fa-edit'></i></button> <button type='button' id_categoria = '" . $categorias[$i]["id_categoria"] . "' class='btn btn-danger btnEliminarCategoria'><i class='fas fa-trash'></i></button>";

            $datosJson .= '[
                        "' . $categorias[$i]["nombre_categoria"] . '",
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
$activarcategorias = new TablaCategorias();
$activarcategorias->mostrarTablaCategorias();


