<!doctype html>
<html lang="en">

<?php
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

  <!-- Plugins -->
  <script src="../../static/plugins/chart.js/Chart.min.js"></script>
  <script src="../../static/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
  <script src="../../static/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="../../static/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <script>
  
    $(() => {
      function run_sparkline() {
        $('.sparkline-data').text('').sparkline('html', {
          width: '100%',
          height: 20,
          lineColor: gray,
          fillColor: false,
          tagValuesAttribute: 'data-value'
        })
      }
      // Run sparkline on document view (window) resized
      App.resize(() => {
        run_sparkline()
      })()
      // Run sparkline on sidebar updated (toggle collapse)
      document.addEventListener('sidebar:update', () => {
        run_sparkline()
      })

      // Chart options
      const options = {
        maintainAspectRatio: false, // disable the maintain aspect ratio in options then it uses the available height
        tooltips: {
          mode: 'index',
          intersect: false, // Interactions configuration: https://www.chartjs.org/docs/latest/general/interactions/
        },
        elements: {
          rectangle: {
            borderWidth: 1 // bar border width
          },
          line: {
            borderWidth: 1 // label border width
          }
        }
      }

      // Monthly Sales
      new Chart('monthlySalesChart', {
        type: 'line',
        data: {
          labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
          datasets: [{
              label: 'Last year',
              backgroundColor: Chart.helpers.color(gray).alpha(0.1).rgbString(),
              borderColor: gray,
              fill: 'start',
              data: [65, 59, 80, 81, 56, 55, 40]
            },
            {
              label: 'This year',
              backgroundColor: Chart.helpers.color(blue).alpha(0.1).rgbString(),
              borderColor: blue,
              fill: 'start',
              data: [28, 48, 40, 19, 86, 27, 90]
            }
          ]
        },
        options: options
      })

      // Sales Revenue Map
      $('#vmap').vectorMap({
        map: 'usa_en',
        showTooltip: true,
        backgroundColor: '#fff',
        color: '#d1e6fa',
        colors: {
          fl: blue,
          ca: blue,
          tx: blue,
          wy: blue,
          ny: blue
        },
        selectedColor: '#00cccc',
        enableZoom: false,
        borderWidth: 1,
        borderColor: '#fff',
        hoverOpacity: .85
      })

      // Today Sales
      options.scales = {
        xAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
      new Chart('barChart2', {
        type: 'horizontalBar',
        data: {
          labels: ['6am', '10am', '1pm', '4pm', '7pm', '10pm'],
          datasets: [{
              label: 'Today',
              backgroundColor: Chart.helpers.color(cyan).alpha(0.3).rgbString(),
              borderColor: cyan,
              data: [20, 60, 50, 45, 50, 60]
            },
            {
              label: 'Yesterday',
              backgroundColor: Chart.helpers.color(yellow).alpha(0.3).rgbString(),
              borderColor: yellow,
              data: [10, 40, 30, 40, 55, 25]
            }
          ]
        },
        options: options
      })

      // Reload card event
      document.querySelector('#transaction-history').addEventListener('card:reload', function() {
        var thisCard = this
        // reload transaction history...
        setTimeout(() => { // do nothing for a second (this is only for demo)
          App.stopCardLoader(thisCard) // when done, run this function
        }, 1000)
      })
      document.querySelector('#new-customers').addEventListener('card:reload', function() {
        var thisCard = this
        // reload new customers..
        setTimeout(() => { // do nothing for a second (this is only for demo)
          App.stopCardLoader(thisCard) // when done, run this function
        }, 1000)
      })
      document.querySelector('#today-sales').addEventListener('card:reload', function() {
        var thisCard = this
        // reload today sales..
        setTimeout(() => { // do nothing for a second (this is only for demo)
          App.stopCardLoader(thisCard) // when done, run this function
        }, 1000)
      })
    })
  </script>

</body>

</html>