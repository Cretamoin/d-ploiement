<?php
    session_start();
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Pragma: no-cache");
    if (!isset($_SESSION['user_id'])) {
        header("Location: ../Html/login.php");
        exit;
    }
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/principal.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/nocturne.css">
    <title>Portfolio</title>

</head>

<body>
    <header>
        <form action="../php/logout.php">
            <button id="btn" class="openbtn" onclick="openNav()">
                <div class="container" onclick="myFunction(this)">
                    <div class="bar1" style="background-color: white;"></div>
                    <div class="bar2" style="background-color: white;"></div>
                    <div class="bar3" style="background-color: white;"></div>
                </div>
            </button>
        </form>
    </header>
    <div id="corp">
        <div id="nom">
            <h2>
            </h2>
        </div>
        <div id="image">
            <img src="../Portfolio/Images/Image.jpeg" alt="profile picture">
        </div>
    </div>

    <footer id="deux">
        <div id="endcenter">
            <p id="opening">HERE WE ARE</p>
            <form action="../php/redirect.php" id="change" method="GET">
                <select name="lien">
                    <option value="projet 1" class="viewer">Projet n°1</option>
                    <option value="download" class="viewer">CV</option>
                </select>
                <button type="submit">Visiter</button>
            </form>
        </div>
        <div id="figure1">
            <div id="content">
                <div id="first">
                    <div id="nocturne1">
                        <h4>Mes Compétences</h4>
                        <ul>
                            <li>C++</li>
                            <li>C</li>
                            <li>HTML</li>
                            <li>CSS</li>
                            <li>PHP</li>
                            <li>JavaScript</li>
                            <li>PYTHON</li>
                            <li>NestJS</li>
                            <li>Mysql</li>
                            <li>PostgreSQL</li>
                        </ul>
                    </div>
                </div>
                <div id="second">
                    <div id="nocturne2">
                        <h4>Informations personnels</h4>
                        <ul>
                            <li>
                                <p>Je suis un garçon tout à fait normal qui a 18 ans qui vit et est encore dépendant de
                                    ses parents</p>
                            </li>
                            <li>
                                <p>J'ai 1m74</p>
                            </li>
                            <li>
                                <p>Un peu sportif et qui aime bien les défis et débats</p>
                            </li>
                            <li>
                                <p>J'aime bien aussi les personnes classes</p>
                            </li>
                            <li>
                                <p>J'aime les filles</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="third">
                <div id="nocturne3">
                    <h4>Centre d'interêt</h4>
                    <ul>
                        <li>Basket ball</li>
                        <li>Musique</li>
                        <li>Coder</li>
                        <li>Arts</li>
                        <li>Arts martiaux</li>
                        <li>Discuter</li>
                        <li>Observation</li>

                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="../js/tpe.js"></script>
<script src="../js/liste_magic.js"></script>
<script src="../js/page.js"></script>
</html>