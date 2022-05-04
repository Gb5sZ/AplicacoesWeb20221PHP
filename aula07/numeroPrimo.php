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
            $x=5;
            $cont=0;
            for($i=1;$i<=$x;$i++){
                if($x%$i==0){
                    $cont++;
                }
            }
            if($cont==2){
                echo "É primo";
            } else {
                echo "não é primo";
            }
        ?>  
        
    </body>
</html>
