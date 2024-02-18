<?php
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'utilities' . DIRECTORY_SEPARATOR . 'header.php';
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'file_upload.php';

    $crews = Allcrew($db);
    $fruits = allFruits($db);
    $persos = allPerson($db);
// $currentID = isset($_GET['id']);
if (!empty($_GET['id'])) {
  $current_id = $_GET['id'];
  $tableChoice = isset($_POST['tableChoice']);
  $sql = "SELECT * FROM categories_name";
  $query = $db->query($sql);
  $categories = $query->fetchAll();
  $myPerso = myPerso($db, $current_id);
  $myFruit = findFruit($db, $current_id);
  $myCrew = myCrew($db, $current_id);
}

if (isset($_POST) && !empty($_POST)) {
  $nom = $_POST['name'];
  $captain = $_POST['captain'];
  $pathimg = 'assets/img/crew/' . $_POST['pathimg'];
  $desc = $_POST['description'];
  $table = $_GET['q'];
  $sql = "UPDATE `$table` SET  `name`= :nom ,`captain` = :captain,`pathimg` = :pathimg, `description` = :desc
    WHERE id = :currentID";
  $stmt = $db->prepare($sql);
  $stmt->bindParam(':currentID', $currentID);
  $stmt->bindParam(':nom', $nom);
  $stmt->bindParam(':captain', $captain);
  $stmt->bindParam(':pathimg', $pathimg);
  $stmt->bindParam(':desc', $desc);
  $stmt->execute();
}


// var_dump($categories);


?>
<div class="card m-auto text-center" style="width: 26rem;">
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
          <?php require_once dirname(__DIR__) . '/utilities/form/crew.form.php'; ?>





        <?php } elseif (($_GET['q'] == 'fruits')) { ?>
          <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Selectionner votre fruit</a>
            <ul class="dropdown-menu">
              <?php foreach ($fruits as $row) { ?>
                <li><a class="dropdown-item" href="dashboard.php?q=fruits&fruit=<?= urlencode($row['name']) ?>&id=<?= urlencode($row['id']) ?>"><?= $row['name'] ?></a></li>
              <?php  } ?>
            </ul>
            <?php require_once dirname(__DIR__) . '/utilities/form/fruit.form.php'; ?>









          <?php } elseif (($_GET['q'] == 'personnage')) { ?>
            <div class="dropdown">
              <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Selectionner votre personnage</a>
              <ul class="dropdown-menu">
                <?php foreach ($persos as $row) { ?>
                  <li><a class="dropdown-item" href="dashboard.php?&q=personnage&persos=<?= urlencode($row['name']) ?>&id=<?= urlencode($row['id']) ?>"><?= $row['name'] ?></a></li>
                <?php } ?>
              </ul>
          <?php require_once dirname(__DIR__) . '/utilities/form/perso.form.php';
        }
      }; ?>
            </div>