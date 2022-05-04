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
             $nome_servidor = "localhost";
             $nome_usuario = "root";
             $senha = "root";
            // Criar conexão
            $conecta = new mysqli($nome_servidor, $nome_usuario, $senha);
            // Verificar Conexão
            if ($conecta->connect_error) {
                die("Conexão falhou: " . $conecta->connect_error."<br>");
            }
            echo "Conexão realizada com sucesso <br>";
        ?>
    </body>
</html>
