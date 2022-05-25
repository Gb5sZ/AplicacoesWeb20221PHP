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
