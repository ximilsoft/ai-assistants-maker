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
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="../../index.php">Home</a>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="index.php">View</a>
            <a class="nav-item nav-link active" href="#">Expand</a>
        </div>
    </div>
</nav>
<header class="py-3 mb-4 border-bottom">
    <div class="container d-flex flex-wrap justify-content-center">
        <a href="#" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
            <span class="fs-4"><?php echo ucwords($role); ?></span>
        </a>
    </div>
</header>
<div class="container">
    <div class="row g-5 mb-5">
        <?php include_once "../../app/expand_autoload.php"; ?>
    </div>
</div>
</body>
</html>