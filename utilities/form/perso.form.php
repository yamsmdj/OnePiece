<?php
// var_dump($myPerso);

?>
<div class="card text-center" style="width: 26rem;">
    <div class="w-50 m-auto text-center">
        <div class="">
            <label for="nom"> Nom du personnage </label>
            <input type="text" value="<?= empty($myPerso) ? 'Choisis personnage' : $myPerso['nameperso']  ?>" name="name">
        </div>
        <div class="div">
            <label for="pathimg"> Chemin de l'image </label>
            <input type="file" class="border" name="pathimg">
        </div>
        <div class="">
            <label for="description"> description : </label>

            <input type="text" value="<?= empty($myPerso) ? 'description' : $myPerso['description']  ?>" name="description">
            <?php // var_dump($myPerso);
            ?>
        </div>

        <button type="submit" class="my-3" name="ajouter">Modifie ce personnage !</button>
    </div>
    </form>
</div>