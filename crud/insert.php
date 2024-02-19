<?php
// require_once dirname(__DIR__) . '/utilities/header.php';

if (isset($_POST) && !empty($_POST)) {
    $nom = $_POST['name'];
    $captain = $_POST['captain'];
    $pathimg = 'assets/img/crew/' . $_POST['pathimg'];
    $desc = $_POST['description'];

    $sql = "INSERT INTO crew (`name`, `captain` , `pathimg` , `description`) VALUES (?, ?, ?, ?) ";
    $stmt = $db->prepare($sql);
    $stmt->execute($nom, $captain, $pathimg, $desc);
    header('Location: crew.php');
}
?>
<div class="card text-center" style="width: 26rem;">
    <form action="" method="POST">
        <h1>INSERT</h1>
        <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle my-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Selectionner l'endroit où crée
            </a>
            <ul class="dropdown-menu ">
                <li><a class="dropdown-item" href="dashboard.php?q=crew ">equipage</a></li>
                <li><a class="dropdown-item" href="dashboard.php?q=fruits ">fruits</a></li>
                <li><a class="dropdown-item" href="dashboard.php?q=personnage">personnage</a></li>
            </ul>
        </div>
        <?php require_once dirname(__DIR__) . '/utilities/form/perso.form.php';
             ?>
</div>