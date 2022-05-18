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
            <input type="submit" value="Inserir" name="inserir">
            <input type="submit" value="Deletar" name="deletar">
            <input type="submit" value="Atualizar" name="alterar">
            <input type="submit" value="Localizar" name="localizar">
        </form>
        <?php
            include 'Funcionario.php';
            $funcionario = new Funcionario(
                    $_POST["nome"],
                    $_POST["cargo"],
                    $_POST["salarioB"],
                    $_POST["desconto"]);
            
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
            
            if(isset($_POST["localizar"])){
                 $sql = "select * from empresa.funcionaio WHERE nome='$funcionario->nome' and cargo='$funcionario->cargo'";
                $resultado = $conecta->query($sql);
                if ($resultado->num_rows > 0) {
                    while($linha = $resultado->fetch_assoc()) {
                        echo "id: " . $linha["id"]. " - Nome: " . $linha["nome"]. " " . $linha["cargo"]. " " . $linha["salarioBruto"]." " . $linha["salarioLiquido"]."<br>";
                    }
                } else {
                    echo "Usuário não encontrado!";   
                }
            } elseif(isset($_POST["alterar"])){
                $sql = "UPDATE `empresa`.`funcionaio`
                        SET
                        `salarioBruto` = $salarioB,
                        `salarioLiquido` = $salarioL,
                        `inss` = $desconto
                        WHERE nome='$funcionario->nome' and cargo='$funcionario->cargo'";
                if ($conecta->query($sql)===TRUE){
                    echo "Usuário alterado com sucesso!";
                }
                else {
                    echo "Usuário não encontrado!";
                } 
            } elseif(isset($_POST["deletar"])){
                $sql = "delete from empresa.funcionaio WHERE nome='$funcionario->nome' and cargo='$funcionario->cargo'";
                if ($conecta->query($sql)===TRUE){
                    echo "Usuário deletado com sucesso!";
                } else {
                    echo "Usuário não encontrado!";
                }
            } else {
                $sql = "select * from empresa.funcionaio WHERE nome='$funcionario->nome' and cargo='$funcionario->cargo'";
                $resultado = $conecta->query($sql);
                if ($resultado->num_rows > 0) {
                    echo "Usuário já existe na base de dados";
                } else {
                    $sql = "INSERT INTO `empresa`.`funcionaio`
                        (nome,
                        cargo,
                        salarioBruto,
                        salarioLiquido,
                        inss)
                        VALUES
                        ('$funcionario->nome',
                        '$funcionario->cargo',
                        $funcionario->salarioBruto,
                        $funcionario->salarioLiquido,
                        $funcionario->inss);";

                    if ($conecta->query($sql) === TRUE) {
                        echo "Novos registros criados com sucesso<br>";
                    } else {
                        echo "Erro: " . $sql . "<br>" . $conecta->error."<br>";
                    }
                }
            }
             
            
            $conecta->close();
        ?>
    </body>
</html>