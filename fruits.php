<?php
require_once __DIR__ . '/utilities/header.php';

$fruits = allFruits($db);
?>

<?php foreach ($fruits as  $fruit) { ?>

<div class="d-flex flex-wrap justify-content-center py-5 w-75 m-auto">
<?php require_once __DIR__ . '/utilities/card.fruit.php';?>
</div>

<?php } ?> 