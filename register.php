<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'utilities' . DIRECTORY_SEPARATOR . 'header.php'; 

if (isset($_POST['inserer']) && !empty($_POST['inserer'])) {
    register($db);
}
?>

<h1 class="text-center pt-4">S'inscrire</h1>
<form action="/register.php" method="post" class="d-flex flex-column align-items-center py-3 gap-2">
    <div class="form-group ">
        <input class = "m-auto form-control" type="text" name="pseudo" placeholder="pseudo">
    </div>
    <div class="form-group">
        <input class = "m-auto form-control" type="password" name="password" placeholder="password">
    </div>
    <div class="form-group">
        <input class = "m-auto form-control" type="email" name="mail" placeholder="mail">
    </div>
    <div class="form-group">
        <input class = "m-auto form-control" type="text" name="firstname" placeholder="firstname">
    </div>
        <button type="submit" name="inserer" class="mt-2 btn btn-warning">S'inscrire</button>
        <a href="/login.php" class="pt-2">Déja un compte ? Connectez-vous</a>
</form>