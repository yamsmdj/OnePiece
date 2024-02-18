<?php 
function allPerson($db) {
    $sql = 'SELECT * FROM personnage';
    $requete = $db->prepare($sql);
    $requete->execute();
    $personnages = $requete->fetchAll();
    return $personnages ;
};
function allFruits($db){
    $sql = 'SELECT * FROM fruit';
    $requete = $db->query($sql);
    $fruits = $requete->fetchAll();
    return $fruits ; 
}
function singleFruit($db){
    $sql = 'SELECT f.name AS namefruit, f.pathimg AS imgfruit,
    p.name AS nameperso, p.pathimg AS imgperso
    FROM fruit f
    INNER JOIN personnage p ON p.id = f.personnage_id 
    ORDER BY RAND()';
    $requete = $db->query($sql);
    $fruit = $requete->fetch();
    return $fruit ; 
}
function myPerso($db,$currentId){
    
    $sql = "SELECT p.id, p.name AS nameperso  , p.pathimg AS imgperso, p.price, p.description, p.crew_id,
    c.name AS namecrew, c.pathimg AS imgcrew,
    f.name AS namefruit , f.pathimg AS imgfruit
    FROM personnage p
    LEFT JOIN crew c ON p.crew_id = c.id
    LEFT JOIN fruit f ON p.id = f.personnage_id
    WHERE p.id = :currentId ;";

    $requete = $db->prepare($sql);
    $requete->bindParam(":currentId", $currentId);
    $requete->execute();
    
    $myPerso = $requete->fetch();
    return $myPerso;
}
function findFruit($db,$currentId){
    $sql = 'SELECT f.name AS fname, f.pathimg AS fpathimg , f.description AS fruit_desc, perso.id AS p_id,
     perso.description AS person_desc, perso.name AS p_name, perso.pathimg AS p_pathimg
    FROM personnage perso
    INNER JOIN fruit f ON perso.id = f.personnage_id
    WHERE f.id = ' . $currentId;
    $requete = $db->query($sql);
    $myFruit = $requete->fetch();
    return $myFruit;
    
}
function typeFruit($db,$genre) {
    $sql =  "SELECT * FROM fruit WHERE genre = '$genre'";
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
    $sql = "SELECT p.id AS idperso , p.pathimg AS persoimg , p.name AS personame, p.crew_id
    FROM personnage p
    INNER JOIN crew ON crew.id = crew_id
    WHERE $currentId = crew.id";
    $requete = $db->query($sql);
    $perso = $requete->fetchAll();
    return $perso;
}
// BONUS // 
function adaptUrl($url){
    if (PHP_OS == 'Darwin') {
        $DirectorSepare = str_replace('/', DIRECTORY_SEPARATOR, $url);
    }
    return $DirectorSepare;
}
// SYSTEME CONNEXION/INSCRIPTION
function isConnected (): bool {
    if (session_status()=== PHP_SESSION_NONE) {
        session_start();
    }
 return !empty($_SESSION['connecte']);
}
function Authentification($db, $username , $password){
    $sql = "SELECT u.id, u.username, u.password,u.role_id FROM users u 
    LEFT JOIN role_users r ON r.role = u.id
    WHERE username = :username ";
    $query = $db->prepare($sql);
    $query->bindParam(':username', $username);
    $query->execute();
    $user=$query->fetch();
    if (!$user) {
        die('user incorrect');
    }
    if (!$password) {
     die('test incorrect');
    }
    if (session_status()=== PHP_SESSION_NONE){
        session_start();
      }
    $_SESSION['connecte'] = 1;
    $_SESSION['user']= [
        "id" => $user['id'],
        "username" => $user["username"],
        "user_role" => $user['role_id']
    ];
    header('Location: /index.php');
    exit();
}
function register($db){
    $pseudo = $_POST['pseudo'];
    $password = $_POST['password'];
    $mail = $_POST['mail'];
    $firstname = $_POST['firstname'];

    if (isset($_POST) && !empty($_POST)) {
        $sql = "INSERT INTO users (`username`, `password`,`role_id`, `email`, `firstname`) VALUES (:pseudo,:password,2,:mail,:firstname)";
        $query = $db->prepare($sql);
        $query->bindParam(':pseudo', $pseudo);
        $query->bindParam(':password', $password);
        $query->bindParam(':mail', $mail);
        $query->bindParam(':firstname', $firstname);
        $query->execute();
    }
}

?>