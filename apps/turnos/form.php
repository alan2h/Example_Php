<!doctype html>
<html lang="en">

<?php

error_reporting(E_ALL);
ini_set('display_errors', '1'); 
include_once('../../layouts/head.php');
?>
<link rel="stylesheet" href="../../static/full_calendar/main.css" >
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<link href="../../static/clock/clock/dist/bootstrap-clockpicker.min.css" rel="stylesheet" type="text/css" />

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
    <div class="col-xl-12 mb-3" id="app">
        <div class="card h-100">
            <div class="col">
                <section id="section1">
                    <h5>Dar un turno</h5>

                        <form>

                            <div class="form-group">
                                <label for="shippingFirstName">Clientes</label>
                                <select id="id_cliente" class="form-control">
                                    <option value=""> --- </option>
                                    <option value="1"> Beck, erik </option>
                                    <option value="2"> Beck, Rene </option>
                                    <option value="3"> Beck, Alan </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="shippingFirstName">Fecha</label>
                                <input id="id_fecha" v-model="mensaje" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="shippingFirstName">Hora</label>
                                <input id="id_hora" class="form-control">
                            </div>

                                <div class="form-group">
                                        <input type="button" onclick="guardar()" class="btn btn-success" value="Guardar">
                                </div>

                            </form>
                </section>
            </div>
        </div>
    </div>
</div>


    </div>
    <!-- /contenido -->


  </div>
  <!-- /Main -->

  <?php 
    include_once('../../layouts/file_js.php');
  ?>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
  <script src="../../static/datepicker/gijgo.min.js" type="text/javascript"></script>
  <script src="../../static/clock/clock/dist/bootstrap-clockpicker.min.js" type="text/javascript"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
 $('#id_cliente').select2();
 $('#id_fecha').datepicker({
    uiLibrary: 'bootstrap4'
});
$('#id_hora').clockpicker({
    donetext: 'Aceptar'
});

function guardar(){
    Swal.fire({
        title: 'Exito',
        text: 'Se guardo con exito',
        icon: 'success',
        confirmButtonText: 'Aceptar'
    })
}


</script>

</body>


</html>