<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'config/config.php';
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'function/db.fn.php';
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'function/onepiece.fn.php';

$db = getPDOlink($config);




?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="apple-touch-icon" sizes="180x180" href="/assets/fav/fav32.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/fav/fav32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/assets/fav/fav32.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>ONE PIECE</title>
</head>

<body class="d-flex flex-column vh-100">
  <nav class="navbar navbar-expand-lg bg-body-tertiary py-2 text-center ">
    <div class="container-fluid navbar-light flex-column text-center ">
      <a class="navbar-brand fs-1 fw-bold" href="/index.php"> ONE PIECE
        <img src="assets/img/chapeaudepaille.png" alt="chapeau de paille" class="h-100 w-25"> </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse w-100" id="navbarNavAltMarkup">
        <div class="navbar-nav justify-content-evenly fs-3 w-100">
          <a class="nav-link fw-bold " href="/crew.php">EQUIPAGE</a>
          <a class="nav-link fw-bold  " aria-current="page" href="/personnage.php">PERSONNAGE</a>
          <a class="nav-link fw-bold " href="/fruits.php">FRUIT DU DEMON</a>
          <a class="nav-link fw-bold disabled" href="/shop.php">SHOP</a>
          <?php
          if (isset($_SESSION['user']['user_role']) && $_SESSION['user']['user_role'] == 1) { ?>
            <a class="nav-link text-warning" href="dashboard.php">DASHBOARD</a>
          <?php }
          ?>
          <!-- <?php //if (isset($_SESSION['user']['user_role']) && $_SESSION['user']['user_role']== 1) { 
                ?>
          <a class="nav-link text-warning" href="dashboard.php">DASHBOARD</a> // }-->
          <?php
          if (isConnected()) { ?>
            <a class="nav-link" href="/logout.php">Se deconnecter</a>
          <?php } else { ?>
            <a class="nav-link" href="/login.php">Se Connecter</a>
          <?php } ?>

        </div>
      </div>
    </div>
  </nav>
  <main class="flex-grow-1">