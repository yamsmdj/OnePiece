<?php

$myFruit = getFruitById($db,$_GET['id']);

if($myFruit) {
?>
<div class="d-flex justify-content-evenly w-75 m-auto" >
    <div class="card w-25" >
        <img src="<?= '../' . $myFruit['fpathimg'] . str_replace(' ', '' ,$myFruit['fname']) . '.jpg' ?>" class="card-img-top img-fluid w-50 mx-auto" alt="<?= $myFruit['fname'] ?>">
        <div class="card-body">
            <p class="card-text "><?= $myFruit['fruit_desc'] ?> </p>
        </div>
    </div>

    <div class="d-flex flex-column w-25">
        <a href="/myperso.php?id=<?= $myFruit['p_id'] ?> "><img src="<?= $myFruit['p_pathimg'] . str_replace(' ', '_', $myFruit['p_name']) . '.jpg' ?>" alt="<?= $myFruit['p_name'] ?>" class="w-100">
        <p class="text-center text-dark"><?= $myFruit['p_name'] ?> 
    </p></a>
    </div>

</div>

<?php } else {
    echo 'Fruit non trouvé';
}
?>