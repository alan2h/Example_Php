
<!doctype html>
<html lang="en">

<?php

error_reporting(E_ALL);
ini_set('display_errors', '1'); 
include_once('../../layouts/head.php');
?>
<link rel="stylesheet" href="../../static/full_calendar/main.css" >

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

      <div id='calendar'></div> <!-- calendario -->

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

<script src="../../static/full_calendar/main.js" ></script>
<script src="../../static/full_calendar/locales-all.js" ></script>
<script>

document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      locale: 'es',
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
      },
      initialDate: '2020-09-12',
      navLinks: true, // can click day/week names to navigate views
      businessHours: true, // display business hours
      editable: true,
      selectable: true,
      events: '/example_template/apps/turnos/helpers.php',

      eventClick: function(info) {
        alert('Event: ' + info.event.title);
        alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
        alert('View: ' + info.view.type);

        // change the border color just for fun
        info.el.style.borderColor = 'red';
      }



    });

    calendar.render();
  });

</script>

</body>


</html>