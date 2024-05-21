<?php

require_once '../controladores/productos.controlador.php';
require_once '../modelos/productos.modelo.php';
require_once '../controladores/categorias.controlador.php';
require_once '../Modelos/categorias.modelo.php';
require_once "../controladores/marcas.controlador.php";
require_once "../modelos/funciones.php"; 


class AjaxCategorias
{

    /*=============================================
    TRAER Categorias
    =============================================*/

    public $id_categoria; 

    public function ajaxTraerCategoria()
    {

        $item  = "id_categoria";
        $valor = $this->id_categoria; 

        $respuesta = CategoriasControlador::ctrMostrarCategorias($item, $valor);

        echo json_encode($respuesta);
    }
}

if (isset($_POST["id_categoria"]))
{

    $traerCategoria             = new AjaxCategorias(); 
    $traerCategoria->id_categoria = $_POST["id_categoria"];
    $traerCategoria->ajaxTraerCategoria(); 
}