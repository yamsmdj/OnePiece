<?php

function getAllCrewPersoFruit($db)
{
    $sql = "SELECT p.id , p.name AS personame, c.name AS crewname,c.pathimg, f.name AS fruitname 
    FROM `personnage` p 
    INNER JOIN `crew` c ON p.crew_id = c.id
    LEFT JOIN `fruit` f ON f.personnage_id = p.id 
    ORDER BY id ";
    $query = $db->query($sql);
    $crewPersoFruit = $query->fetchAll();
    return $crewPersoFruit;
}
