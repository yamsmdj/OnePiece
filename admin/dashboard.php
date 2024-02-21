<?php
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'utilities/header.php';
require_once dirname(__DIR__) . '/function/crew.fn.php';
sendUserConnect();
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'file_upload.php'; 

$myCrew = getCrewById($db, !empty($_GET['id']));

?>
