<!-- FICHIER FONCTION UTILISATEUR -->
<?php

// SYSTEME CONNEXION/INSCRIPTION


function sendUserConnect(): void
{
    if (!isConnected()) {
        header('Location: /connexion/login.php');
        exit();
    }
}

function isConnected(): bool
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    return !empty($_SESSION['connecte']);
}
function Authentification($db, $username, $password)
{
    $sql = "SELECT u.id, u.username, u.password,u.role_id FROM users u
LEFT JOIN role_users r ON r.role = u.id
WHERE username = :username ";
    $query = $db->prepare($sql);
    $query->bindParam(':username', $username);
    $query->execute();
    $user = $query->fetch();
    if (!$user) {
        die('user incorrect');
    }
    if (!$password) {
        die('test incorrect');
    }
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    $_SESSION['connecte'] = 1;
    $_SESSION['user'] = [
        "id" => $user['id'],
        "username" => $user["username"],
        "user_role" => $user['role_id']
    ];
    header('Location: ../index.php');
    exit();
}
function register($db)
{
    var_dump('ok');
    $pseudo = $_POST['pseudo'];
    $password = $_POST['password'];
    $mail = $_POST['mail'];
    $firstname = $_POST['firstname'];
    $roleid = 2 ;


    if (isset($_POST)) {
        $sql = "INSERT INTO users (`username`, `password`, `role_id`, `email`, `firstname`) VALUES (?, ?, ?, ?, ?)";
        $query = $db->prepare($sql);
        if($query->execute([$pseudo, $password, $roleid, $mail, $firstname])){
        }else{
            var_dump('pasok');
        };
    }
}
