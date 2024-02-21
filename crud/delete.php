<?php
require_once dirname(__DIR__) . '/utilities/header.php';


if (isset($_POST['delete'])) {
    if (isset($_GET['id'])) {
        removeCrew($db,$_GET['id']);
        echo "l'equipage a bien été supprimer";
    }
}else {?>
<form action="" method="post">
    <label for="">Voulez vous vraiment supprimer l'équipage ? </label>
    <input type="submit" class="btn btn-danger"name="delete" value="Oui">
    <a href="/index.php" class="btn btn-success">Non</a>
    </form>
    <?php
}