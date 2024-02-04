<?php
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/function/db.fn.php';
require_once dirname(__DIR__) . '/function/onepiece.fn.php';
$db = getPDOlink($config);

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/fav/fav32.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/fav/fav32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/fav/fav32.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="stylesheet" href="css/style.css">
    <title>ONE PIECE</title>
</head>
<body>   
<nav class="navbar navbar-expand-lg bg-body-tertiary py-2 text-center ">
  <div class="container-fluid navbar-light flex-column text-center ">
    <a class="navbar-brand fs-1 fw-bold" href="/index.php"> ONE PIECE
      <img src="assets/img/chapeaudepaille" alt="chapeau de paille" class="h-100 w-25"> </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse w-100" id="navbarNavAltMarkup">
      <div class="navbar-nav justify-content-evenly fs-3 w-100">
        <a class="nav-link fw-bold " href="" >EQUIPAGE</a>
        <a class="nav-link fw-bold  " aria-current="page" href="/personnage.php">PERSONNAGE</a>
        <a class="nav-link fw-bold " href="/story.php">STORY</a>
        <a class="nav-link fw-bold " href="/fruits.php">FRUIT DU DEMON</a>
      </div>
    </div>
  </div>
</nav>