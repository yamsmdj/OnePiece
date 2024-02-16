<?php 

function insertCrew($db)
{
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
    <?php } 
    





    
    function insertPerso($db)
    { 
        if (isset($_POST) && !empty($_POST)) {
            $nom = $_POST['name'];
            $pathimg = 'assets/img/people/' . $_POST['pathimg'];
            $price = $_POST['price'];
            $desc = $_POST['description'];
        
        
            $sql = "INSERT INTO `personnage` (`name`,`pathimg`, `price`, `description`) VALUES ('$nom', '$pathimg' ,'$price', '$desc') ";
            $db->query($sql);
        }?>
        <div class="card" style="width: 18rem;">
            <form action="" method="POST" class="d-flex flex-column">
                <label for="name"> Nom de l'equipage ! </label>
                <input type="text" name="name">
                <label for="price">prix   </label>
                <input type="text" name="price">
                <label for="pathimg"> Chemin de l'image </label>
                <input type="file" name="pathimg">
                <label for="description"> presente ton equipage : </label>
                <input type="text" name="description">
                <button type="submit" name="ajouter" >Ajouter un equipage !</button>
            </form>
  <?php }
        ?>