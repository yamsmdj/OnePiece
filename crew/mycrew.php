<?php
include_once dirname(__DIR__) . '/utilities/header.php';
include_once dirname(__DIR__) . '/function/crew.fn.php';
include_once dirname(__DIR__) . '/function/perso.fn.php';
$crews = getCrewById($db, $_GET['id']);
$persos = getPersoByCrew($db, $_GET['id']);

require __DIR__ . '/card.mycrew.php'; 

require_once dirname(__DIR__) . '/utilities/footer.php'; ?>