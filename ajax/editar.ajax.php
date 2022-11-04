<?php
require_once "../modelos/productos.modelo.php";
class  editarproductos{

   
    static public function mostrar(){
        $id = $_POST["ID"];
        $tabla = "productos";
        $respuesta = ModeloProductos::mostrarproducto($tabla,$id);
   echo json_encode($respuesta) ;

    }
}

if(isset($_POST["ID"])){

	$mostrar = new editarproductos();
	
	$mostrar -> mostrar();

}