<?php
    require '../php/secure.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="principal.css">
    <link rel="stylesheet" href="menu.css">
    <title>Portfolio</title>

</head>
<body>
    <div id="btn" class="container" onclick="myFunction(this)">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
    </div>

    <div id="all">
        <div id="together">
            <div id="nom">
                RATSIMBAZAFY Lalarijaona Iharintsoa. <br> <br>
    
                Je suis un simple étudiant en informatique interressé par l'ingénerie et l'évolution de la technologie humaine. <br><br>
                Je suis née le 03 septembre 2006.
            </div>
        </div>
        <div id="photo">
            <img src="/Portfolio/Images/profie_picture.jpg" alt="" style="width: 400px;">
        </div>
    </div>  

    <footer>
        <div id="autre">
            <button>Projects</button>
            <button>Life</button>
        </div>

        <div id="vrai">
            <a href="">Sevices</a>
            <a href="">Contact</a>
            <a href="">Flux</a>
            <a href="">Autre</a>
        </div>
    </footer>
</body>
<script src="tpe.js"></script>
</html>