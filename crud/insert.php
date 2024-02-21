<?php
require_once dirname(__DIR__) . '/utilities/header.php';
require_once dirname(__DIR__) . '/function/crew.fn.php';
require_once dirname(__DIR__) . '/function/perso.fn.php';
require_once dirname(__DIR__) . '/function/fruit.fn.php';

$crews = getAllCrew($db);

if (!empty($_POST)) {
    $nom = $_POST['name'];
    $captain = $_POST['captain'];
    $pathimg = 'assets/img/crew/' . $_POST['pathimg'];
    $desc = $_POST['description'];

    $sql = "INSERT INTO crew (`name`, `captain` , `pathimg` , `description`) VALUES (?, ?, ?, ?) ";
    $stmt = $db->prepare($sql);
    $stmt->execute([$nom, $captain, $pathimg, $desc]);
    if ($stmt) {
        echo 'l\'équipage a bien été ajouter';
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }
}
?>
<div class="card text-center" style="width: 26rem;">
    <form action="" method="POST">
        <h1>INSERT</h1>

        <?php
        if ($_GET['q'] == 'crew') {
            require_once __DIR__ . '/form/insert.crew.php';
        } elseif ($_GET['q'] == 'perso') {
            require_once __DIR__ . '/form/insert.perso.php';
        } elseif ($_GET['q'] == 'fruit') {
            require_once __DIR__ . '/form/insert.fruit.php';
        }
        ?>
</div>