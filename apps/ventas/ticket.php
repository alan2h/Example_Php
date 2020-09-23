
<style>
    .shape{
    	border-style: solid; border-width: 0 70px 40px 0; float:right; height: 0px; width: 0px;
    	-ms-transform:rotate(360deg); /* IE 9 */
    	-o-transform: rotate(360deg);  /* Opera 10.5 */
    	-webkit-transform:rotate(360deg); /* Safari and Chrome */
    	transform:rotate(360deg);
    }

    .shape-text{
        color:#fff; font-size:12px; font-weight:bold; position:relative; right:-40px; top:2px; white-space: nowrap;
    	-ms-transform:rotate(30deg); /* IE 9 */
    	-o-transform: rotate(360deg);  /* Opera 10.5 */
    	-webkit-transform:rotate(30deg); /* Safari and Chrome */
    	transform:rotate(30deg);
    }

    .project {
        min-height:300px;
        height:auto;
    }

    .project{
        background:#fff; border:1px solid #ddd; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); margin: 15px 0; overflow:hidden;
    }

    .project-radius{
        border-radius:7px;
    }

    .project-default {    border-color: #999999; }
    .project-default .shape{
    	border-color: transparent #999999 transparent transparent;
    	border-color: rgba(255,255,255,0) #999999 rgba(255,255,255,0) rgba(255,255,255,0);
    }

    .project-content {
        padding:0 20px 10px;
    }
    .izquierda{
      float:right;
    }
    .centro{
        text-align: center;
    }
    .derecha{
       text-align: left;
    }
</style>


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

      <div class="row gutters-sm">

        <!-- Monthly Sales -->
                <div class="card">
                        <div class="card-body">
                                    <!-- ticket print -->
                                        <hr>
                                            <div class="container" id='printarea'>
                                                <div class="row">
                                                    <div class="col-xs-3">
                                                        <div class="project project-default">
                                                            <div class="project-content">
                                                                    ...........................................
                                                                    <br>
                                                                    <div class="derecha"><p>Razon social</p></div>
                                                                    <div class="derecha"><p>Formosa - Capital - CP:3600</p></div>
                                                                    <div class="derecha"><p>Dirección: --</p></div>
                                                                    <div class="derecha"><p>fecha</p></div>
                                                                    <br>

                                                                        <div class="izquierda">
                                                                            <small>cantidad
                                                                                descripcion
                                                                                ........
                                                                                u/$ precio
                                                                            </small>
                                                                        </div>
                                                                        <br>

                                                                    <br>
                                                                    <br>
                                                                    <div class="izquierda">
                                                                        <h4>Total: $ total</h4>
                                                                    </div>
                                                                    <br>
                                                                    ...........................................
                                                                    <br>

                                                                <p>Ticket no válido como factura</p>
                                                            </div>
                                                        </div>
                                                        <a class="btn btn-primary" href="/example_template/apps/ventas/form.php" type="reset"><i class="fa fa-arrow-left"></i></a>
                                                        <button type="button" onclick="imprimir()"  class="btn btn-success"><i class="fa fa-print"></i></button>
                                                    </div>

                                                </div>
                                            </div><!--/container -->
                                    <!-- ticket print -->
                            </div>
                        </div>
                    </div>
                </div>
            <!-- /Monthly Sales -->
        </div>
    </div>
    <!-- /contenido -->

  </div>
  <!-- /Main -->

  <?php 
    include_once('../../layouts/file_js.php');
  ?>

<script type="application/javascript">
    var imprimir = function(){
        var divToPrint=document.getElementById('printarea');
         var newWin=window.open('','Print-Window');
         newWin.document.open();
         newWin.document.write('<html><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');
         newWin.document.close();
         setTimeout(function(){newWin.close();},10);
    }
</script>
