<?php
require_once __DIR__ . '/utilities/header.php';
$fruit = findFruit($db,$_GET['id']);

if($fruit) {
?>
<div class="card" style="width: 18rem;">
    <img src="<?= $fruit['fpathimg'] . str_replace(' ', '' ,$fruit['fname']) . '.jpg' ?>" class="card-img-top" alt="<?= $fruit['fname'] ?>">
    <div class="card-body">
        <p class="card-text"><?= $fruit['fruit_desc'] ?> </p>
    </div>
</div>
<?php } else {
    echo 'Fruit non trouvé';
}
?>

