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
            $x=6;
            $cont=0;
            for($i=1;$i<=$x;$i++){
                if($x%$i==0){
                    $cont++;
                }
            }
            if($cont==2){
                echo "O número $x é primo!";
            } else
                echo "O número $x não é primo!";
        ?>
    </body>
</html>
