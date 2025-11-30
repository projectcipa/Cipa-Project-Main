<?php
    require_once __DIR__ . "../utils/conexao.php";
    require_once __DIR__ . "../models/Funcionario.php";
    class FuncionarioDAO extends Conexao  {
        public function __construct() {}

        public function registrarFuncionario(Funcionario $funcionario) {
            
            try {
                echo "estou em usuario dao <br>";
                echo $funcionario->getNome_funcionario();
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
                $stmt = $conn->prepare($sql);
                $nome = $funcionario->getNome_funcionario();
                $stmt->bindValue(":nome_funcionario", $funcionario->getNome_funcionario(), PDO::PARAM_STR);
                $stmt->bindValue(":sobrenome_funcionario", $funcionario->getSobrenome_funcionario(), PDO::PARAM_STR);
                $stmt->bindValue(":CPF_funcionario", $funcionario->getCPF_funcionario(), PDO::PARAM_STR);
                $stmt->bindValue(":data_nascimento_funcionario", $funcionario->getData_nascimento_funcionario(), PDO::PARAM_STR);
                $stmt->bindValue(":data_contratacao_funcionario", $funcionario->getData_contratacao_funcionario(), PDO::PARAM_STR);
                $stmt->bindValue(":telefone_funcionario", $funcionario->getTelefone_funcionario(), PDO::PARAM_STR);
                $stmt->bindValue(":matricula_funcionario", $funcionario->getMatricula_funcionario(), PDO::PARAM_STR);
                $stmt->bindValue(":codigo_voto_funcionario", $funcionario->getCodigo_voto_funcionario(), PDO::PARAM_STR);
                $stmt->bindValue(":ativo_funcionario", $funcionario->getAtivo_funcionario(), PDO::PARAM_BOOL);
                $stmt->bindValue(":ADM_funcionario", $funcionario->getADM_funcionario(), PDO::PARAM_BOOL);
                $stmt->bindValue(":email_funcionario", $funcionario->getEmail_funcionario(), PDO::PARAM_STR);
                $stmt->bindValue(":senha_funcionario", $funcionario->getSenha_funcionario(), PDO::PARAM_STR);
            } catch (PDOException $e) {
                echo("Erro Funcionario DAO: " . $e->getMessage());
                $response = false;
            } finally {
                return $response;
            }
        }
 }
        
    
?>