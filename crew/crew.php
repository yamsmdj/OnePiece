<?php
require_once dirname(__DIR__) . '/utilities/header.php';
require_once dirname(__DIR__) . '/function/crew.fn.php';

$crews = getAllCrew($db);

if (!empty($_GET['success']) == 1) {
  echo "<p class='btn btn-success'> l'equipage a bien été supprimer </p>";
}
?>

<div class="d-flex flex-wrap justify-content-around align-items-center col-10 my-3 py-2 m-auto ">
  <?php foreach ($crews as $crew) : ?>
    <div class="card bg-dark col-2 my-3 ">
      <div class="card-body d-flex flex-column p-0">
        <a href="/crew/mycrew.php?id=<?= $crew['id'] ?>"><img src="<?= '../' . $crew['pathimg'] ?>" class="col-12 m-h-265" alt="<?= $crew['name'] ?>"></a>


        <?php if (isset($_SESSION['user']['user_role']) && $_SESSION['user']['user_role'] == 1) { ?>
          <div class="d-flex justify-content-around py-2">
            <button class="btn btn-primary col-5">
              <a class="nav-link text-warning " href="/crud/update.php?q=crew&id=<?= $crew['id'] ?>">update</a>
            </button>
            <button class="btn btn-danger col-5">
              <a class="nav-link text-warning " href="/crud/delete.php?id=<?= $crew['id'] ?>&page=crew">delete</a>
            </button>
          </div>
        <?php } ?>
      </div>
    </div>
  <?php endforeach;
  if (isset($_SESSION['user']) && $_SESSION['user']['user_role'] == 1) { ?>
    <a href="/crud/insert.php?q=crew" class="btn btn-warning">AJOUTER UN EQUIPAGE</a>
  <?php  }


  require_once dirname(__DIR__) . '/utilities/footer.php'; ?>