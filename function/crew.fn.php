<!-- FONCTION EQUIPAGE -->
<?php
function getAllCrew($db)
{
    $sql = 'SELECT * FROM crew';
    $requete = $db->query($sql);
    $crews = $requete->fetchAll();
    return $crews;
}

function getCrewById($db, $currentId)
{
    $sql = "SELECT c.name, c.pathimg AS crewimg, c.description AS crewdesc,
p.pathimg AS persoimg , p.name AS personame
FROM crew c
INNER JOIN personnage p ON p.crew_id = c.id
WHERE c.id = :current_id";
    $requete = $db->prepare($sql);
    $requete->bindParam(':current_id', $currentId);
    $requete->execute();
    $crews = $requete->fetch();
    return $crews;
}

function updateCrew($db, $name, $captain, $pathimg, $desc, $currentId)
{
    $sql = "UPDATE `crew` SET  `name`= ?,`captain` = ?,`pathimg` = ?, `description` = ?
    WHERE id = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$name, $captain, $pathimg, $desc, $currentId]);
}

function addCrew($db, $name, $captain, $pathimg, $desc)
{
    $sql = "INSERT INTO `perso` (`name`, `captain`, `pathimg`, `description`) VALUES (?, ?, ?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->execute([$name, $captain, $pathimg, $desc]);
}

function removeCrew($db, $currentId)
{
    $sql = "DELETE from `crew` WHERE `id` = $currentId";
    $db->query($sql);
}
