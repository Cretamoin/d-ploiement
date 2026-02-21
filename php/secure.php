<?php   
    $session_start();
    $_SESSION['csrf'] = bin2hex(random_bytes(32));
    if(!isset($_SESSION['user_id'])){
        header('Location: /../html/login.php?err=lost');
        exit;
    }