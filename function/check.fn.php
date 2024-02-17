<?php
function isConnected (): bool {
    if (session_status()=== PHP_SESSION_NONE) {
        session_start();
    }
 return !empty($_SESSION['connecte']);
}

function sendUserConnect(): void {
    if(!isConnected()){
        header('Location: /connexion/login.php');
        exit();
    }
}

// function isAdmin() {
//     // SI je suis connecter en ADMIN alors
//     // l onglet AJOUT apparait dans le header
//     if ($username == 'username')
// }