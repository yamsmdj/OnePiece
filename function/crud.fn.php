<?php
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ajouter'])){
    $nom = $_POST['name'];
    $captain = $_POST['captain'];
    $pathimg = $_POST['pathimg'];
    $description = $_POST['description'];

    $sql = "INSERT INTO crew (name,captain,pathimg,description) VALUES ('$nom','$captain','$pathimg','$description')";
    $add = $db->query($sql);
    if($add){
        echo '<p> Le jeu a bien été ajouté </p>';
    }

} ?>


<div class="card" style="width: 18rem;">
    <form action="" method="POST">
        <label for="name"> Nom de l'equipage ! </label>
        <input type="text" name="name">

        <label for="captain">Nom du capitaine</label>
        <input type="text" name="captain">

        <label for="pathimg"> Chemin de l'image </label>
        <input type="text" name="pathimg">

        <label for="description"> presente ton equipage : </label>
        <input type="text" name="description">

        <button type="submit" name="ajouter" >Ajouter un equipage !</button>
        </form>
    </div>
  </div>
</div>
