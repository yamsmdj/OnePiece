<?php
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'utilities' . DIRECTORY_SEPARATOR . 'header.php';
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'function' . DIRECTORY_SEPARATOR . 'crew.fn.php';
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'function' . DIRECTORY_SEPARATOR . 'fruit.fn.php';
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'function' . DIRECTORY_SEPARATOR . 'perso.fn.php';
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'file_upload.php';

$currentId = $_GET['id'];
$crews = getCrewById($db, $currentId);
$fruits = getAllFruits($db);
$persos = getAllPerso($db);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $captain = $_POST['captain'];
  $pathimg = 'assets/img/crew/' . $_POST['pathimg'];
  $desc =  $_POST['description'];
  try {
    $update = updateCrew($db, $name, $captain, $pathimg, $desc, $currentId);
  } catch (PDOException $e) {
    echo ' Erreur : ' . $e->getMessage();
  }
}
if (!empty($_GET['q']) && !empty($_GET['id'])) { ?>
  <h1 class="text-center">UPDATE</h1>
<?php
  if ($_GET['q'] == 'crew') {
    require_once dirname(__DIR__) . '/utilities/form/crew.form.php';
  } elseif ($_GET['q'] == 'fruit') {
    require_once dirname(__DIR__) . '/utilities/form/fruit.form.php';
  } elseif ($_GET['q'] == 'personnage') {
    require_once dirname(__DIR__) . '/utilities/form/perso.form.php';
  };
}
