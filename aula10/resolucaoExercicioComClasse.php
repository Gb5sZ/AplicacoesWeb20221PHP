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
            include 'FuncionarioBD.php';
                   
            $funcionario = new Funcionario(
                    $_POST["nome"],
                    $_POST["cargo"],
                    $_POST["salarioB"],
                    $_POST["desconto"]);
            $funcionarioBD = new FuncionarioBD();
                        
            if(isset($_POST["localizar"])){
                 $funcionarioBD->buscar($funcionario);
            } elseif(isset($_POST["alterar"])){
                $funcionarioBD->alterar($funcionario); 
            } elseif(isset($_POST["deletar"])){
                $funcionarioBD->deletar($funcionario);
            } else {
                $funcionarioBD->inserir($funcionario);
            }
        ?>
    </body>
</html>
