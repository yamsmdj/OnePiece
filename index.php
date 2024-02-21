<?php

include_once __DIR__ . DIRECTORY_SEPARATOR . 'utilities/header.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'function/perso.fn.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'function/fruit.fn.php';

$fruit = getRandomFruit($db);
?>

<div class="d-flex text-center align-items-center justify-content-center h-100 my-4">

    <div class="card col-2 align-items-center bg-dark text-white">
        <div class="pt-1 m-h-265 mx-h-265 col-9">
            <img src="<?= $fruit['imgfruit'] . str_replace(' ', '', $fruit['namefruit']) . '.jpg' ?>" class="card-img-top m-h-265 w-100" alt="<?= $fruit['namefruit'] ?>">
        </div>
        <div class="card-body">
            <h5 class="card-title"><strong> UN FRUIT </strong></h5>
            <a href="/fruits.php" class="btn btn-outline-warning ">CHOISIR VOTRE FRUIT</a>
        </div>
    </div>

    <div class=" align-items-center px-5 fs-1">
        <strong> = </strong>
    </div>

    <div class="card col-2 align-items-center bg-dark text-white ">
        <div class="pt-1 mx-h-265 col-9">
            <img src="<?= $fruit['imgperso'] . str_replace(' ', '_', $fruit['nameperso']) . '.jpg' ?>" class="card-img-top m-h-265 w-100" alt="<?= $fruit['nameperso'] ?>">
        </div>
        <div class="card-body">
            <h5 class="card-title "><strong> UN POUVOIR ET LA SANTÉ A VIE </strong></h5>
            <a href="/personnage.php" class="btn btn-outline-danger">PERSONNE QUI L'ONT DEJA MANGER</a>
        </div>
    </div>

</div>



<?php include_once __DIR__ . '/utilities/footer.php'; ?>