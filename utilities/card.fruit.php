
<?php foreach ($fruits as  $fruit) { ?>

<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="<?= $fruit['pathimg'] . str_replace(' ', '', $fruit['name']) . '.jpg' ?>" class="img-fluid rounded-start w-100 h-100" alt="<?= $fruit['name'] ?>">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $fruit['name'] ?></h5>
        <p class="card-text"><?= $fruit['description'] ?></p>
        <a href="/shop.php" class="btn btn-primary">Manger ce fruit</a>
      </div>
    </div>
  </div>
</div>
<?php } ?>