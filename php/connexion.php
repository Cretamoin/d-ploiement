<?php
    session_start();
    require 'bd.php';

    if (!isset($_POST['mail'], $_POST['code'])) exit;

    $mail = $_POST['mail'];
    $mdp  = $_POST['code'];

    $stmt = $pdo->prepare("SELECT id, mdp FROM users WHERE mail=?");
    $stmt->execute([$mail]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user){
        header("Location: ../html/login.html?err=user");
        exit;
    }

    if (!password_verify($mdp, $user['mdp'])){
        header("Location: ../html/login.html?err=mdp");
        exit;
    }

    $_SESSION['user_id'] = $user['id'];
    header("Location: ../html/acceuil.html");
    exit;
