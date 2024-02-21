<?php foreach ($fruits as  $fruit) {

?>

  <div class="p-3 d-flex">
    <div class="card" style="width: 18rem;">
      <img src="<?= '../' . $fruit['pathimg'] . str_replace(' ', '', $fruit['name']) . '.jpg' ?>" class="card-img-top h-100" alt="<?= $fruit['name'] ?>">
      <div class="card-body d-flex flex-column text-center">
        <h5 class="card-title"><?= $fruit['name'] ?></h5>
        <a href="myfruit.php?id=<?= $fruit['id'] ?>" class="btn btn-danger d-flex  justify-content-center w-50 m-auto">Manger ce fruit</a>
      </div>
    </div>
  </div>


<?php } ?>