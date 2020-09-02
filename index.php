
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Font & Icon -->
  <link rel="stylesheet" href="static/font/inter/inter.min.css">
  <link href="static/plugins/material-design-icons-iconfont/material-design-icons.min.css" rel="stylesheet">
  <!-- Plugins -->
  <!-- CSS plugins goes here -->
  <!-- Main Style -->
  <link rel="stylesheet" href="static/plugins/simplebar/simplebar.min.css">
  <link rel="stylesheet" href="static/css/style.min.css" id="main-css">
  <link rel="stylesheet" href="static/css/sidebar-gray.min.css" id="theme-css"> <!-- options: blue,cyan,dark,gray,green,pink,purple,red,royal,ash,crimson,namn,frost -->
  <title>Login</title>
</head>

<body class="login-page">

  <div class="container pt-5">
    <div class="row justify-content-center">
      <div class="col-md-auto d-flex justify-content-center">
        <div class="card shadow">
          <div class="card-header bg-primary text-white flex-column">
            <h4 class="text-center mb-0">Log In</h4>
            <div class="text-center opacity-50 font-italic">to your account</div>
          </div>
          <div class="card-body p-4">

            <form action="apps/auth/modulos/login.php" method="POST">
              <div class="form-group">
                <div class="floating-label input-icon">
                  <i class="material-icons">person_outline</i>
                  <input name="username" type="text" class="form-control" placeholder="Username" id="username" autocomplete="off">
                  <label for="username">Username</label>
                </div>
              </div>
              <div class="form-group">
                <div class="floating-label input-icon">
                  <i class="material-icons">lock_open</i>
                  <input name="password" type="password" class="form-control" placeholder="Password" id="password">
                  <label for="password">Password</label>
                </div>
              </div>
              <div class="form-group d-flex justify-content-between align-items-center">
              
              </div>
              <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
            </form>
            
            <!-- /LOG IN FORM -->

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Plugins -->
  <!-- JS plugins goes here -->

</body>

</html>