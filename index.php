<?php
include_once __DIR__ . '/utilities/header.php';
include_once __DIR__ . '/utilities/footer.php';
include_once __DIR__ . '/function/onepiece.fn.php';
$personnages = allPerson($db);
?>

<div class="d-flex flex-wrap justify-content-around py-5">
<?=include_once __DIR__ . '/utilities/cards.php'; ?>
</div>


