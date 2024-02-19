<?php
require_once dirname(__DIR__) . '/utilities/header.php';
require_once dirname(__DIR__) . '/function/crew.fn.php';

$crews = getAllCrew($db);
// var_dump($crews);
?>

<div class="d-flex flex-wrap justify-content-around align-items-center col-8 my-3 py-2 m-auto ">
  <?php foreach ($crews as $crew) : ?>
    <div class="card bg-dark">
      <div class="card-body d-flex flex-column p-0">
        <a href="/crew/mycrew.php?id=<?= $crew['id'] ?> "><img src="<?= '../' . $crew['pathimg'] ?>" class="h-100 img-fluid " alt="<?= $crew['name'] ?>">
        </a>
        <?php if (isset($_SESSION['user']['user_role']) && $_SESSION['user']['user_role'] == 1) { ?>
          <div class="d-flex justify-content-between">
            <button class="btn btn-primary">
              <a class="nav-link text-warning" href="/crud/update.php?q=crew&id=<?= $crew['id'] ?>">update equipage</a>
            </button>
            <button class="btn btn-danger">
              <a class="nav-link text-warning" href="/crud/update.php?q=crew&id=<?= $crew['id'] ?>">delete</a>
            </button>
          </div>
        <?php } ?>
      </div>
    </div>


  <?php endforeach;

  require_once dirname(__DIR__) . '/utilities/footer.php'; ?>