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
            $dia=6;
            switch($dia){
                case 1:
                case 2:
                case 3:
                case 4:
                case 5:
                    echo "Dia Útil";
                    break;
                case 6:
                case 7:
                    echo "Final de semana";
                    break;
            }
        ?>
    </body>
</html>
