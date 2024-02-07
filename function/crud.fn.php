<?php 
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ajouter'])){
    $nom = $_POST['nom'];
    echo $nom;
    $captain = $_POST['captain'];
    echo $captain;
    $pathimg = $_POST['pathimg'];
    echo $pathimg;
    $description = $_POST['description'];
    echo $description;

    $sql = "INSERT INTO `crew` (`name`, `captain`, `pathimg`, `description`) VALUES ('$nom','$captain', '$pathimg', '$description');";
    $add = $db->query($sql);
    if ($add) { ?>
    <a href="/index.php">Clique pour ajouter le jeu</a>

    <?php }
} ?>


<div class="card" style="width: 18rem;">
    <form action="" method="POST">
        <label for="nom"> Nom de l'equipage ! </label>
        <input type="text" name="nom">

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
