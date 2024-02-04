

<?php foreach ($personnages as $person) {?>

    <div class="card" style="width: 18rem;">
        <img src="<?= $person['pathimg'] . str_replace(' ' , '_',$person['name']) . '.jpg' ?>" class="card-img-top h-100" alt="">
        <div class="card-body">
          <h5 class="card-title"><?= $person['name']?></h5>
          <p class="card-text"><?= $person['description'] ?></p>
          <a href="myperso.php?id=<?= $person['id']?>" class="btn btn-primary">Voir plus</a>
        </div>
    </div>


<?php } ?>