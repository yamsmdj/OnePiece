
<div class="d-flex py-4 m-auto bg-dark">
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="<?= $crews['crewimg']?>" class="img-fluid rounded-start " alt="">
          </div>
              <h5 class="card-title"><?= $crews['name']?></h5>
              <p class="card-text"><?= $crews['crewdesc']?></p>
        </div>
      </div>

      <?php foreach ($persos as  $perso) : ?>
        <div class="d-flex flex-wrap py-4 m-auto  ">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="<?= $perso['persoimg'] . str_replace(' ' , '_',$perso['personame']) . '.jpg' ?>" class="img-fluid rounded-start " alt="">
            </div>
                <h5 class="card-title"><?= $perso['personame']?></h5>
          </div>
        </div>
      <?php endforeach?>
