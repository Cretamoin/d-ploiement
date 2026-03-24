<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/negatif.css">
    <title>Document</title>
</head>
<body>
    change
    <button onclick="document.body.classList.toggle('negatif')" id="negatifToggle">Night mode</button>
    <div id="all">
        <div id="container">
            <form method="POST" action="../php/inscription.php">
                <input type="text" id="mail" name="mail" placeholder="Mail" required autocomplete="off" class="principal" >
                <div>
                    <input type="password" name="code" placeholder="Mot de passe" required id="pwd" class="principal"> <input type="checkbox" onclick="pwd.type = this.checked ? 'text' : 'password'" tabindex="-1"  style="margin: 30px;"> 
                </div>
                <div>
                    <input type="password" name="verification" placeholder="Verification" required id="verification" class="principal">  <input type="checkbox" onclick="verification.type = this.checked ? 'text' : 'password'" tabindex="-1"  style="margin: 30px;"> 
                </div>
                <div>
                    <button type="submit" class="principal" id="end">Créer le compte</button>
                </div>
            </form>
        </div>
        <button id="lien"><a href="login.php" id="lien">Se connecter</a></button>
    </div>

    
</body> 
<script src="../js/alert.js"></script>
<script src="../js/mail.js" defer></script>
<script src="../js/Negatif.js"></script>
</html>