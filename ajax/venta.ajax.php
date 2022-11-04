<?php
require_once "../modelos/productos.modelo.php";


class venderProductos{


static public function ventaProduct(){
    $datos = array(
    "ID" => $_POST["ID"],
     "NombProd" => $_POST["NombProd"],
    "Precio" => $_POST["Precio"],
    "CantComp" =>  $_POST["CantComp"],
    "Total" =>  $_POST["Total"],

 );
 
    $tabla = "venta";
    $respuesta = ModeloProductos::mdlVenderProductos($tabla,$datos);
   if($respuesta =="ok"){
    $datos = array(
        "ID" => $_POST["ID"],
         "Stock" =>$_POST["Stock"]-$_POST["CantComp"],
       
    
     );
    $tabla = "productos";
   
    $actualizarStock = ModeloProductos::mdlActualizarStock($tabla,$datos);
    echo $respuesta;
   } 
}
}

if(isset($_POST["ID"])){

	$mostrar = new venderProductos();
	
	$mostrar -> ventaProduct();

}

?>