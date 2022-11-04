<section class="form-register">
<h4>Inventario de Productos </h4>

    <tr>
        <td>
            <button class="botons" onclick="Nuevo()">Nuevo</a></button>
        </td>
    </tr><br>
    <?php include "vistas/modulos/listar.php";?>

<form method="post" id="addProducto" action="">
    
    
    <td>Nombre del producto: <input class="controls" type="text" name="NombProd" id="NombProd" placeholder="Nombre de producto:"disabled></td>
    <td>Referencia: <input class="controls" type="text" name="Referencia" id="Referencia" placeholder="Referencia:"disabled></td>
    <td>Precio:<input class="controls" type="text" name="Precio" id="Precio" placeholder="Precio:" disabled></td>
    <td>Peso:<input class="controls" type="text" name="Peso" id="Peso" placeholder="Peso:" disabled></td>
    <td>Categoria:<input class="controls" type="text" name="Categoria" id="Categoria" placeholder="Categoría:" disabled></td>
    <td>Stock:<input class="controls" type="text" name="Stock" id="Stock" placeholder="Cantidad del producto en bodega:" disabled></td>
    <td>Fecha de creación:<input class="controls" type="date" name="FechCrea" id="FechCrea" placeholder="Fecha de creación:" disabled></td>
    <input type="hidden" id="ID" name="ID">
    </form>
<table align="center">  

    <td>
        <button class="botons" id="Registrar" type="submit" onclick="Guardar()">Guardar</button>
    </td>
    <td>
        
        <button class="botons" type="submit" onclick="deshabilitar(false)">Modificar</button>
    </td>
   
    <td>
        <button  class="botons" type="submit" onclick="DELETE()" >Eliminar</button>
    </td>

</Table>
   <td>
        <a  class="botons"  href="index.php?ruta=venta" >Vender Producto</a>

    </td>      
  </section>