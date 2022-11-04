
let NombProd = document.getElementById("NombProd");
let Referencia = document.getElementById("Referencia");
let Precio = document.getElementById("Precio");
let Peso = document.getElementById("Peso");
let Categoria = document.getElementById("Categoria");
let Stock = document.getElementById("Stock");
let FechCrea = document.getElementById("FechCrea");
let ID = document.getElementById("ID");
let CantComp = document.getElementById("CantComp");
let Total = document.getElementById("Total");
function editar(producto) {
  console.log("asa"+producto.value);
    let datos = {"ID":producto.value}
    $.ajax({
        type: 'POST',
        url: 'ajax/editar.ajax.php',
        data: datos,
      success: function(resp) {
       let json = JSON.parse(resp);
       ID.value= json["ID"];
       NombProd.value= json["NombProd"];
       Referencia.value= json["Referencia"];
       Peso.value= json["Peso"];
       Precio.value= json["Precio"];
       Categoria.value= json["Categoria"];
       Stock.value= json["Stock"];
       FechCrea.value = json["FechCrea"];
       let desab = true;
       deshabilitar(desab)
      
      }
    });
}


function listarproductosventa(producto) {
 
    let datos = {"ID":producto.value}
    $.ajax({
        type: 'POST',
        url: 'ajax/editar.ajax.php',
        data: datos,
      success: function(resp) {
       let json = JSON.parse(resp);
       ID.value= json["ID"];
       NombProd.value= json["NombProd"];
       Precio.value= json["Precio"];
       Stock.value= json["Stock"];
      }
    });
}

function Guardar(){

 let formdata = new FormData(document.getElementById("addProducto"));


 $.ajax({
  type: 'POST',
  url: 'ajax/registrar.ajax.php',
  data: formdata,
  dataType:"HTML",
  cache:false,
  contentType:false,
  processData:false,
 
success: function(resp) {
if (resp = "ok") {

window.location.reload();
  
}
}

});

}




function DELETE(){

  let formdata = new FormData(document.getElementById("addProducto"));
 
 
  $.ajax({
   type: 'POST',
   url: 'ajax/eliminar.ajax.php',
   data: formdata,
   dataType:"HTML",
   cache:false,
   contentType:false,
   processData:false,
  
 success: function(resp) {
 if (resp = "ok") {
 
 window.location.reload();
   
 }
 }
 
 });
 
 }

function deshabilitar(desab) {


  document.getElementById("NombProd").disabled=desab,
  document.getElementById("Referencia").disabled=desab,
  document.getElementById("Peso").disabled=desab,
  document.getElementById("Precio").disabled=desab,
  document.getElementById("Categoria").disabled=desab,
  document.getElementById("Stock").disabled=desab,
  document.getElementById("FechCrea").disabled=desab
  
}

function Nuevo(){

document.getElementById("NombProd").value="",
document.getElementById("Referencia").value="",
document.getElementById("Peso").value="",
document.getElementById("Precio").value="",
document.getElementById("Categoria").value="",
document.getElementById("Stock").value="",
document.getElementById("FechCrea").value=""

let desab = false;
deshabilitar(desab)

}

function calcular() {

let total = CantComp.value * Precio.value;

Total.value = total;
if(parseInt (CantComp.value)>parseInt(Stock.value)){

  alert("el stock es menor a la cantidad que deseaa vender")
  document.getElementById("vender").disabled=true;
  document.getElementById("CantComp").value="",
  document.getElementById("Total").value=""
}else{
  document.getElementById("vender").disabled=false;
}
  
}

function Vender(){
 
  let formdata = new FormData(document.getElementById("venderProducto"));


  $.ajax({
   type: 'POST',
   url: 'ajax/venta.ajax.php',
   data: formdata,
   dataType:"HTML",
   cache:false,
   contentType:false,
   processData:false,
  
 success: function(resp) {
  console.log(resp);
 if (resp = "ok") {
 
 window.location.reload();
   
 }
 }
 
 });

}
