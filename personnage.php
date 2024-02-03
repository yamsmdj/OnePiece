<?php 
require_once __DIR__ . '/utilities/header.php';

$personnages = allPerson($db);
?>


<h1> Personnages </h1>
<?php
foreach ($personnages as $person) { ?>
    <p>
        <a href=""><?= $person['name'] ?></a>
    </p>
    <?php } ?>



<?php
require_once __DIR__ . '/utilities/footer.php';
?>