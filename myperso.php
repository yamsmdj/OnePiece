<?php
require_once __DIR__ . '/utilities/header.php';

$personnages = myPerso($db,$_GET['id']);

require_once __DIR__ . '/utilities/cards/myperso.card.php';

require_once __DIR__ . '/utilities/footer.php';



?>

