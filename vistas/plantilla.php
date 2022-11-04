<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="vistas/css/plantilla.css">
<link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <title>Proyecto Konecta</title>
</head>

<body>
   <div>

<?php  



if(isset($_GET["ruta"])){
    if($_GET["ruta"] == "venta"){

        include  "modulos/venta.php";
  
    }
}else{
    include "modulos/formulario.php";
       
}
?>
  

  <script LANGUAGE="JavaScript" src="vistas/js/plantilla.js"></script>
  </div>
</body>
</html>