        <?php
        // var_dump($crews);
        ?>
        <form action="" method="POST">
            <div class="card text-center" style="width: 26rem;">
                <div class="w-50 m-auto text-center">

                    <div class="">
                        <label for="nom"> Nom de l'equipage ! </label>
                        <input type="text" name="name" value="<?= empty($crews['name']) ? 'Choisi un equipage' : $crews['name'] ?>">
                    </div>
                    <div class="">
                        <label for="captain">Nom du capitaine</label>
                        <input type="text" name="captain" value="<?= empty($crews['personame']) ? 'Choisi le nom du capitaine' : $crews['personame'] ?>">
                    </div>
                    <div class="div">
                        <label for="pathimg"> Chemin de l'image </label>
                        <input type="file" class="border" name="pathimg">
                    </div>
                    <div class="">
                        <label for="description"> description : </label>
                        <input type="text" name="description" value="<?= empty($crews['crewdesc']) ? 'une description' : $crews['crewdesc'] ?>">
                    </div>

                    <button type="submit" class="my-3" name="ajouter">Modifie cette equipage !</button>
                </div>
        </form>
        </div>