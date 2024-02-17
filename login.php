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
<h1 class="text-center pt-4">Se connecter</h1>
<form action="/login.php" method="post" class="d-flex flex-column align-items-center py-3 gap-2">
    <div class="form-group ">
        <input class = "m-auto form-control" type="text" name="pseudo" placeholder="pseudo">
    </div>
    <div class="form-group">
        <input class = "m-auto form-control" type="password" name="password" placeholder="password">
    </div>
        <button type="submit" class="mt-2 btn btn-warning">Se connecter</button>
        <a href="/register.php" class="pt-2">Pas de compte ? Inscrivez-vous</a>
</form>
<?php



require_once __DIR__ . DIRECTORY_SEPARATOR . 'utilities/footer.php';
?>



