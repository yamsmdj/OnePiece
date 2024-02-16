<?php 
require_once __DIR__ . '/utilities/header.php';

if (isset($_POST) && !empty($_POST)) {
    $nom = $_POST['name'];
    $captain = $_POST['captain'];
    $pathimg = 'assets/img/crew/' . $_POST['pathimg'];
    $desc = $_POST['description'];

    $sql = "INSERT INTO crew (`name`, `captain` , `pathimg` , `description`) VALUES ('$nom', '$captain' , '$pathimg' , '$desc') ";
    $db->query($sql);
    header('Location: crew.php');

   } 
  ?>
    <div class="card" style="width: 18rem;">
        <form action="#" method="POST">
            <label for="name"> Nom de l'equipage ! </label>
            <input type="text" name="name">

            <label for="captain">Nom du capitaine</label>
            <input type="text" name="captain">

            <label for="pathimg"> Chemin de l'image </label>
            <input type="file" name="pathimg">

            <label for="description"> presente ton equipage : </label>
            <input type="text" name="description">

            <input type="submit" name="ajouter" >Ajouter un equipage !</input>
        </form>
    </div>

    ?>