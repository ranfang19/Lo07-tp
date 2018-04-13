<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    
        $tabCapitalesUSA=array("Montgomery","Raleigh","Tallahassee","Atlanta",
              "Topeka","Augusta","Albany","Nashville");
    
  ?>
    
<html>
    <head>
        <meta charset="UTF-8">
        <title>TP03 Exo3</title>
    </head>
    <body>
        <pre>
        <?php
        
        $tabCapitalesUSA[]="Boston";
        print_r($tabCapitalesUSA);
        unset($tabCapitalesUSA[3]);
        print_r($tabCapitalesUSA);//序号不补位
        print_r(array_values($tabCapitalesUSA));//序号补位
        
        
        foreach ($tabCapitalesUSA as $key => $value) {
            echo '<p>';
            echo ("[".$key."]=>".$value);
            echo '</p>';
             }
        echo '<p>';     
        echo implode(';', $tabCapitalesUSA);
        echo '</p>';
        
        echo("[0]=>".$tabCapitalesUSA[0]."</br>");
        echo("[1]=>".$tabCapitalesUSA[1]."</br>");
        echo("[2]=>".$tabCapitalesUSA[2]."</br>");
        
        echo '<p>';
        echo("Le nombre d'élements du tableau: ". count($tabCapitalesUSA));
        echo '</p>';
        
        echo '<p>';
        sort($tabCapitalesUSA);
        print_r(array_values($tabCapitalesUSA));
        echo '</p>';
        
        //sort:abcd
        //rsort:dcba
        //asort:根据value
        //ksort:根据key
        //asort
        //krsort
        
        
        
        
        
        

             
        
        
        
        
        
        
        
        
        ?>
</pre>
    </body>
</html>
