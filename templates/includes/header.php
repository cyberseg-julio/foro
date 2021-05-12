<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Bienvenido al Foro Vulnerable del IES Campanillas</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo BASE_URI; ?>templates/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo BASE_URI; ?>templates/css/custom.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="<?php echo BASE_URI; ?>templates/js/bootstrap.js"></script>
    <script src="<?php echo BASE_URI; ?>templates/js/ckeditor/ckeditor.js"></script>
    <?php 
      //Check if title is set, if not Assign it
      if (!isset($title)){
        $title = SITE_TITLE;
      }
      ?>
</head>
  <body>
  <div class="container">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
  <a class="navbar-brand" href="index.php">Foro Ligeramente Vulnerable</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarToggler">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <?php if(!isLoggedIn()) : ?>
<li class="nav-item">
        <a class="nav-link" href="register.php">Crear Cuenta</a>
      </li>
      <?php else : ?>
<li class="nav-item">
        <a class="nav-link" href="create.php">Crear Topic</a>
      </li>
      <?php if(isAdmin()) : ?>
      <li class="nav-item">
        <a class="nav-link" href="admin.php">Administracion</a>
      </li>
		  <?php endif; ?>
      <?php endif; ?>
</ul>
  </div>
  </div>
</nav>
</div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="main-col">
                    <div class="block">
                    <h3 class="pull-left"><?php echo $title; ?></h3>
                    <h4 class="pull-right">Un Motor de Foros Vulnerables</h4>
                        <div class="clearfix"></div>
                        <hr />
                        <?php displayMessage(); ?>