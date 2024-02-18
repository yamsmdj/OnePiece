<!-- function personnage -->
<?php
function getAllPerso($db)
{
    $sql = 'SELECT * FROM personnage';
    $requete = $db->prepare($sql);
    $requete->execute();
    $personnages = $requete->fetchAll();
    return $personnages;
};

function getPersoById($db, $currentId)
{
    $sql = "SELECT p.id, p.name AS nameperso, p.pathimg AS imgperso, p.price, p.description, p.crew_id,
    c.name AS namecrew, c.pathimg AS imgcrew,
    f.name AS namefruit, f.pathimg AS imgfruit
    FROM personnage p
    LEFT JOIN crew c ON p.crew_id = c.id
    LEFT JOIN fruit f ON p.id = f.personnage_id
    WHERE p.id = :currentId";

    $requete = $db->prepare($sql);
    $requete->bindParam(":currentId", $currentId);
    $requete->execute();

    $myPerso = $requete->fetch();
    return $myPerso;
}

function getPersoByCrew($db, $currentId)
{
    $sql = "SELECT p.id AS idperso , p.pathimg AS persoimg , p.name AS personame, p.crew_id
    FROM personnage p
    INNER JOIN crew ON crew.id = crew_id
    WHERE $currentId = crew.id";
    $requete = $db->query($sql);
    $perso = $requete->fetchAll();
    return $perso;
}

function updatePerso($db, $name, $pathimg, $price, $desc, $crew_id, $currentId)
{
    $sql = "UPDATE `perso` SET  `name`= ?,`pathimg` = ?, `price` = ?, `description` = ?, `crew_id` = ?
    WHERE id = :currentID";
    $stmt = $db->prepare($sql);
    $stmt->execute([$name, $pathimg, $price, $desc, $crew_id, $currentId]);
}

function addPerso($db, $name, $pathimg, $price, $desc, $crew_id)
{
    $sql = "INSERT INTO `perso` (`name`, `pathimg`, `price`, `description`, `crew_id`) VALUES (?, ?, ?, ?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->execute([$name, $pathimg, $price, $desc, $crew_id]);
}

function removePerso($db, $currentId)
{
}
