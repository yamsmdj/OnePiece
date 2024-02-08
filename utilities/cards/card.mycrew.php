
<?php 
 $crewimg  = '';
 $crewname = '';
 $crewdesc = '';
if (isset($crews) && !empty($crews)) {
  $crewimg = $crews['crewimg'] ;
  $crewname = $crews['name'];
  $crewdesc = $crews['crewdesc'];
}

?>

<div class="d-flex flex-column align-items-center m-auto py-4 bg-dark">
    <div class="d-flex" style="max-width: 100%;">
        <div class="col-md-4">
          <a href="/crew.php"> <img src="<?= $crewimg ?>" class="img-fluid rounded-start text-center" alt="<?= $crewname ?>"></a>
        </div>
        <div class="text-light">
          <h5 class="card-title"><?= $crewname ?></h5>
          <p class="card-text"><?= $crewdesc ?> </p>
        </div>
    </div>

    <div class="d-flex ">
      <?php foreach ($persos as  $perso) : ?>
        <div class="d-flex flex-wrap py-4 mx-3  ">
          <div class="" style="max-width: 540px;">
              <div class="col-md-4 w-100">
                <a href="<?= '/myperso.php?id=' . $perso['idperso'] ?>"><img src="<?= $perso['persoimg'] . str_replace(' ' , '_',$perso['personame']) . '.jpg' ?>" class="img-fluid rounded-start m-h-350" alt=""></a> 
              </div>
              <h5 class="card-title text-light text-center"><?= $perso['personame']?></h5>
          </div>
        </div>
        <?php endforeach?>
    </div>
    
</div>
