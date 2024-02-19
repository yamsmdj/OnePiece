<?php
include_once dirname(__DIR__) . '/utilities/header.php';
include_once dirname(__DIR__) . '/function/crew.fn.php';
include_once dirname(__DIR__) . '/function/perso.fn.php';
$crews = getCrewById($db, $_GET['id']);
$persos = getPersoByCrew($db, $_GET['id']);




require __DIR__ . '/card.mycrew.php'; ?>



<div class="d-flex justify-content-around text-center">
    <?php
    require dirname(__DIR__) . '/crud/edit.php';

    ?>
</div>

<?php require_once dirname(__DIR__) . '/utilities/footer.php'; ?>