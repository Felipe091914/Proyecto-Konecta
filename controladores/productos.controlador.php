<?php

class ControladorProductos{

	/*=============================================
	MOSTRAR TOTAL PRODUCTOS
	=============================================*/

	static public function ctrMostrarTotalProductos($orden){

		$tabla = "productos";

		$respuesta = ModeloProductos::mdlMostrarProcutos($tabla, $orden);

		return $respuesta;

	}


	


		static public function ctrEditarProductos(){

			//agregar al formulario
		/*	$editarPerfil = new ControladorProductos();
		$editarPerfil -> ctrEditarProductos(); 
*/
			if(isset($_POST["Nombre"])){
	
				$datos = array( "id"=>$_POST["idProducto"], "nombre" => $_POST["referencia"],
								   "referencia" => $_POST["referencia"],
								   "precio" =>  $_POST["precio"],
								   "peso" => $_POST["peso"],			       
								   "categoria"=>$_POST["categoria"],	
								   "stock"=>$_POST["stock"],
								   "FechCrea"=>$_POST["FechCrea"]);
	
				$respuesta = ModeloProductos::mdlIngresarProducto("productos", $datos);
	
					return $respuesta;
	
			}
	}


}