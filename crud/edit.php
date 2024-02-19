<?php
require_once dirname(__DIR__) . '/function/crew.fn.php';
$current_id = $_GET['id'];
$myCrew = getCrewById($db, $current_id);

if (isset($_POST) && !empty($_POST)) {
    $nom = $_POST['name'];
    $captain = $_POST['captain'];
    $pathimg = 'assets/img/crew/' . $_POST['pathimg'];
    $desc = $_POST['description'];

    $sql = "UPDATE `crew` SET `name` = ? ,`captain` = ? ,`pathimg` = ? , `description` = ?
    WHERE id = ? ";
    $stmt = $db->prepare($sql);
    $stmt->execute([$nom, $captain, $pathimg, $desc, $current_id]);
}

// var_dump($_SERVER);


require_once dirname(__DIR__) . '/utilities/form/crew.form.php';
