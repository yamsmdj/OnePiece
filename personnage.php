<?php 
require_once __DIR__ . '/utilities/header.php';
$personnages = allPerson($db);
?>


<h1> Personnages </h1>
<div class="d-flex flex-wrap justify-content-center py-5">
<?=include __DIR__ . '/utilities/cards/card.allPerso.php'; 
require_once __DIR__ . '/function/crud/insert.fn.php';
// $insertPerso =  insertPerso($db) ;
?>

</div>


<?php
require_once __DIR__ . '/utilities/footer.php';
?>