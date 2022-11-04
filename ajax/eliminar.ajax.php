<?php
require_once "../modelos/productos.modelo.php";

class Eliminarproductos{
static public function Eliminar(){
    $id = $_POST["ID"];
    $tabla = "productos";
    $respuesta = ModeloProductos::mdlEliminarProducto($tabla,$id);
    echo $respuesta ;
}
}

if(isset($_POST["ID"])){

	$mostrar = new Eliminarproductos();
	
	$mostrar -> Eliminar();

}

?>