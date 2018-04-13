<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    
function listJour($label,$name){
    echo("\n<!--form_input : $label $name -->\n");
    echo(" <p>\n");
    echo(" <label>$label</$label>\n");
    echo(" <select name= '$name'> <br>");
    echo("<option value='lundi'>Lundi</option>");
    echo("<option value='mardi'>Mardi</option>");
    echo("<option value='mercredi'>Mercredi</option>");
    echo("<option value='jeudi'>Jeudi</option>");
    echo("<option value='vendredi'>Vendredi</option>");
    echo("<option value='samedi'>Samedi</option>");
    echo("<option value='dimanche'>Dimanche</option>");
    echo("</select><br>");
echo(" </p>\n");}




function listDate($label,$name){
    echo("\n<!--form_input : $label $name-->\n");
    echo(" <p>\n");
    echo(" <label>$label</$label>\n");
    echo(" <select name= '$name'> <br>");
    for($i=1;$i<=31;$i++){
        echo("<option value='$i'>$i</option>");
    }
    echo("</select><br>");
    echo(" </p>\n");
}

function listMois($label,$name){
    echo("\n<!--form_input : $label $name -->\n");
    echo(" <p>\n");
    echo(" <label>$label</$label>\n");
    echo(" <select name= '$name'> <br>");
    for($i=1;$i<=12;$i++){
        echo("<option value='$i'>$i</option>");
    }
    echo("</select><br>");
    echo(" </p>\n");
}

function listHeure($label,$name){
    echo("\n<!--form_input : $label $name-->\n");
    echo(" <p>\n");
    echo(" <label>$label</$label>\n");
    echo(" <select name= '$name'> <br>");
    for($i=8;$i<=18;$i++){
        for($m=0;$m<=40;$m=$m+20){
        echo("<option value='$i$m'>".$i."h".$m."</option>");}
    }
    echo("</select><br>");
    echo(" </p>\n");
}

function listSalle($label,$name){
    echo("\n<!--form_input : $label $name-->\n");
    echo(" <p>\n");
    echo(" <label>$label</$label>\n");
    echo(" <select name= '$name'> <br>");
    echo("<option value='p203'>P203</option>");
    echo("<option value='p204'>P204</option>");
    echo("<option value='a207'>A207</option>");
    echo("<option value='a210'>A210</option>");
    echo("<option value='k200'>K200</option>");
    echo("</select><br>");
echo(" </p>\n");}
?>


<html>
    <head>
        <title>tp05</title>
    </head>
    
    <body>
        <h2>Soutenance</h2>
        <table>
            <tr>
            <form class="LO07" method="get" action="tp05_exo2_soutenance_form.php">
            
                <?php
                require("tp05_exo2_soutenance_form_action_persistance.php");
           
            listJour("Jour", "jour");
            listDate("Date", "date");
            listMois("Mois", "mois");
            listHeure("Heure", "heure");
            listSalle("Salle", "salle");
            ?>
               <input type="submit" value="Envoyer"/> 
         <input type="reset" value="Annuler"/>  
        </form>
            </tr>
            <tr>
                <?php
                 if(isset($_GET["jour"])){
                    echo("<p>");
                    echo("liste des choix<br>");
                    echo("</p>");
                    $jour=$_GET["jour"];
                    $date = $_GET["date"];
                    $mois = $_GET["mois"];
                    $heure = $_GET["heure"];
                    $salle = $_GET["salle"];
                    echo("Jour : ".$jour."<br>");
                    echo("Date : ".$date."<br>");
                    echo("Mois : ".$mois."<br>");
                    echo("Heure : ".$heure."<br>");
                    echo("Salle : ".$salle."<br>");
                    
                    global $ligne;
                    $ligne=array($jour,$date,$mois,$heure,$salle);
                    
                    
                    persistance($ligne);
        
    
                  
                    
                 }