<section class="form-register">
<h4>Venta de Productos </h4>

<?php include "listarProducVen.php";?>

<form method="post" id="venderProducto" action="">
    <input class="controls" type="text" name="NombProd" id="NombProd" placeholder="Nombre de producto:">
    <input class="controls" type="text" name="Precio" id="Precio" placeholder="Precio:">
    <input class="controls" type="text" name="CantComp" id="CantComp" placeholder="CantComp  a comprar:" onkeyup="calcular()">
    <input class="controls" type="text" Id="Total" name="Total" placeholder="Total" >
    <input type="hidden" id="ID" name="ID">
    <input type="hidden" id="Stock" name="Stock">
    
</form>
<table align="center">  
    <td>
        
        <button class="botons" id="vender" type="submit" onclick="Vender()">vender</button>
    </td>
    
</Table>

  </section>