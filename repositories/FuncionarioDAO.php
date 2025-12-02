<?php
require_once __DIR__ . '/../utils/Conexao.php';
require_once __DIR__ . '/../models/Funcionario.php';

class FuncionarioDAO {

    private PDO $pdo;

    public function __construct() {
        try {


            $this->pdo = Conexao::fazerConexao();

            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(PDO::ATTR_AUTOCOMMIT, true);

        } catch(PDOException $e) {
            echo("Erro ao conectar a partir de Funcionario DAO: " . $e->getMessage());
        }
    }

    public function registrarFuncionario(Funcionario $funcionario) {
        try {

            $sql = "INSERT INTO funcionario (
                nome_funcionario,						
                sobrenome_funcionario,
                CPF_funcionario,					
                data_nascimento_funcionario,
                data_contratacao_funcionario,
                telefone_funcionario,			
                matricula_funcionario,					
                codigo_voto_funcionario,
                ativo_funcionario,				
                ADM_funcionario,					
                email_funcionario,
                senha_funcionario 
            ) VALUES (
                :nome_funcionario,						
                :sobrenome_funcionario,
                :CPF_funcionario,					
                :data_nascimento_funcionario,
                :data_contratacao_funcionario,
                :telefone_funcionario,			
                :matricula_funcionario,					
                :codigo_voto_funcionario,
                :ativo_funcionario,				
                :ADM_funcionario,					
                :email_funcionario,
                :senha_funcionario 
            )";

            $stmt = $this->pdo->prepare($sql);

            $stmt->bindValue(":nome_funcionario", $funcionario->getNome_funcionario(), PDO::PARAM_STR);
            $stmt->bindValue(":sobrenome_funcionario", $funcionario->getSobrenome_funcionario(), PDO::PARAM_STR);
            $stmt->bindValue(":CPF_funcionario", $funcionario->getCPF_funcionario(), PDO::PARAM_STR);
            $stmt->bindValue(":data_nascimento_funcionario", $funcionario->getData_nascimento_funcionario());
            $stmt->bindValue(":data_contratacao_funcionario", $funcionario->getData_contratacao_funcionario());
            $stmt->bindValue(":telefone_funcionario", $funcionario->getTelefone_funcionario(), PDO::PARAM_STR);
            $stmt->bindValue(":matricula_funcionario", $funcionario->getMatricula_funcionario(), PDO::PARAM_STR);
            $stmt->bindValue(":codigo_voto_funcionario", $funcionario->getCodigo_voto_funcionario(), PDO::PARAM_STR);
            $stmt->bindValue(":ativo_funcionario", $funcionario->getAtivo_funcionario(), PDO::PARAM_BOOL);
            $stmt->bindValue(":ADM_funcionario", $funcionario->getADM_funcionario(), PDO::PARAM_BOOL);
            $stmt->bindValue(":email_funcionario", $funcionario->getEmail_funcionario(), PDO::PARAM_STR);
            $stmt->bindValue(":senha_funcionario", $funcionario->getSenha_funcionario(), PDO::PARAM_STR);

            return $stmt->execute();

        } catch (PDOException $e) {
            echo("Erro em Funcionario DAO: " . $e->getMessage());
            return false;
        }
    }

    public function getAllFuncionarios(): array {
    try {
        $sql = "SELECT * FROM funcionario ORDER BY nome_funcionario, sobrenome_funcionario";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        $funcionarios = [];
        

        while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {

            $funcionarios[] = $data; 
        }

        return $funcionarios;

        } catch (PDOException $e) {
    
            error_log("Erro em Funcionario DAO (getAllFuncionarios): " . $e->getMessage());
            return [];
        }
    }

}

?>
