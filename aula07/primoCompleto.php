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
        <form method="post">
            <input type="number" name="numero">
            <input type="submit" value="Enviar">
        </form>
        <?php
            $num=$_POST["numero"];
            for($j=2;$j<=$num;$j++){
                $cont=0;
                for($i=1;$i<=$j;$i++){
                    if($j%$i==0){
                        $cont++;
                    }
                }
                if($cont==2){
                    echo "$j ";
                }
            } 
            echo "são números primos!";
        ?>
    </body>
</html>
