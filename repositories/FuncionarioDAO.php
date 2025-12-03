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

    public function listaFuncionarios(): array {
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
    
            error_log("Erro em Funcionario DAO (listaFuncionarios): " . $e->getMessage());
            return [];
        } 
    }

    public function atualizarFuncionario(Funcionario $funcionarioAtualizado) {
        try {
           $sql = "UPDATE funcionario
                SET nome_funcionario = :nome,						
                sobrenome_funcionario = :sobrenome,
                CPF_funcionario = :cpf,					
                data_nascimento_funcionario = :data_nascimento,
                data_contratacao_funcionario = :data_contratacao,
                telefone_funcionario = :telefone,			
                matricula_funcionario = :matricula,					
                codigo_voto_funcionario = :codigo_voto,
                ativo_funcionario = :ativo,				
                ADM_funcionario = :adm,					
                email_funcionario = :email,
                senha_funcionario = :senha
                WHERE id_funcionario = :id
           ";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(":nome", $funcionarioAtualizado->getNome_funcionario(), PDO::PARAM_STR);
            $stmt->bindValue(":sobrenome", $funcionarioAtualizado->getSobrenome_funcionario(), PDO::PARAM_STR);
            $stmt->bindValue(":cpf", $funcionarioAtualizado->getCPF_funcionario(), PDO::PARAM_STR);
            $stmt->bindValue(":data_nascimento", $funcionarioAtualizado->getData_nascimento_funcionario());
            $stmt->bindValue(":data_contratacao", $funcionarioAtualizado->getData_contratacao_funcionario());
            $stmt->bindValue(":telefone", $funcionarioAtualizado->getTelefone_funcionario(), PDO::PARAM_STR);
            $stmt->bindValue(":matricula", $funcionarioAtualizado->getMatricula_funcionario(), PDO::PARAM_STR);
            $stmt->bindValue(":codigo_voto", $funcionarioAtualizado->getCodigo_voto_funcionario(), PDO::PARAM_STR);
            $stmt->bindValue(":ativo", $funcionarioAtualizado->getAtivo_funcionario(), PDO::PARAM_BOOL);
            $stmt->bindValue(":adm", $funcionarioAtualizado->getADM_funcionario(), PDO::PARAM_BOOL);
            $stmt->bindValue(":email", $funcionarioAtualizado->getEmail_funcionario(), PDO::PARAM_STR);
            $stmt->bindValue(":senha", $funcionarioAtualizado->getSenha_funcionario(), PDO::PARAM_STR);
            $stmt->bindValue(":id", $funcionarioAtualizado->getId_funcionario(), PDO::PARAM_STR);            
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            error_log("Erro em Funcionario DAO (atualizaFuncionario): " . $e->getMessage());
            return false;
        }
    }

    public function apagarFuncionario(int $id) {
        try {
            $sql = "DELETE FROM funcionario WHERE id_funcionario = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(":id", $id, PDO::PARAM_INT);
            return $stmt->execute();
        } catch (PDOException $e) {
            error_log("Erro em Funcionario DAO (atualizaFuncionario): " . $e->getMessage());
            return false;
        }
    }

    public function funcionarioPorId(int $id) {
        try {
            $sql = "SELECT * FROM funcionario WHERE id_funcionario = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(":id", $id, PDO::PARAM_INT);
            $stmt->execute();
            $funcionario = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if(!$funcionario){
                return null;
            }

            $f = new Funcionario(
                $funcionario["id_funcionario"],
                $funcionario["nome_funcionario"],
                $funcionario["sobrenome_funcionario"],
                $funcionario["CPF_funcionario"],
                $funcionario["data_nascimento_funcionario"],
                $funcionario["data_contratacao_funcionario"],
                $funcionario["telefone_funcionario"],
                $funcionario["matricula_funcionario"],
                $funcionario["codigo_voto_funcionario"],
                $funcionario["ativo_funcionario"],
                $funcionario["ADM_funcionario"],
                $funcionario["email_funcionario"],
                $funcionario["senha_funcionario"]
            );

            echo($f->getNome_funcionario());
            
        } catch (PDOException $e) {
            error_log("Erro em Funcionario DAO (atualizaFuncionario): " . $e->getMessage());
            return false;
        }
    }
}

?>