<?php
require_once __DIR__ . '/../utils/Conexao.php';
require_once __DIR__ . '/../models/Funcionario.php';

class FuncionarioDAO {

    private PDO $pdo;

    public function __construct() {
        $conn = new Conexao();
        $this->pdo = $conn->fazerConexao();
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function registrarFuncionario(Funcionario $funcionario) {

        try {
            $sql = "INSERT INTO funcionario (
                nome_funcionario, sobrenome_funcionario, CPF_funcionario,
                data_nascimento_funcionario, data_contratacao_funcionario,
                telefone_funcionario, matricula_funcionario,
                codigo_voto_funcionario, ativo_funcionario,
                ADM_funcionario, email_funcionario, senha_funcionario
            ) VALUES (
                :nome, :sobrenome, :cpf, :nascimento, :contratacao,
                :telefone, :matricula, :codigoVoto, :ativo,
                :adm, :email, :senha
            )";

            $stmt = $this->pdo->prepare($sql);

            $stmt->bindValue(":nome", $funcionario->getNome_funcionario());
            $stmt->bindValue(":sobrenome", $funcionario->getSobrenome_funcionario());
            $stmt->bindValue(":cpf", $funcionario->getCPF_funcionario());
            $stmt->bindValue(":nascimento", $funcionario->getData_nascimento_funcionario());
            $stmt->bindValue(":contratacao", $funcionario->getData_contratacao_funcionario());
            $stmt->bindValue(":telefone", $funcionario->getTelefone_funcionario());
            $stmt->bindValue(":matricula", $funcionario->getMatricula_funcionario());
            $stmt->bindValue(":codigoVoto", $funcionario->getCodigo_voto_funcionario());
            $stmt->bindValue(":ativo", $funcionario->getAtivo_funcionario(), PDO::PARAM_BOOL);
            $stmt->bindValue(":adm", $funcionario->getADM_funcionario(), PDO::PARAM_BOOL);
            $stmt->bindValue(":email", $funcionario->getEmail_funcionario());
            $stmt->bindValue(":senha", $funcionario->getSenha_funcionario());

            return $stmt->execute();

        } catch (PDOException $e) {
            echo "Erro em FuncionarioDAO: " . $e->getMessage();
            return false;
        }
    }
}
