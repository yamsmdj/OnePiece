<?php foreach ($fruits as  $fruit) {

?>

  <div class="p-3 d-flex">
    <div class="card" style="width: 18rem;">
      <img src="<?= '../' . $fruit['pathimg'] . str_replace(' ', '', $fruit['name']) . '.jpg' ?>" class="card-img-top h-100" alt="<?= $fruit['name'] ?>">
      <div class="card-body d-flex flex-column text-center">
        <h5 class="card-title"><?= $fruit['name'] ?></h5>
        <a href="myfruit.php?id=<?= $fruit['id'] ?>" class="btn btn-danger d-flex  justify-content-center w-50 m-auto">Manger ce fruit</a>
      </div>
      <?php if (isset($_SESSION['user']['user_role']) && $_SESSION['user']['user_role'] == 1) { ?>
        <div class="d-flex justify-content-around py-2">
          <button class="btn btn-primary col-5">
            <a class="nav-link text-warning " href="/crud/update.php?q=fruit&id=<?= $fruit['id'] ?>">update</a>
          </button>
          <button class="btn btn-danger col-5">
            <a class="nav-link text-warning " href="/crud/delete.php?page=fruit&id=<?= $fruit['id'] ?>">delete</a>
          </button>
        </div>
      <?php } ?>
    </div>
  </div>
<?php } ?>

<?php
if (isset($_SESSION['user']) && $_SESSION['user']['user_role'] == 1) { ?>
  <a href="/crud/insert.php?q=fruit" class="btn btn-warning col-12">AJOUTER UN FRUIT</a>
<?php  } ?>