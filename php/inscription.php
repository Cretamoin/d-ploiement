<?php
    require 'bd.php';

    if (!isset($_POST['mail'], $_POST['code'],  $_POST['verification'])) exit;

    $mail = $_POST['mail'];
    $pwd  = $_POST['code'];
    
    $verif  = $_POST['verification'];
    

    if(($pwd != $verif)){
        header("Location: ../html/sign.html?err=inc");
        exit;
    }
    if (!str_ends_with($mail, '@gmail.com')) {
        $mail .= '@gmail.com';
    }

    $hash = password_hash($_POST['code'], PASSWORD_DEFAULT);
    $stmt = $pdo->prepare("SELECT id FROM users WHERE mail=?");
    $stmt->execute([$mail]);
    if ($stmt->fetch()) exit("user existant");

    $stmt = $pdo->prepare("INSERT INTO users (mail, mdp) VALUES (?, ?)");
    $stmt->execute([$mail, $hash]);

    header("Location: ../html/login.html");
    exit;
