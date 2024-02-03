<?php 

function getPDOlink($config){

$dsn = "mysql:dbname={$config['dbname']};host={$config['dbhost']};port={$config['dbport']} ";


try {
    $db = new PDO($dsn, $config['dbuser'], $config['dbpass']);
    $db->exec("SET NAMES UTF8");
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
} catch (PDOException $e){
    exit ('Fail to acces database : ' . $e->getMessage());
}
}

?>