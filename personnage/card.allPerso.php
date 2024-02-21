<?php foreach ($personnages as $person) { ?>

  <div class="card col-3 my-3">
    <img src="<?= $person['pathimg'] . str_replace(' ', '_', $person['name']) . '.jpg' ?>" class="h-450" alt="">
    <div class="card-body d-flex flex-column justify-content-between">
      <h5 class="card-title"><?= $person['name'] ?></h5>
      <p class="card-text"><?= substr($person['description'], 0, 60) . "['...']" ?></p>
      <a href="myperso.php?id=<?= $person['id'] ?>" class="btn btn-primary">Voir plus</a>
    </div>
  </div>


<?php } ?>