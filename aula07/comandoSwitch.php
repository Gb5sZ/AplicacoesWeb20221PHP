<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php 
            $var="Eu não quero por valor"; 
            switch($var){ 
               case "1": 
                 echo "armazenado o valor 1";
                 break; 
               case "2": 
                 echo "armazenado o valor 2";
                 break;
               case "3": 
                 echo "armazenado o valor 3";
                 break; 
               default: 
                 echo "não foi armazenado nem 1, nem 2 e nem 3";
                 break; 
            } 
         ?>
    </body>
</html>
