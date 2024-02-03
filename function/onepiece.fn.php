<?php 

function allPerson($db) {
    $sql = 'SELECT * FROM personnage';
    $requete = $db->query($sql);
    $personnages = $requete->fetchAll();
    return $personnages ;
};


function allFruits($db){
    $sql = 'SELECT * FROM fruit';
    $requete = $db->query($sql);
    $fruits = $requete->fetchAll();
    return $fruits ; 
}

function findFruit($db,$currentId){
    $sql = 'SELECT f.name AS fname, f.pathimg AS fpathimg , f.description AS fruit_desc, perso.description AS person_desc, perso.name, perso.pathimg 
    FROM personnage perso
    INNER JOIN fruit f ON perso.id = f.personnage_id
    WHERE f.id = ' . $currentId;
    $requete = $db->query($sql);
    $fruit = $requete->fetch();
    return $fruit;
}

?>