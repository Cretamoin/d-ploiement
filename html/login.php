<?php
    
    session_start();
    if (!isset($_SESSION['csrf'])) {
        $_SESSION['csrf'] = bin2hex(random_bytes(32));
    }
    if (isset($_SESSION['user_id'])) {
        header("Location: ../Portfolio/principal.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css   ">
    <link rel="stylesheet" href="../css/negatif.css">
    <title>Cretamoin</title>
</head>
<body>
    <button onclick="document.body.classList.toggle('negatif')" id="negatifToggle">Night mode</button>
    <div id="all">
        <div id="container">    
            <form method="POST" action="../php/connexion.php">
                <input type="text" name="mail" placeholder="E-mail" required autocomplete="off" class="principal" tabindex="-1">
                <div id="code">
                    <input type="password" name="code" placeholder="Mot de passe" required id="pwd" class="principal"><input type="checkbox" onclick="pwd.type = this.checked ? 'text' : 'password'" style="margin: 30px;" tabindex="-1">
                </div>
                <input type="hidden" name="csrf" value="<?= $_SESSION['csrf'] ?>">
                <div id="end">
                    <button type="submit" class="principal">Connexion</button>
                </div>
            </form>
        </div>
        <button id="lien"><a href="sign.php">Créer un compte</a></button>
        
    </div>
    
</body>
<script src="../js/alert.js"></script>
<script src="../js/mail.js"></script>
<script src="../js/Negatif.js"></script>
</html>