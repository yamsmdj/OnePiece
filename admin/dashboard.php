<?php
// require_once __DIR__ . DIRECTORY_SEPARATOR . 'function/onepiece.fn.php';
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'utilities/header.php';

// sendUserConnect();

// require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'file_upload.php'; 
?>

<div class="d-flex justify-content-center align-items-center ">
    <?php
    //     // require_once __DIR__ . DIRECTORY_SEPARATOR . 'crud/insert.php';
    //     require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'crud/update.php';

    //     // require_once __DIR__ . DIRECTORY_SEPARATOR . 'function/crud/delete.fn.php' ; 
    //     
    ?>
</div>


<div class="btn-group-vertical gap-3 py-5" role="group" aria-label="Vertical button group">
    <div class="btn-group dropend" role="group">
        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Equipage
        </button>
        <ul class="dropdown-menu" href="">
            <li><a class="dropdown-item" href="#">INSERT</a></li>
            <li><a class="dropdown-item" href="#">UPDATE</a></li>
        </ul>
    </div>
    <div class="btn-group dropend" role="group">
        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Personnage
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">INSERT</a></li>
            <li><a class="dropdown-item" href="#">UPDATE</a></li>
        </ul>
    </div>
    <div class="btn-group dropend" role="group">
        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">INSERT</a></li>
            <li><a class="dropdown-item" href="#">UPDATE</a></li>
        </ul>
    </div>
</div>