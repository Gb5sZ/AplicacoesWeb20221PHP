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
            Nome <input type="text" maxlength="10" name="nome">
            <br>Idade <input type="number" name="idade">
            <br>E-mail <input type="email" name="email">
            <br>Senha <input type="password" name="senha">
            <br><input type="submit" value="Enviar">
        </form>
        <?php
            $nome = "";
            $nome = $_POST["nome"];
            $idade = $_POST["idade"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            if(strlen($nome)>10 and empty($nome)){
                echo "Tamanho do nome é inválido!";
            } else {
                echo "$nome<br>$idade<br>$email<br>$senha";
            }
        ?>
    </body>
</html>
