<?php
    session_start();
    require 'bd.php';

    if (
    !isset($_POST['csrf'], $_SESSION['csrf']) ||
        !hash_equals($_SESSION['csrf'], $_POST['csrf'])
    ) {
        exit('CSRF');
    }

    if (!isset($_POST['mail'], $_POST['code'])) exit;

    
    $mail = $_POST['mail'];
    $mdp  = $_POST['code'];

    $stmt = $pdo->prepare("SELECT id, mdp FROM users WHERE mail=?");
    $stmt->execute([$mail]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user){
        header("Location: ../html/login.php?err=user");
        exit;
    }

    if (!password_verify($mdp, $user['mdp'])){
        header("Location: ../html/login.php?err=mdp");
        exit;
    }

    session_regenerate_id(true);
    $_SESSION['user_id'] = $user['id'];
    header("Location: ../Portfolio/principal.php");
    exit;
