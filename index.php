<?php
include_once __DIR__ . '/utilities/header.php'; 
$fruit = singleFruit($db);
?>

<div class="d-flex  text-center align-items-center justify-content-center h-100 ">

    <div class="card align-items-center min-h-350 bg-dark text-white" style="width: 25rem;">
        <div class=" ">
            <img src="<?= $fruit['imgfruit'] . str_replace(' ', '', $fruit['namefruit']) .'.jpg' ?>" class="card-img-top  m-h-350" alt="<?= $fruit['namefruit'] ?>">
        </div>
        <div class="card-body">
                <h5 class="card-title"><strong> UN FRUIT </strong></h5>
                <a href="/fruits.php" class="btn btn-outline-warning ">CHOISIR VOTRE FRUIT</a>
        </div> 
    </div>

    <div class=" align-items-center px-5 fs-1">
        <strong> = </strong>
    </div>

    <div class="card align-items-center m-h-350 bg-dark text-white" style="width: 25rem;">
            <div class="">
                <img src="<?= $fruit['imgperso'] . str_replace(' ','_',$fruit['nameperso']) . '.jpg' ?>" class="card-img-top  m-h-350" alt="<?= $fruit['nameperso'] ?>">
            </div>
            <div class="card-body">
                <h5 class="card-title "><strong> UN POUVOIR ET LA SANTÉ A VIE </strong></h5>
                <a href="/personnage.php" class="btn btn-outline-danger" >PERSONNE QUI L'ONT DEJA MANGER</a>
            </div>
    </div>
       
</div>

    

<?php include_once __DIR__ . '/utilities/footer.php'; ?>


