<?php
require_once dirname(__DIR__, 2) . '/function/crew.fn.php';
$crews = getAllCrew($db);

?>
<div class="card text-center my-3">
    <div class="m-auto py-3 text-center">
        <div class="">
            <label for="nom"> Nom du personnage : </label>
            <input type="text" name="name">
        </div>
        <div class="my-3">
            <label for="pathimg"> Chemin de l'image </label>
            <input type="file" class="border" name="pathimg">
        </div>
        <div class="">
            <label for="price"> WANTED $ : </label>
            <input type="text" name="price">
        </div>
        <div class="my-3">
            <label for="description"> description : </label>
            <input type="text" name="description">
        </div>
        <div class="">
            <label for="crew_id"> Membre de l'equipage : </label>
            <div class="dropdown">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Choisis l'equipage correspondant
                    </button>
                    <ul class="dropdown-menu">
                        <?php foreach ($crews as $row) { ?>
                            <li><a class="dropdown-item" href="#"><?= $row['name'] ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>

        <button type="submit" class="my-3 btn btn-success" name="ajouter">Ajouter ce personnage !</button>
    </div>
    </form>
</div>