
<?php 
$myPerso = myPerso($db,$_GET['id']);

?>
<div class="d-flex py-4 m-auto w-50">
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="<?= $myPerso['imgperso'] . str_replace(' ' , '_',$myPerso['nameperso']) . '.jpg' ?>" class="img-fluid rounded-start " alt="">
          </div>
              <h5 class="card-title"><?= $myPerso['nameperso']?></h5>
              <p class="card-text"><?= $myPerso['description']?></p>
        </div>
      </div>

  <div class="">

    <div class="card" style="width: 15rem;">
      <img src="<?= $myPerso['imgcrew'] ?> " class="card-img-top" alt="<?= $myPerso['namecrew']?>">
      <div class="card-body">
        <h4><?= $myPerso['namecrew'] ?> </h4>
      </div>
    </div>
  
    <div class="card" style="width: 15rem;">
      <img src="<?= $myPerso['imgfruit'] . str_replace(' ', '',$myPerso['namefruit'])  . '.jpg' ?> " class="card-img-top" alt="...">
      <div class="card-body">
        <h4><?= $myPerso['namefruit'] ?> </h4>
      </div>
    </div>
  </div> 
  </div> 
</div>

  