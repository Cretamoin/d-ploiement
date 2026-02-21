<?php
    require '/../php/secure.php';
    $env = parse_ini_file(__DIR__.'/../secure/.env');
    
    $name = $env['DB_NAME'];
    $server = $env['DB_HOST'];
    $user = $env['DB_USER'];
    $mdp = $env['CODE'];

    $pdo = new PDO (
        "mysql:host=$server;dbname=$name;charset=utf8mb4",
        $user,
        $mdp,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );