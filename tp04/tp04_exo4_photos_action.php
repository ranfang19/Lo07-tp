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
        <?php
        echo("<ul>");
        printf("<li><b>Nom</b>=%s<li>", $_POST["nom"]);
        printf("<li><b>Prénom</b>=%s<li>", $_POST["prénom"]);
        printf("<li><b>Email</b>=%s<li>", $_POST["email"]);
        echo("</ul>");
        
        echo("<ul>");
        
        echo("<li>");
        if($_FILES["fileToUpload1"]["error"]>0){
            echo "Error;".$_FILES["fileToUpload1"]["error"]."<br/>";
        }
        else{
        echo"Upload:".$_FILES["fileToUpload1"]["name"]."<br/>";
        echo"Type:".$_FILES["fileToUpload1"]["type"]."<br/>";
        echo"Size:".$_FILES["fileToUpload1"]["size"]."<br/>";
        echo"Stored in:".$_FILES["fileToUpload1"]["tmp_name"]."<br/>";
        }
        echo("</li>");
        
                
        echo("<li>");
        if($_FILES["fileToUpload2"]["error"]>0){
            echo "Error;".$_FILES["fileToUpload1"]["error"]."<br/>";
        }
        else{
        echo"Upload:".$_FILES["fileToUpload2"]["name"]."<br/>";
        echo"Type:".$_FILES["fileToUpload2"]["type"]."<br/>";
        echo"Size:".$_FILES["fileToUpload2"]["size"]."<br/>";
        echo"Stored in:".$_FILES["fileToUpload2"]["tmp_name"]."<br/>";
        }
        echo("</li>");
        
                
        echo("<li>");
        if($_FILES["fileToUpload3"]["error"]>0){
            echo "Error;".$_FILES["fileToUpload3"]["error"]."<br/>";
        }
        else{
        echo"Upload:".$_FILES["fileToUpload3"]["name"]."<br/>";
        echo"Type:".$_FILES["fileToUpload3"]["type"]."<br/>";
        echo"Size:".$_FILES["fileToUpload3"]["size"]."<br/>";
        echo"Stored in:".$_FILES["fileToUpload3s"]["tmp_name"]."<br/>";
        }
        echo("</li>");
        
        
        if (file_exists("documents/" . $_FILES["fileToUpload1"]["name"]))
          {
            echo $_FILES["fileToUpload1"]["name"] . " already exists. ";
           }
        else
          {
            move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"],
            "documents/" . $_FILES["file"]["name"]);
            echo "Stored in: " . "documents/" . $_FILES["fileToUpload1"]["name"];
          }
          
          
          
         if (file_exists("documents/" . $_FILES["fileToUpload2"]["name"]))
          {
            echo $_FILES["fileToUpload2"]["name"] . " already exists. ";
           }
        else
          {
            move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"],
            "documents/" . $_FILES["file"]["name"]);
            echo "Stored in: " . "documents/" . $_FILES["fileToUpload2"]["name"];
          }
          
          
          if (file_exists("documents/" . $_FILES["fileToUpload3"]["name"]))
          {
            echo $_FILES["fileToUpload3"]["name"] . " already exists. ";
           }
        else
          {
            move_uploaded_file($_FILES["fileToUpload3"]["tmp_name"],
            "documents/" . $_FILES["file"]["name"]);
            echo "Stored in: " . "documents/" . $_FILES["fileToUpload1"]["name"];
          }


        
        
        
        
        
        
        echo("</ul>");
        
        
        
        
        
        
        
        ?>
    </body>
</html>
