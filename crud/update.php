<?php
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'utilities' . DIRECTORY_SEPARATOR . 'header.php';
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'function' . DIRECTORY_SEPARATOR . 'crew.fn.php';
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'function' . DIRECTORY_SEPARATOR . 'fruit.fn.php';
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'function' . DIRECTORY_SEPARATOR . 'perso.fn.php';
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'file_upload.php';


$crews = getCrewById($db, $_GET['id']);
$fruits = getAllFruits($db);
$persos = getAllPerso($db);

if (!empty($_GET['q']) && !empty($_GET['id'])) {
  if ($_GET['q'] == 'crew') {
    require_once dirname(__DIR__) . '/utilities/form/crew.form.php';
  } elseif ($_GET['q'] == 'fruit') {
    require_once dirname(__DIR__) . '/utilities/form/fruit.form.php';
  } elseif ($_GET['q'] == 'personnage') {
    require_once dirname(__DIR__) . '/utilities/form/perso.form.php';
  };
}