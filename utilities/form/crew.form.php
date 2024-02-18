        <?php
        // var_dump($myCrew);
        ?>


        <div class="w-50 m-auto text-center">
            <div class="">
                <label for="nom"> Nom de l'equipage ! </label>
                <input type="text" name="name" value="<?= empty($myCrew['name']) ? 'Choisi un equipage' : $myCrew['name'] ?>">
            </div>
            <div class="">
                <label for="captain">Nom du capitaine</label>
                <input type="text" name="captain" value="<?= empty($myCrew['name']) ? 'Choisi un equipage' : $myCrew['name'] ?>">
            </div>
            <div class="div">
                <label for="pathimg"> Chemin de l'image </label>
                <input type="file" class="border" name="pathimg">
            </div>
            <div class="">
                <label for="description"> description : </label>
                <input type="text" name="description" value="<?= empty($myCrew['name']) ? 'Choisi un equipage' : $myCrew['name'] ?>">
            </div>

            <button type="submit" class="my-3" name="ajouter">Modifie cette equipage !</button>
        </div>
        </form>