<?php
require_once "conexion.php";

class ModeloProductos{

/*=============================================
MOSTRAR EL TOTAL DE USUARIOS
=============================================*/	

static public function mdlMostrarProcutos($tabla, $orden){

    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY NombProd ASC");

    $stmt -> execute();

    return $stmt -> fetchAll();

   

    $stmt = null;

}

static public function mdlIngresarProducto($tabla, $datos){

    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(NombProd, Referencia, Precio, Peso, Categoria, Stock,FechCrea) VALUES (:NombProd, :Referencia, :Precio, :Peso, :Categoria, :Stock,:FechCrea)");

    $stmt->bindParam(":NombProd", $datos["NombProd"], PDO::PARAM_STR);
    $stmt->bindParam(":Referencia", $datos["Referencia"], PDO::PARAM_STR);
    $stmt->bindParam(":Precio", $datos["Precio"], PDO::PARAM_STR);
    $stmt->bindParam(":Peso", $datos["Peso"], PDO::PARAM_STR);
    $stmt->bindParam(":Categoria", $datos["Categoria"], PDO::PARAM_STR);
    $stmt->bindParam(":Stock", $datos["Stock"], PDO::PARAM_INT);
    $stmt->bindParam(":FechCrea", $datos["FechCrea"], PDO::PARAM_STR);
    
    

    if($stmt->execute()){

        return "ok";

    }else{

        return "error";
    
    }

   
    $stmt = null;

}

static public function mdlVenderProductos($tabla, $datos){

    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(NombProd, Precio, CantComp,Total) VALUES (:NombProd, :Precio, :CantComp,:Total)");

    $stmt->bindParam(":NombProd", $datos["NombProd"], PDO::PARAM_STR);
    $stmt->bindParam(":Precio", $datos["Precio"], PDO::PARAM_STR);
    $stmt->bindParam(":CantComp", $datos["CantComp"], PDO::PARAM_STR);
    $stmt->bindParam(":Total", $datos["Total"], PDO::PARAM_STR);
 
    

    if($stmt->execute()){

        return "ok";

    }else{

        return "error";
    
    }

   
    $stmt = null;

}


static public function mostrarproducto($tabla,$id){

    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla where ID=$id");

    $stmt -> execute();

    return $stmt -> fetch();

   

    $stmt = null;
}



static public function mdlEditarProducto($tabla, $datos){
    $id =$datos['ID'];
   
    $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET NombProd = :NombProd, Referencia = :Referencia, Precio = :Precio, Peso = :Peso, Categoria = :Categoria, Stock = :Stock  WHERE ID = $id");
    $stmt->bindParam(":NombProd", $datos["NombProd"], PDO::PARAM_STR);
    $stmt->bindParam(":Referencia", $datos["Referencia"], PDO::PARAM_STR);
    $stmt->bindParam(":Precio", $datos["Precio"], PDO::PARAM_STR);
    $stmt->bindParam(":Peso", $datos["Peso"], PDO::PARAM_STR);
    $stmt->bindParam(":Categoria", $datos["Categoria"], PDO::PARAM_STR);
    $stmt->bindParam(":Stock", $datos["Stock"], PDO::PARAM_STR);
  
   
    if($stmt->execute()){

        return "ok";

    }else{

        return "error";
    
    }

   
    $stmt = null;

  
    

}


static public function mdlActualizarStock($tabla, $datos){
    $id =$datos['ID'];
   
    $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET Stock = :Stock  WHERE ID = $id");
    
    $stmt->bindParam(":Stock", $datos["Stock"], PDO::PARAM_STR);
  
   
    if($stmt->execute()){

        return "ok";

    }else{

        return "error";
    
    }

   
    $stmt = null;

  
    

}



static public function mdlEliminarProducto($tabla, $datos){

    $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

    $stmt -> bindParam(":id", $datos, PDO::PARAM_INT);

    if($stmt -> execute()){

        return "ok";
    
    }else{

        return "error";	

    }

   

    $stmt = null;

}

}