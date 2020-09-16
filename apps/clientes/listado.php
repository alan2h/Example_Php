
<!doctype html>
<html lang="en">

<?php


error_reporting(E_ALL);
ini_set('display_errors', '1'); 

  require_once('clase.php');
  include_once('../../layouts/head.php');
  if (!(isset($_GET['status']))){


    $nro_pagina = 0;
    $cantidad = 0;
    $nro_siguiente = 1;
    $nro_antes = 1;


    if (isset($_GET['nro_pagina'])){
      $nro_pagina = $_GET['nro_pagina'];
      $nro_siguiente = $nro_pagina + 1;
      if ($nro_pagina > 0){
        $nro_antes = $nro_pagina - 1;
      }
      $nro_pagina -=1;
    }
    
    $cliente = new Cliente();
    $result = $cliente->obtenerTodos($nro_pagina);
    $cantidad = $cliente->cantidadRegistros();

    $cantidadPaginas = $cantidad['cantidad'] / 2;
    
    if ($result->num_rows <= 0){
      header('Location: listado.php?message='.'No existen registros'.'&status=info');
      exit();
    }
  }
  
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
  <h5>Lista de clientes </h5>
  
  <div class="card">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido</th>
              <th scope="col">Degree</th>
              <th scope="col">Salary</th>
            </tr>
          </thead>
          <tbody>
          <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
              <th scope="row"><?php echo $row['id']?> </th>
              <td><?php echo $row['nombre'] ?> </td>
             
              <td><?php echo $row['apellido']?> </td>
              <td>Computer Science</td>
              <td class="font-number">$120,000</td>
            </tr>
          <?php }; ?>   
          </tbody>
        </table>
        <label>Cantidad de registros :<?php echo $cantidad['cantidad'] ?></label>
        <nav aria-label="Page navigation example">
        <ul class="pagination">
            <?php if ($nro_antes > 0) { ?>
              <li class="page-item"><a class="page-link" href="?nro_pagina=<?php echo $nro_antes ?>">Ántes</a></li>
            <?php } ?>
          <?php if ($nro_pagina < $cantidadPaginas){ ?>
            <li class="page-item"><a class="page-link" href="?nro_pagina=<?php echo $nro_siguiente ?>">Siguiente</a></li>
          <?php } ?>
        </ul>
      </nav>
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

  </div>
  <!-- /Main -->

  <!-- Search Modal -->
  <div class="modal" id="searchModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body p-1 p-lg-3">
          <form>
            <div class="input-group input-group-lg input-group-search">
              <div class="input-group-prepend">
                <button class="btn text-secondary btn-icon btn-lg" type="button" data-dismiss="modal">
                  <i class="fa fa-chevron-left"></i>
                </button>
              </div>
              <input type="text" class="form-control form-control-lg border-0 mx-1 px-0 px-lg-3" placeholder="Search..." autocomplete="off" required autofocus>
              <div class="input-group-append">
                <button class="btn text-secondary btn-icon btn-lg" type="submit">
                  <i class="fa fa-search"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /Search Modal -->

  <?php 
    include_once('../../layouts/file_js.php');
  ?>


</body>

</html>