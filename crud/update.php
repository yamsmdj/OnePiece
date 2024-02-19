<?php
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'utilities' . DIRECTORY_SEPARATOR . 'header.php';
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'function' . DIRECTORY_SEPARATOR . 'crew.fn.php';
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'function' . DIRECTORY_SEPARATOR . 'fruit.fn.php';
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'function' . DIRECTORY_SEPARATOR . 'perso.fn.php';
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'file_upload.php';

$crews = getAllCrew($db);
$fruits = getAllFruits($db);
$persos = getAllPerso($db);
// $currentID = isset($_GET['id']);
if (!empty($_GET['id'])) {
  $current_id = $_GET['id'];
  $tableChoice = isset($_POST['tableChoice']);
  $sql = "SELECT * FROM categories_name";
  $query = $db->query($sql);
  $categories = $query->fetchAll();
  $myPerso = getPersoById($db, $current_id);
  $myFruit = getFruitById($db, $current_id);
  $myCrew = getCrewById($db, $current_id);
}

if (isset($_POST) && !empty($_POST)) {
  $nom = $_POST['name'];
  $captain = $_POST['captain'];
  $pathimg = 'assets/img/crew/' . $_POST['pathimg'];
  $desc = $_POST['description'];
  $table = $_GET['q'];
  $sql = "UPDATE `$table` SET  `name`= :name ,`captain` = ?,`pathimg` = ?, `description` = ?
    WHERE id = ?";
  $stmt = $db->prepare($sql);
  $stmt->execute([$nom, $captain, $pathimg, $desc, $current_id]);
}

?>
<div class=" text-center" style="width: 26rem;">
  <form action="" method="POST">
    <h1>UPDATE</h1>
    <div class="dropdown">
      <a class="btn btn-secondary dropdown-toggle my-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Selectionner votre page a changer
      </a>
      <ul class="dropdown-menu ">
        <li><a class="dropdown-item" href="dashboard.php?q=crew ">equipage</a></li>
        <li><a class="dropdown-item" href="dashboard.php?q=fruits ">fruits</a></li>
        <li><a class="dropdown-item" href="dashboard.php?q=personnage">personnage</a></li>
      </ul>
    </div>
    <?php if (isset($_GET['q'])) {
      if ($_GET['q'] == 'crew') { ?>
        <div class="dropdown">
          <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Selectionner votre equipage</a>
          <ul class="dropdown-menu my-3">
            <?php foreach ($crews as $row) { ?>
              <li><a class="dropdown-item" href="dashboard.php?q=crew&crew=<?= urlencode($row['name']) ?>&id=<?= urlencode($row['id']) ?>"><?= $row['name'] ?></a></li>
            <?php  } ?>
          </ul>
        </div>
        <?php require_once dirname(__DIR__) . '/utilities/form/crew.form.php'; ?>
      <?php } elseif (($_GET['q'] == 'fruits')) { ?>
        <div class="dropdown">
          <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Selectionner votre fruit</a>
          <ul class="dropdown-menu">
            <?php foreach ($fruits as $row) { ?>
              <li><a class="dropdown-item" href="dashboard.php?q=fruits&fruit=<?= urlencode($row['name']) ?>&id=<?= urlencode($row['id']) ?>"><?= $row['name'] ?></a></li>
            <?php  } ?>
          </ul>
        </div>
        <?php require_once dirname(__DIR__) . '/utilities/form/fruit.form.php'; ?>
      <?php } elseif (($_GET['q'] == 'personnage')) { ?>
        <div class="dropdown">
          <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Selectionner votre personnage</a>
          <ul class="dropdown-menu">
            <?php foreach ($persos as $row) { ?>
              <li><a class="dropdown-item" href="dashboard.php?&q=personnage&persos=<?= urlencode($row['name']) ?>&id=<?= urlencode($row['id']) ?>"><?= $row['name'] ?></a></li>
            <?php } ?>
          </ul>
        </div>
    <?php require_once dirname(__DIR__) . '/utilities/form/perso.form.php';
      }
    }; ?>
</div>