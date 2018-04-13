<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php

    function persistance($ligne){
    

    $file=fopen("test.csv","w")or die ("Unable to open file");
    fputcsv($file,$ligne);
    fclose($file);
    }
    
    
    ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

    </body>
</html>
