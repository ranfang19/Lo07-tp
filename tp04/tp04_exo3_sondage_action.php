<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>sondage action</title>
    </head>
    <body>
        <ul>
        <?php
        echo("<ul>");
        printf("<li><b>Nom</b>=%s</li>", $_POST["nom"]);
        printf("<li><b>Prénom</b>=%s</li>", $_POST["prénom"]);
        printf("<li><b>Sexe</b>=%s</li>", $_POST["sexe"]);
        echo("<li><b>Opérateur</b></li>");
        echo("</ul>");
        echo("<ul>");
        printf("<li><b>Orange</b>=%s</li>", $_POST["orange"]);
        printf("<li><b>SFR</b>=%s</li>", $_POST["sfr"]);
        printf("<li><b>Bouygues</b>=%s</li>", $_POST["bouygues"]);
        printf("<li><b>Free</b>=%s</li>", $_POST["free"]);
        printf("<li><b>Virgin</b>=%s</li>", $_POST["virgin"]);
        printf("<li><b>Autres</b>=%s</li>", $_POST["autres"]);
        echo("</ul>");
        echo("<li><b>Services(Pour les choix multiples, tapez command)</b></li>");
        echo("<ul>");
        foreach ($_POST["services"] as $element) {
            echo("<li>$element</li>");
            }
        echo("</ul>");
        echo("<li><b>Veuillez choisir le prix mensuel le plus proche</b></li>");
        echo("<ul>");
        foreach ($_POST["prix"] as $element) {
            echo("<li>$element</li>");
            }
        echo("</ul>");
        
        
        
        
        
        
        ?>
        </ul>
    </body>
</html>

