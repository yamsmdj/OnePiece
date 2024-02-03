<?php
require_once __DIR__ . '/utilities/header.php';
require_once __DIR__ . '/function/onepiece.fn.php';

$fruits = allFruits($db);
?>

<div class="d-flex flex-wrap justify-content-center py-5">
<?php require_once __DIR__ . '/utilities/card.fruit.php';?>
</div>

?> 