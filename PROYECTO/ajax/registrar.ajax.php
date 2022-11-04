<?php

require_once "../modelos/productos.modelo.php";


 
 class registrar {

    static public function ctrcrearProductos(){

		//agregar al formulario
	/*	$crearPerfil = new ControladorProductos();
		$crearPerfil -> ctrcrearProductos();*/
		if(isset($_POST["NombProd"])){

			$datos = array("NombProd" => $_POST["NombProd"],
					           "Referencia" => $_POST["Referencia"],
					           "Precio" =>  $_POST["Precio"],
					           "Peso" => $_POST["Peso"],			       
					           "Categoria"=>$_POST["Categoria"],	
					           "Stock"=>$_POST["Stock"],
                               "FechCrea"=>$_POST["FechCrea"]
                            );

			$respuesta = ModeloProductos::mdlIngresarProducto("productos", $datos);

         echo $respuesta;

		}

	}


    static public function CtrActualizar(){

		//agregar al formulario
	/*	$crearPerfil = new ControladorProductos();
		$crearPerfil -> ctrcrearProductos();*/
		if(isset($_POST["ID"])){

			$datos = array("ID" => $_POST["ID"],
                                "NombProd" => $_POST["NombProd"],
					           "Referencia" => $_POST["Referencia"],
					           "Precio" =>  $_POST["Precio"],
					           "Peso" => $_POST["Peso"],			       
					           "Categoria"=>$_POST["Categoria"],	
					           "Stock"=>$_POST["Stock"],
                               "FechCrea"=>$_POST["FechCrea"]
                            );

			$respuesta = ModeloProductos::mdlEditarProducto("productos", $datos);

         echo $respuesta;

		}

	}
 }

 if($_POST["ID"] ==""){

	$mostrar = new registrar();
	
	$mostrar -> ctrcrearProductos();

}else{
   
	$mostrar = new registrar();
	
	$mostrar -> CtrActualizar();
}

