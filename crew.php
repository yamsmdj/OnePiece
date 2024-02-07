<?php
require_once __DIR__ . '/utilities/header.php';
$crews = allCrew($db); 


?>

<div class="d-flex flex-wrap justify-content-around align-items-center h-100 w-50 m-auto ">
    <?php foreach ($crews as $crew) :?>
        <div class="card bg-dark " style="width: 20rem; height:18rem;">
      <div class="card-body overflow-hidden">
        <a class="px-3" href="/mycrew.php?id=<?= $crew['id'] ?> "><img src="<?= $crew['pathimg'] ?>" class="h-100 img-fluid " alt="<?= $crew['name'] ?>" ></a>
      </div>
    </div>
    <?php endforeach ;
require_once __DIR__ . '/function/crud.fn.php' ; ?>
<?php 
require_once __DIR__ . '/utilities/footer.php'; ?>