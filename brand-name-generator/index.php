<?php include_once "conf.php"; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo ucwords($role); ?></title>
    <link rel="icon" type="image/png" href="../assets/favicon.ico">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/custom.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="../index.php">Home</a>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="index.php">View</a>
          <a class="nav-item nav-link" href="expand">Expand view</a>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="row align-items-center min-vh-100">
        <div class="col-lg-11 mx-auto">
          <div class="card shadow border">
            <div class="card-header"><?php echo ucwords($role); ?></div>
            <div class="card-body d-flex flex-column align-items-center">
              <!-- Replace the textarea with preformatted code block -->
              <pre id="codeBlock"><?php include_once "autoload.php"; ?></pre>
            </div>
            <div class="card-footer text-muted text-center">
              <a href="expand">Expand view</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Include select.js script -->
    <script src="../assets/js/select.js"></script>
  </body>
</html>