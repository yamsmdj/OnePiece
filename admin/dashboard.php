<?php
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'utilities/header.php';
require_once dirname(__DIR__) . '/function/crew.fn.php';
sendUserConnect();
// require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'file_upload.php'; 

$myCrew = getCrewById($db, $_GET['id']);
// var_dump($myCrew);
?>

<div class="d-flex justify-content-center align-items-center ">
    <?php
    //     // require_once __DIR__ . DIRECTORY_SEPARATOR . 'crud/insert.php';
    //     require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'crud/update.php';

    //     // require_once __DIR__ . DIRECTORY_SEPARATOR . 'function/crud/delete.fn.php' ; 
    //     
    ?>
</div>
