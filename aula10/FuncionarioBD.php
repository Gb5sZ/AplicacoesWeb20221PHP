<?php

/**
 * Description of FuncionarioBD
 * Manter funcionário persistido (INSERT, UPDATE, DELETE, SELECT)
 * @author renan
 */
include 'ConexaoBD.php';
class FuncionarioBD {
    private $conexao;
    
    public function buscar($funcionario) {
        $this->conexao = new ConexaoBD();
        $this->conexao->conectaBD();
        $sql = "select * from empresa.funcionaio WHERE nome='$funcionario->nome' and cargo='$funcionario->cargo'";
        $resultado = $this->conexao->conecta->query($sql);
        if ($resultado->num_rows > 0) {
            while($linha = $resultado->fetch_assoc()) {
                echo "id: " . $linha["id"]. " - Nome: " . $linha["nome"]. " " . $linha["cargo"]. " " . $linha["salarioBruto"]." " . $linha["salarioLiquido"]."<br>";
            }
        } else {
            echo "Usuário não encontrado!";   
        }
        $this->conexao->fecharBD();
    }
    
    public function alterar($funcionario){
        $this->conexao = new ConexaoBD();
        $this->conexao->conectaBD();
        $sql = "UPDATE `empresa`.`funcionaio`
                        SET
                        `salarioBruto` = $funcionario->salarioBruto,
                        `salarioLiquido` = $funcionario->salarioLiquido,
                        `inss` = $funcionario->inss
                        WHERE nome='$funcionario->nome' and cargo='$funcionario->cargo'";
        if ($this->conexao->conecta->query($sql)===TRUE){
           echo "Usuário alterado com sucesso!";
        }
        else {
           echo "Usuário não encontrado!";
        }
        $this->conexao->fecharBD();
    }
    
    public function deletar($funcionario){
        $this->conexao = new ConexaoBD();
        $this->conexao->conectaBD();
        $sql = "delete from empresa.funcionaio WHERE nome='$funcionario->nome' and cargo='$funcionario->cargo'";
        if ($this->conexao->conecta->query($sql)===TRUE){
            echo "Usuário deletado com sucesso!";
        } else {
            echo "Usuário não encontrado!";
        }
        $this->conexao->fecharBD();
    }
    
    public function inserir($funcionario){
        $this->conexao = new ConexaoBD();
        $this->conexao->conectaBD();
        $sql = "select * from empresa.funcionaio WHERE nome='$funcionario->nome' and cargo='$funcionario->cargo'";
                $resultado = $this->conexao->conecta->query($sql);
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

                    if ($this->conexao->conecta->query($sql) === TRUE) {
                        echo "Novos registros criados com sucesso<br>";
                    } else {
                        echo "Erro: " . $sql . "<br>" . $conexao->conecta->error."<br>";
                    }
                }
        $this->conexao->fecharBD();
    }
}
