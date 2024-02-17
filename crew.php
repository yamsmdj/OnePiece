<?php
require_once __DIR__ . '/utilities/header.php';
$crews = allCrew($db); 


?>

<div class="d-flex flex-wrap row-gap-4 justify-content-around align-items-center h-100 w-50 m-auto ">
    <?php foreach ($crews as $crew) :?>
        <div class="card bg-dark " style="width: 12rem; height:12rem;">
      <div class="card-body overflow-hidden p-0">
        <a  href="/mycrew.php?id=<?= $crew['id'] ?> "><img src="<?= $crew['pathimg'] ?>" class="h-100 img-fluid " alt="<?= $crew['name'] ?>" ></a>
      </div>
    </div>
    <?php endforeach ;
// require_once __DIR__ . '/function/crud/insert.fn.php' ; 
// $insertcrew =  insertCrew($db) ;
?>
<?php 
require_once __DIR__ . '/utilities/footer.php'; ?>
