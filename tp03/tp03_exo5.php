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
        
        echo '<p>'; 
        $chaine='prof=lemercier,cours=web,salle=A002,date=09/03/2016,cours=php';
        $tabchaine=preg_split("/,|=/",$chaine);
        print_r($tabchaine);
        echo '</p>'; 
        
        //把这一行字符分成一个普通的array
        
        for($i=0;$i<count($tabchaine);$i++)
          {
           if($i%2==0)
            $liste_cle[]=$tabchaine[$i];
           else
            $liste_val[]=$tabchaine[$i];
          }
          
        //把这个array里的东西1，3，5分成一组；2，4，6分成一组
          
          $liste_cle=implode(":",$liste_cle);
          $liste_val=implode(":",$liste_val);
          
        //每组array转成chaine de caracteres
          
          $liste_cle_tab=explode(":",$liste_cle);
          $liste_val_tab=explode(":",$liste_val);
          
        //chaine de caracteres转成array

          echo '<p>';
          echo 'chaine_cle: ';
          print_r($liste_cle);
          echo '</p>';
          
          echo '<p>';
          echo 'chaine_val: ';
          print_r($liste_val);
          echo '</p>';
          
          echo '<p>';
          echo 'chaine_cle: ';
          print_r($liste_cle_tab);
          echo '</p>';
          
          echo '<p>';
          echo 'chaine_val: ';
          print_r($liste_val_tab);
          echo '</p>';
          
          $element= array_combine($liste_cle_tab, $liste_val_tab);
          
        //合并两个array：cle + val
          
          echo '<p>';
          print_r($element);
          echo '</p>';
          
          //合并表格的时候把两个相同cle合并了（只显示一个），
          //怎么在合并的时候两个都显示？
          

        ?>
    </pre>
    </body>
</html>
