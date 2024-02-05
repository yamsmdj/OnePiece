<?php
require_once __DIR__ . '/utilities/header.php';

if (isset($_POST ['genre'])) {
    $genre = $_POST['genre'] ; 
    $fruits = typeFruit($db,$genre);
  } else {
    $fruits = allFruits($db);
  }

?>

<h1 class="text-center pt-4">FRUIT DU DEMON</h1>

<form method="post" class="d-flex justify-content-center w-25" >
  <select  name="genre" class="form-select" aria-label="Default select example">
    <option selected>Tous les type de fruit</option>
    <option value="Paramecia" > Paramecia </option>
    <option value="Zoan" > Zoan </option>
    <option value="Logia"> Logia </option>
  </select>
  <button type="submit">Changer</button>
</form>

<div class="d-flex flex-wrap justify-content-center m-auto w-75 py-5 ">

<?php require __DIR__ . '/utilities/cards/card.allFruit.php'?>
</div>

<?php require_once __DIR__ . '/utilities/footer.php' ?>
