<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Contact action</title>
    </head>
    <body>
        <ul>
        <?php
        printf("<li><b>Nom</b>=%s</li>", $_GET["nom"]);
        printf("<li><b>Prénom</b>=%s</li>", $_GET["prénom"]);
        printf("<li><b>Sexe</b>=%s</li>", $_GET["sexe"]);
        echo("<li><b>Opérateur</b></li>");
        echo("<ul>");
        printf("<li><b>Orange</b>=%s</li>", $_GET["orange"]);
        printf("<li><b>SFR</b>=%s</li>", $_GET["sfr"]);
        printf("<li><b>Bouygues</b>=%s</li>", $_GET["bouygues"]);
        printf("<li><b>Free</b>=%s</li>", $_GET["free"]);
        printf("<li><b>Virgin</b>=%s</li>", $_GET["virgin"]);
        printf("<li><b>Autres</b>=%s</li>", $_GET["autres"]);
        echo("</ul>");
        echo("<li><b>Services(Pour les choix multiples, tapez command)</b></li>");
        echo("<ul>");
        foreach ($_GET["services"] as $element) {
            echo("<li>$element</li>");
            }
        echo("</ul>");
        echo("<li><b>Veuillez choisir le prix mensuel le plus proche</b></li>");
        echo("<ul>");
        foreach ($_GET["prix"] as $element) {
            echo("<li>$element</li>");
            }
        echo("</ul>");
        
        
        
        
        
        
        ?>
        </ul>
    </body>
</html>

