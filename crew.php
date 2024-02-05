<?php
require_once __DIR__ . '/utilities/header.php';
$crews = allCrew($db); 


?>

<div class="d-flex flex-wrap justify-content-around align-items-center h-100 w-50 m-auto">
    <?php foreach ($crews as $crew) :?>
        <div class="card" style="width: 18rem;">
      <div class="card-body">
        <a class="px-3" href="/mycrew.php?id=<?= $crew['id'] ?> "><img src="<?= $crew['pathimg'] ?>" class="w-100" alt="<?= $crew['name'] ?>" ></a>
      </div>
    </div>
    <?php endforeach?>

<?php 
require_once __DIR__ . '/utilities/footer.php'; ?>