<?php
require_once __DIR__ . '/utilities/header.php';

$currentID = $_GET['id'];

if (isset($_POST) && !empty($_POST)) {
    $nom = $_POST['name'];
    $captain = $_POST['captain'];
    $pathimg = 'assets/img/crew/' . $_POST['pathimg'];
    $desc = $_POST['description'];
    
    $sql = "UPDATE `crew` SET `name` = '$nom' ,`captain` = '$captain ',`pathimg` = '$pathimg' , `description` = '$desc'
    WHERE id = $currentID";
    $db->query($sql);
}
if (empty($_POST)) {
echo "mettre a jour :";
}
?>



<div class="card" style="width: 18rem;">
    <form action="" method="POST">
        <h1>UPDATE</h1>
        <label for="nom"> Nom de l'equipage ! </label>
        <input type="text" name="name">
        <label for="captain">Nom du capitaine</label>
        <input type="text" name="captain">
        <label for="pathimg"> Chemin de l'image </label>
        <input type="file" name="pathimg">
        <label for="description"> presente ton equipage : </label>
        <input type="text" name="description">
        
        <button type="submit" name="ajouter" >Ajouter un equipage !</button>
    </form>
</div>