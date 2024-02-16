<?php
include_once __DIR__ . '/utilities/header.php';
$crews = myCrew($db,$_GET['id']);
$persos = myPersotoCrew($db, $_GET['id']);

require __DIR__ . '/utilities/cards/card.mycrew.php' ;
require __DIR__ . '/function/crud/update.fn.php';
require __DIR__ . '/function/crud/delete.fn.php';


?>

<?php require_once __DIR__ . '/utilities/footer.php';?>