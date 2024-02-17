<?php
function isConnected (): bool {
    if (session_status()=== PHP_SESSION_NONE) {
        session_start();
    }
 return !empty($_SESSION['connecte']);
}

function sendUserConnect(): void {
    if(!isConnected()){
        header('Location: /login.php');
        exit();
    }
}

