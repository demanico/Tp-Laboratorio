<?php

class CategoriasControlador
{
    

    static public function ctrMostrarCategorias($item, $valor)
    {
        $tabla = "categorias";
        $respuesta = CategoriasModelo::mdlMostrarCategorias($tabla, $item, $valor);

        return $respuesta;
    }


    static public function ctrObtenerNombreCategoria($categoria_producto)
    {
        try {
            $stmt = Conexion::conectar()->prepare("SELECT nombre_categoria FROM categorias WHERE id_categoria = :id_categoria");
            $stmt->bindParam(":id_categoria", $categoria_producto, PDO::PARAM_INT); 
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC)["nombre_categoria"]; 
        } catch (Exception $e) {
            return "Error: " . $e->getMessage();
        }
    }

    public function ctrAgregarCategoria()
    {
        if (isset($_POST["nombre_categoria"])) {

            $tabla = "categorias";

            
                                                       
            $datos = array(
                "nombre_categoria" => $_POST["nombre_categoria"],
            );

            //print_r($datos);

            //return;

            //podemos volver a la página de datos
            $url = PlantillaControlador::url() . "categorias";

            $respuesta = CategoriasModelo::mdlAgregarCategoria($tabla, $datos);

            if ($respuesta == "ok") {
                echo '<script>
                    fncSweetAlert("success","La categoria se agregó correctamente", "' . $url . '"
                    );
                    </script>';
            }
        }
    }
    static public function ctrEliminarCategoria()
    {
        $url = PlantillaControlador::url() . "categorias";
        
    
        if (isset($_GET["idCategoriaEliminar"])) {
            
            $tabla = "categorias";
            $dato = $_GET["idCategoriaEliminar"];
            $respuesta = CategoriasModelo::mdlEliminarCategoria($tabla, $dato);
                if ($respuesta == "ok") {
                    echo '<script>
                    fncSweetAlert("success", "La categoria se eliminó correctamente", "' . $url . '");
                     </script>';
                }
            
        }
    }

    static public function ctrEditarCategoria() 
    {
        if(isset($_POST["editar_nombre_categoria"]))
        {

            $categoria = CategoriasControlador::ctrMostrarCategorias("id_categoria", $_POST["editar_id_categoria"]); 

            $datos = array(
                "nombre_categoria" => $_POST["editar_nombre_categoria"],
                "id_categoria" => $_POST["editar_id_categoria"] 
            );

            $tabla = "categorias"; 

            $url = PlantillaControlador::url() . "categorias"; 
            
            $respuesta = CategoriasModelo::mdlEditarCategoria($tabla, $datos); 

            if ($respuesta == "ok") {
                echo '<script>
                    fncSweetAlert("success","La categoria se modificó correctamente", "' . $url . '"
                    );
                    </script>';
            } else {
                echo '<script>
                    fncSweetAlert("error","Error al modificar la categoria", "")
                    </script>';
            }
        }
    }

} 
