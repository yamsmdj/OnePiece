        <?php

        ?>

        <div class="w-50 m-auto text-center">
            <div class="">
                <label for="nom"> Nom du fruit </label>
                <input type="text" value="<?= empty($myFruit) ? 'choisis un fruit' : $myFruit['fname'] ?>" name="name">
            </div>
            <div class="div">
                <label for="pathimg"> Chemin de l'image </label>
                <input type="file" class="border" name="pathimg">
            </div>
            <div class="">
                <label for="description"> description : </label>
                <input type="text" value="<?= empty($myFruit) ? 'description' : $myFruit['fruit_desc'] ?>" name="description">
            </div>

            <button type="submit" class="my-3" name="ajouter">Modifie ce fruit !</button>
        </div>
        </form>