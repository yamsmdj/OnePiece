<?php foreach ($personnages as $person) { ?>

  <div class="card col-3 my-3">
    <img src="<?= $person['pathimg'] . str_replace(' ', '_', $person['name']) . '.jpg' ?>" class="h-450" alt="">
    <div class="card-body d-flex flex-column justify-content-between">
      <h5 class="card-title"><?= $person['name'] ?></h5>
      <p class="card-text"><?= substr($person['description'], 0, 60) . "['...']" ?></p>
      <a href="myperso.php?id=<?= $person['id'] ?>" class="btn btn-dark">Voir plus</a>
    </div>
    <?php if (isset($_SESSION['user']['user_role']) && $_SESSION['user']['user_role'] == 1) { ?>
      <div class="d-flex justify-content-around py-2">
        <button class="btn btn-primary col-5">
          <a class="nav-link text-warning " href="/crud/update.php?q=person&id=<?= $person['id'] ?>">update</a>
        </button>
        <button class="btn btn-danger col-5">
          <a class="nav-link text-warning " href="/crud/delete.php?id=<?= $person['id'] ?>&page=person">delete</a>
        </button>
      </div>
    <?php } ?>
  </div>

<?php }
if (isset($_SESSION['user']) && $_SESSION['user']['user_role'] == 1) { ?>
  <a href="/crud/insert.php?q=perso" class="btn btn-warning col-12">AJOUTER UN PERSONNAGE</a>
<?php  }
