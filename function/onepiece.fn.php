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

function myPerso($db,$currentId){
    $sql = "SELECT p.id, p.name AS nameperso  , p.pathimg AS imgperso, p.price, p.description, p.crew_id,
    c.name AS namecrew, c.pathimg AS imgcrew,
    f.name AS namefruit , f.pathimg AS imgfruit
    FROM personnage p
    INNER JOIN crew c ON p.crew_id = c.id
    INNER JOIN fruit f ON p.id = f.personnage_id
    WHERE p.id = $currentId;";
    $requete = $db->query($sql);
    $myPerso = $requete->fetch();
    return $myPerso;
}


function findFruit($db,$currentId){
    $sql = 'SELECT f.name AS fname, f.pathimg AS fpathimg , f.description AS fruit_desc, perso.id AS p_id, perso.description AS person_desc, perso.name AS p_name, perso.pathimg AS p_pathimg
    FROM personnage perso
    INNER JOIN fruit f ON perso.id = f.personnage_id
    WHERE f.id = ' . $currentId;
    $requete = $db->query($sql);
    $myFruit = $requete->fetch();
    return $myFruit;
    
}
function typeFruit($db,$genre) {
    $sql =  "SELECT * FROM fruit WHERE genre = '$genre' 
    UNION
    SELECT * FROM fruit WHERE NOT EXISTS (SELECT * FROM fruit WHERE genre = '$genre')";
    $requete = $db->query($sql);
    $fruits = $requete->fetchAll();
    return $fruits;
}

function allCrew($db){
    $sql = 'SELECT * FROM crew';
    $requete = $db->query($sql);
    $crews = $requete->fetchAll();
    return $crews;
}

function myCrew($db,$currentId){
    $sql = "SELECT c.name, c.pathimg AS crewimg, c.description AS crewdesc, 
    p.pathimg AS persoimg , p.name AS personame
    FROM crew c
    INNER JOIN personnage p ON p.crew_id = c.id
    WHERE c.id = $currentId";
    $requete = $db->query($sql);
    $crews = $requete->fetch();
    return $crews;
}
function myPersotoCrew($db, $currentId){
    $sql = "SELECT p.pathimg AS persoimg , p.name AS personame, p.crew_id
    FROM personnage p
    INNER JOIN crew ON crew.id = crew_id
    WHERE $currentId = crew.id";
    $requete = $db->query($sql);
    $perso = $requete->fetchAll();
    return $perso;
}


?>