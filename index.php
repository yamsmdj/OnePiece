<?php
include_once __DIR__ . '/utilities/header.php';
$crew = allCrew($db)
?>

<a href=""><img src="<?= $crew['pathimg'] ?>" alt="<?= $crew['name'] ?>"></a>

<?php include_once __DIR__ . '/utilities/footer.php'; ?>


