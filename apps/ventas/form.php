
<!doctype html>
<html lang="en">

<?php

error_reporting(E_ALL);
ini_set('display_errors', '1'); 
include_once('../../layouts/head.php');
?>

<body>

  <!-- Sidebar -->
  <div class="sidebar">

    <!-- Sidebar header -->
    <div class="sidebar-header">
      <a href="index.html" class="logo">
        <img src="../../../dist/img/logo-white.svg" alt="Logo" id="main-logo">
        Mimity Admin
      </a>
      <a href="#" class="nav-link nav-icon rounded-circle ml-auto" data-toggle="sidebar">
        <i class="material-icons">close</i>
      </a> </div>
    <!-- /Sidebar header -->

    <!-- Sidebar body -->
     <?php include_once('../../layouts/menu.php'); ?>
    <!-- /Sidebar body -->

  </div>
  <!-- /Sidebar -->

  <!-- Main -->
  <div class="main">

    <!-- Main header -->
    <?php include('../../layouts/main_header.php'); ?>
    <!-- /Main header -->

    <!-- contenido -->
    <div class="main-body">
      <?php include('../../layouts/message.php'); ?>

      <div class="row gutters-sm">

        <!-- Monthly Sales -->
        <div class="col-xl-12 mb-3">
          <div class="card h-100">
            <div class="col">

                <section id="section1">
                <h5>Realizar Venta </h5>

                <div class="card">
                        <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>2020/02/20</span>
                        </div>
                        <hr>
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
                        <div class="col-sm-6 mb-3">
                            <div class="list-with-gap">
                                <!-- control -->
                                    <div class="floating-label input-icon input-icon-right">
                                        <i onclick="abrirListaProductos();" data-feather="search"></i>
                                        <input type="text" class="form-control" id="floatingSearch" placeholder="Código del articulo">
                                        <label for="floatingSearch">Codigo del articulo</label>
                                    </div>
                                <!-- control -->
                            </div>
                        </div>

                        </div>
                        <div class="table-responsive my-3">
                            <table  id="id_detalle_venta"  class="table table-striped table-sm">
                            <thead>
                                <tr>
                                <th class="text-center">Código</th>
                                <th>Producto</th>
                                <th>Cantidad</th>
                                <th class="">Subtotal</th>
                                <th class="text-right">Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr >
                                  
                                </tr>
                            </tbody>
                            </table>
                        </div>
                        <div class="row row-cols-2">
                            <div class="col">
                            <p class="lead">Totales</p>
                            <div class="table-responsive">
                                <table class="table table-sm">
                                <tbody>
                                    <tr>
                                    <th class="w-50">Total:</th>
                                    <td id="id_total">$0.0</td>
                                    </tr>
                                    <tr>
                                    <th>Pago</th>
                                    <td><input id="id_pago" type="number" class="form-control"></td>
                                    </tr>
                                    <tr>
                                    <th>Vuelto:</th>
                                    <td id="id_vuelto">$0.0</td>
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                        <div class="d-flex flex-column flex-sm-row mt-3">
                           
                            <button class="btn btn-success has-icon ml-sm-1 mt-1 mt-sm-0" type="button">
                            <i class="mr-2" data-feather="printer"></i>Guardar
                            </button>
                        </div>
                        </div>
                </div>


                </section>

            </div>
          </div>
        </div>
        <!-- /Monthly Sales -->
      </div>
    </div>
    <!-- /contenido -->


            <!-- Modal lista de productos -->
            <div class="modal fade" id="id_lista_productos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Lista de productos</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <table class="table table-striped table-sm" id="id_tabla_productos">
                            <thead>
                                <tr>
                                <th class="text-center">Código</th>
                                <th>Producto</th>
                                <th>precio</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr >
                                   
                                </tr>
                            </tbody>
                            </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                    </div>
                </div>
            </div>
             <!-- Modal lista de productos -->

  </div>
  <!-- /Main -->

  <?php 
    include_once('../../layouts/file_js.php');
  ?>

<script>

/*------------------

variables globales
-------------------*/
var total = 0.0;
var vuelto = 0.0;

/*--------------
    funcion para cargar modal de productos
--------------*/
$.ajax({
    type: 'GET',
    url : '../productos/helpers.php',
    data: {},
    success: function(data){
        var datos = JSON.parse(data);
        //console.table(datos);
        for (var x=0; x < datos.length; x++){
            console.log(datos[x]);
            $('#id_tabla_productos tr:last').after('<tr onclick="setCantidadProducto(' + datos[x].id + ",'"  + datos[x].nombre  + "',"  + datos[x].precio_venta + ')"><td >' + datos[x].id + '</td><td>' + datos[x].nombre + '</td><td>' + datos[x].precio_venta + '</td></tr>')
        }
    }
})

function setCantidadProducto(id, nombre, precio){
    /*
      cargar detalle de venta
    */
    let cantidad = prompt('Ingrese la cantidad')
    let subtotal = calcularSubtotal(cantidad, precio);
    $('#id_detalle_venta tr:last').after('<tr><td >' + id + '</td><td>' + nombre + '</td><td>' + cantidad + '</td><td>$' + subtotal + '</td> <td class="text-right"> <i class="mr-2" data-feather="trash"></i></td></tr>')
}

/*--------------
    funcion para cargar modal de productos
--------------*/

/*-----------------
    funciones de calculo
-------------------*/
function calcularSubtotal(cantidad, precio){
    let resultado = parseFloat(cantidad) * parseFloat(precio);
    total += resultado; //acumula cantidad
    $('#id_total').text('$' + total);
    return resultado;
}

$('#id_pago').on('keypress',function(e) {
    if(e.which == 13) {
        calcularVuelto();
    }
});

function calcularVuelto(){
    let valor_pago= $('#id_pago').val();
    let resultado =  valor_pago - total;
    $('#id_vuelto').text('$' + resultado);
}

/*------------------
    funciones de calculo
-------------------*/

function abrirListaProductos(){
    $('#id_lista_productos').modal('show');
}

</script>

</body>


</html>