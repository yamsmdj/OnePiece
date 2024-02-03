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

?>