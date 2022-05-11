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
        <form method="POST">
            Nome <input type="text" name="nome"><br>
            Cargo <input type="text" name="cargo"><br>
            Salário Bruto <input type="number" name="salarioB"><br>
            Desconto INSS <input type="number" name="desconto"><br>
            <input type="submit" value="Enviar">
        </form>
        <?php
             $nome = $_POST["nome"];
             $cargo = $_POST["cargo"];
             $salarioB = $_POST["salarioB"];
             $desconto = $_POST["desconto"];
             $salarioL = $salarioB-$salarioB*($desconto/100);
             
             
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
            
            $sql = "INSERT INTO `empresa`.`funcionaio`
(nome,
cargo,
salarioBruto,
salarioLiquido,
inss)
VALUES
('$nome',
'$cargo',
$salarioB,
$salarioL,
$desconto);";
            
            if ($conecta->multi_query($sql) === TRUE) {
                echo "Novos registros criados com sucesso<br>";
            } else {
                echo "Erro: " . $sql . "<br>" . $conecta->error."<br>";
            }
            $conecta->close();
        ?>
    </body>
</html>
