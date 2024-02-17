<?php
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR .'utilities' . DIRECTORY_SEPARATOR . 'header.php';
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'file_upload.php';

$currentID = isset($_GET['id']) ;
$tableChoice = isset($_POST['tableChoice']) ;

$sql = "SELECT * FROM categories_name";
$query = $db->query($sql);
$categories = $query->fetchAll();



if (isset($_POST) && !empty($_POST)) {
    $nom = $_POST['name'];
    $captain = $_POST['captain'];
    $pathimg = 'assets/img/crew/' . $_POST['pathimg'];
    $desc = $_POST['description'];

    $sql = "UPDATE `crew` SET  `name`= :nom ,`captain` = :captain,`pathimg` = :pathimg, `description` = :desc
    WHERE id = :currentID";
   $stmt = $db->prepare($sql);
   $stmt->bindParam(':currentID', $currentID);
   $stmt->bindParam(':nom', $nom);
   $stmt->bindParam(':captain', $captain);
   $stmt->bindParam(':pathimg', $pathimg);
   $stmt->bindParam(':desc', $desc);
   $stmt->execute();
}
if (empty($_POST)) {
echo "mettre a jour :";
}
?>



<div class="card" style="width: 18rem;">
    <form action="" method="POST">
        <h1>UPDATE</h1>
        <select class="form-select" name="tableChoice" aria-label="Default select example ">
            <option selected class="bg-warning" value="">Selectionne la page a modifier</option>
            <?php foreach($categories as $row){ ?>
                <option value="<?= $row['category_name'] ?>"><?= $row['category_name'] ?></option>
          <?php  } ?>
            
        </select>
        <label for="nom"> Nom de l'equipage !! </label>
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