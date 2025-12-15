<?php
    require_once __DIR__ . '/../utils/Conexao.php';
    require_once __DIR__ . '/../models/Funcionario.php';
    class FuncionarioDAO {

        private PDO $pdo;

        public function __construct() {

            try{

                $conn = new Conexao();
                $this->pdo = $conn->fazerConexao();

                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e) {

                echo("Erro ao conectar a partir de Funcionario DAO: " . $e->getMessage());

            }

        }

        public function registrarFuncionario(Funcionario $funcionario) {
            
            try {
                //echo "estou em usuario dao <br>";
                //echo $funcionario->getNome_funcionario();
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
                $nome = $funcionario->getNome_funcionario();
                $sobrenome = $funcionario->getSobrenome_funcionario();
                $cpf = $funcionario->getCPF_funcionario();
                $dataNascimento = $funcionario->getData_nascimento_funcionario();
                $dataContratacao =  $funcionario->getData_contratacao_funcionario();
                $telefone = $funcionario->getTelefone_funcionario();
                $matricula = $funcionario->getMatricula_funcionario();
                $codigoVoto = $funcionario->getCodigo_voto_funcionario();
                $ativo =  $funcionario->getAtivo_funcionario();
                $adm = $funcionario->getADM_funcionario();
                $email = $funcionario->getEmail_funcionario();
                $senha = $funcionario->getSenha_funcionario();
                $stmt->bindValue(":nome_funcionario", $nome, PDO::PARAM_STR);
                $stmt->bindValue(":sobrenome_funcionario", $sobrenome, PDO::PARAM_STR);
                $stmt->bindValue(":CPF_funcionario", $cpf, PDO::PARAM_STR);
                $stmt->bindValue(":data_nascimento_funcionario", $dataNascimento, PDO::PARAM_STR);
                $stmt->bindValue(":data_contratacao_funcionario", $dataContratacao, PDO::PARAM_STR);
                $stmt->bindValue(":telefone_funcionario", $telefone, PDO::PARAM_STR);
                $stmt->bindValue(":matricula_funcionario", $matricula, PDO::PARAM_STR);
                $stmt->bindValue(":codigo_voto_funcionario", $codigoVoto, PDO::PARAM_STR);
                $stmt->bindValue(":ativo_funcionario", $ativo, PDO::PARAM_BOOL);
                $stmt->bindValue(":ADM_funcionario", $adm ? true : false, PDO::PARAM_BOOL);
                $stmt->bindValue(":email_funcionario", $email, PDO::PARAM_STR);
                $stmt->bindValue(":senha_funcionario", $senha, PDO::PARAM_STR);
                $response = $stmt->execute();
                return $response;

            } catch (PDOException $e) {
                echo("Erro em Funcionario DAO: " . $e->getMessage());
                $response = false;
            } finally {
                return $response;
            }
        }
 }
        
    
?>