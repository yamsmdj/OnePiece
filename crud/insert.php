<?php
require_once dirname(__DIR__) . '/utilities/header.php';
require_once dirname(__DIR__) . '/function/crew.fn.php';
require_once dirname(__DIR__) . '/function/perso.fn.php';
require_once dirname(__DIR__) . '/function/fruit.fn.php';
require_once dirname(__DIR__) . '/mod/mod.php';


?>

<div class="m-auto col-4 text-center">
    <form action="" method="POST">
        <h1>INSERT</h1>

        <?php
        if ($_GET['q'] == 'crew') {
            $crews = getAllCrew($db);

            if (!empty($_POST)) {
                $name = $_POST['name'];
                $captain = $_POST['captain'];
                $pathimg = 'assets/img/crew/' . $_POST['pathimg'];
                $desc = $_POST['description'];
                $stmt = addCrew($db, $name, $captain, $pathimg, $desc);
                if ($stmt) {
                    echo '<h4>l\'équipage a bien été ajouter</h4>'; ?>
                <?php }
            }
            require_once __DIR__ . '/form/insert.crew.php';
            backIndex();
        } elseif ($_GET['q'] == 'perso') {
            if (!empty($_POST)) {
                $name = $_POST['name'];
                $pathimg = $_POST['pathimg'];
                $price = $_POST['price'];
                $desc = $_POST['description'];
                $crew_id = $_POST['crew_id'];
                $stmt = addPerso($db, $name, $pathimg, $price, $desc, $crew_id);
                if ($stmt) {
                    echo '<h4>le personnage a bien été ajouter</h4>'; ?>
                <?php }
            }
            require_once __DIR__ . '/form/insert.perso.php';
            backIndex();
        } elseif ($_GET['q'] == 'fruit') {
            if (!empty($_POST)) {
                $name = $_POST['name'];
                $genre = $_POST['genre'];
                $price = $_POST['price'];
                $pathimg = $_POST['pathimg'];
                $desc = $_POST['description'];
                $stmt = addFruit($db, $name, $genre, $price, $pathimg, $personnage_id, $desc);
                if ($stmt) {
                    echo '<h4>le fruit a bien été ajouter</h4>'; ?>
        <?php }
            }
            require_once __DIR__ . '/form/insert.fruit.php';
            backIndex();
        }
        ?>

</div>

<?php

require_once dirname(__DIR__) . '/utilities/footer.php';
