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
<nav class="navbar navbar-expand-lg bg-body-tertiary py-4">
  <div class="container-fluid navbar-light">
    <a class="navbar-brand" href="/index.php"> ONE PIECE
      <img src="assets/img/chapeaudepaille" alt="chapeau de paille" class="h-100 w-25"> </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="/personnage.php">Personnage</a>
        <a class="nav-link" href="/story.php">Story</a>
        <a class="nav-link" href="/fruits.php">Fruit du demon</a>
        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
      </div>
    </div>
  </div>
</nav>