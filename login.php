<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'utilities/header.php';

$erreur = null ;

if (isset($_POST['pseudo'], $_POST['password']) && !empty($_POST['pseudo']) && !empty($_POST['password'])) {
    $username = $_POST['pseudo'] ;
    $password = $_POST['password'] ;
    try {
        Authentification($db, $username , $password);
    } catch (Exception $e) {
        $erreur = $e->getMessage();
    }
}

if ($erreur): ?>
    <div class="alert alert-danger">
    <?= $erreur ?>
    </div>
<?php endif
?>

<form action="/login.php" method="post" class="d-flex justify-content-center py-5">
    <div class="form-group ">
        <input class = "m-auto form-control" type="text" name="pseudo" placeholder="pseudo">
    </div>
    <div class="form-group">
        <input class = "m-auto form-control" type="password" name="password" placeholder="password">
    </div>
    <button type="submit" class="mx-3 btn btn-primary">Se connecter</button>
</form>
<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'utilities/footer.php';
?>



