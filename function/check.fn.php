<?php

function sendUserConnect(): void {
    if(!isConnected()){
        header('Location: /login.php');
        exit();
    }
}

