<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        
        $hashCapitales = array(
           "France" => array("Paris"),
           "Italie" => array("Rome"),
           "belgique" => array("Bruxelles"),
           "Espagne" => array("Madrid"),
           "Allemagne" => array("Berlin"),
           "Portugal" => array("Lisbonne")
            );
        //写成kay对value的array
        
         print_r($hashCapitales);
         
         echo '<p>';
         echo("La capitale d'Allemagne est: ".$hashCapitales["Allemagne"][0]);
         echo '</p>';
         
        //[][]!!!重要！！！
        //怎么在已经存在key里面加入一个数据？tab[aa]=''的话会覆盖掉
         
        echo '<p>'; 
        echo ("<ol>");
        foreach ($hashCapitales as $pays => $capitals) {
            echo ("<li>$pays</li>");
            echo (" <ul>");
            foreach ($capitals as $elem) 
              {
              echo ("  <li>$elem</li>");
              }
            echo (" </ul>");   
            } 
            echo ("</ol>");
            echo '</p>';
            
        //foreach显示associatif杂表格
         
         
        ?>
</pre>
    </body>
</html>
