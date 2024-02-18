<?php

require_once dirname(__DIR__) . '/utilities/header.php';


$type = empty($_GET['type']) ? 'personnage' : $_GET['type'];


if ($type === 'personnage') {
    $tables = 'personnage';
    $foreign = 'crew_id';
} elseif ($type === 'fruit') {
    $tables = 'fruit';
    $foreign = 'personnage_id';
} else {
    throw new Exception('Unknow type' . $type);
}


$query = $db->prepare("SELECT * FROM $tables WHERE $foreign = ?");
$query->execute([$_GET['filter']]);
$items = $query->fetchAll();
header('Content-Type: application/json');
echo json_encode(array_map(function ($item) {
    return [
        'label' => $item['name'],
        'value' => $item['id']
    ];
}, $items));
