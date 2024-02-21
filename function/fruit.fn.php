<?php


function getAllFruits($db)
{
    $sql = 'SELECT * FROM fruit';
    $requete = $db->query($sql);
    $fruits = $requete->fetchAll();
    return $fruits;
}
function getRandomFruit($db)
{
    $sql = 'SELECT f.name AS namefruit, f.pathimg AS imgfruit,
    p.name AS nameperso, p.pathimg AS imgperso
    FROM fruit f
    INNER JOIN personnage p ON p.id = f.personnage_id 
    ORDER BY RAND()';
    $requete = $db->query($sql);
    $fruit = $requete->fetch();
    return $fruit;
}
function getFruitById($db,$currentId){
    $sql = "SELECT f.id, f.name, f.genre, f.price, f.pathimg, f.description  
    FROM fruit f
    WHERE id = ?";
    $query = $db->prepare($sql);
    $query->execute([$currentId]);
}

function getFruitCrewById($db, $current_id)
{
    $sql = 'SELECT f.name AS fname, f.pathimg AS fpathimg , f.description AS fruit_desc, perso.id AS p_id,
     perso.description AS person_desc, perso.name AS p_name, perso.pathimg AS p_pathimg
    FROM personnage perso
    INNER JOIN fruit f ON perso.id = f.personnage_id
    WHERE f.id = :current_id';
    $requete = $db->prepare($sql);
    $requete->bindParam(':current_id', $current_id);
    $requete->execute();
    $myFruit = $requete->fetch();
    return $myFruit;
}
function getFruitByGenre($db, $genre)
{
    $sql =  "SELECT * FROM fruit WHERE genre = '$genre'";
    $requete = $db->query($sql);
    $fruits = $requete->fetchAll();
    return $fruits;
}
function updateFruit($db, $name, $genre, $price, $pathimg, $personnage_id, $desc, $currentId)
{
    $sql = "UPDATE `fruit` SET  `name`= ? ,`genre` = ?,`price` = ?, `pathimg`= ?, `description` = ?
    WHERE id = :currentId";
    $stmt = $db->prepare($sql);
    $stmt->execute([$name, $genre, $price, $pathimg, $personnage_id, $desc, $currentId]);
}

function addFruit($db, $name, $genre, $price, $pathimg, $personnage_id, $desc)
{
    $sql = "INSERT INTO `perso` (`name`, `captain`, `pathimg`, `description`) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->execute([$name, $genre, $price, $pathimg, $personnage_id, $desc]);
}

function removeFruit($db, $currentId)
{
    $sql = "DELETE from `fruit` WHERE `id` = $currentId";
    $db->query($sql);
}
