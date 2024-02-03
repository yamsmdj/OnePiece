<?php 
require_once __DIR__ . '/utilities/header.php';
require_once __DIR__ . '/function/onepiece.fn.php';
$personnages = allPerson($db);

?>
<h1> Personnages </h1>


    <p>
        <a href="#"><?= $person['name'] ?></a>
    </p>



<?php
require_once __DIR__ . '/utilities/footer.php';
?>