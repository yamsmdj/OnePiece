<?php
require_once  dirname(__DIR__) .  '/utilities/header.php';
require_once  dirname(__DIR__) .  '/function/fruit.fn.php';



if (!empty($_GET['genre'])) {
  $genre = $_GET['genre'];
  $fruits = getFruitById($db, $genre);
} else {
  $fruits = getAllFruits($db);
}
?>

<h1 class="text-center pt-4">FRUIT DU DEMON</h1>

<form method="GET" class="d-flex flex-column  flex-md-row justify-content-center w-25 m-auto pt-5">
  <select name="genre" class="form-select" aria-label="Default select example">
    <option selected value="">Tous les type de fruit</option>
    <option value="Paramecia"> Paramecia </option>
    <option value="Zoan"> Zoan </option>
    <option value="Logia"> Logia </option>
  </select>
  <button type="submit">Changer</button>
</form>

<div class="d-flex flex-wrap justify-content-center m-auto w-75 py-5 ">

  <?php require_once __DIR__ . '/card.allFruit.php' ?>
</div>


<?php require_once dirname(__DIR__) . '/utilities/footer.php' ?>