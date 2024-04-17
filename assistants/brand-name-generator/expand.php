<?php include_once "conf.php"; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo ucwords($role); ?></title>
    <link rel="icon" type="image/png" href="../../assets/favicon.ico">
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/css/custom.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="../../index.php">Home</a>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link" href="index.php">View</a>
          <a class="nav-item nav-link active" href="#">Expand</a>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="row g-5 mt-5 mb-5">
      <?php include_once "../../app/expand_autoload.php"; ?>
      </div>
    </div>
    <!-- Include select.js script -->
    <script src="../../assets/js/select.js"></script>
  </body>
</html>