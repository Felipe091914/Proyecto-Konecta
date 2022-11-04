<label>Lista de Productos:</label><br>

<?php 
$orden ="ID";
$productos = ControladorProductos::ctrMostrarTotalProductos($orden); ?>

<select class="select" onchange="listarproductosventa(this)">
<?php 

foreach ($productos as $key => $value) {

    echo '<option value="'.$value["ID"].'" selected>'.$value["NombProd"].'</option>';
}
?>
</select>