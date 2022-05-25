<?php

/**
 * Description of ConexaoBD
 * Classe responsável por realizar a conexão com o banco de dados
 * @author renan
 */
class ConexaoBD {
    public $conecta;

    public function conectaBD() {
        $this->conecta = new mysqli("localhost", "root", "root");
        if ($this->conecta->connect_error) {
                die("Conexão falhou: " . $this->conecta->connect_error."<br>");
            }
            echo "Conexão realizada com sucesso <br>";
    }
    
    public function fecharBD(){
        $this->conecta->close();
    }
            
}
