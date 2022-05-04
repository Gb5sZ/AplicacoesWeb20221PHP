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
        <form>
            Texto
            <input type="text" name="texto">
            <input type="submit">
        </form>
        <?php
            $texto = $_GET["texto"];
            $contA=0;$contE=0;$contI=0;$contO=0;$contU=0;
            for($i=0;$i<strlen($texto);$i++){
                if($texto[$i]=="a" OR $texto[$i]=="A"){
                    $contA++;
                }
                elseif($texto[$i]=="e" OR $texto[$i]=="E"){
                    $contE++;
                }
                elseif($texto[$i]=="i" OR $texto[$i]=="I"){
                    $contI++;
                }
                elseif($texto[$i]=="o" OR $texto[$i]=="O"){
                    $contO++;
                }
                elseif($texto[$i]=="u" OR $texto[$i]=="U"){
                    $contU++;
                }
            }
            echo "A: ".$contA."<br>E: ".$contE."<br>I: ".$contI."<br>O: ".$contO."<br>U: ".$contU;
        ?>
    </body>
</html>
