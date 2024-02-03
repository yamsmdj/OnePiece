<?php
include_once __DIR__ . '/utilities/header.php';
$personnages = allPerson($db);
?>

<div class="d-flex flex-wrap justify-content-center py-5">
<?=include_once __DIR__ . '/utilities/cards.php'; ?>
</div>

<?php include_once __DIR__ . '/utilities/footer.php'; ?>


