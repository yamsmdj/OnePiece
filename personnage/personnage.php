<?php
require_once dirname(__DIR__) . '/utilities/header.php';
require_once dirname(__DIR__) . '/function/perso.fn.php';

$personnages = getAllPerso($db);
?>


<h1 class="text-center pt-4"> Personnages </h1>
<div class="d-flex flex-wrap justify-content-center py-5">
    <?= include __DIR__ . '/card.allPerso.php';
    require_once dirname(__DIR__) . '/crud/insert.php';
    ?>

</div>


<?php
require_once dirname(__DIR__) . '/utilities/footer.php';
?>