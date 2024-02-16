<?php

$currentID = $_GET['id'];

if (isset($_POST['delete'])) {
    $sql = "DELETE FROM crew WHERE id = $currentID";
    $db->query($sql);
}

?>


<div class="card" style="width: 18rem;">
        <form action="" method="POST">
            <label for="delete"> Clique pour supprimer cette equipage -_-' </label>
            <button type="submit" name="delete" >Supprimer un equipage !</button>
        </form>
    </div>