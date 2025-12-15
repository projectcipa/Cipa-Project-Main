<?php
require_once __DIR__ . "/../repositories/FuncionarioDAO.php";
require_once __DIR__ . "/../models/Funcionario.php";

class FuncionarioController {

    private FuncionarioDAO $dao;

    public function __construct() {
        $this->dao = new FuncionarioDAO();
    }

    public function form(): void {
        require __DIR__ . "/../views/cadastroFuncionarios.php";
    }

    public function create(): string {

        if ($_SERVER["REQUEST_METHOD"] !== "POST") {
            return "Método inválido.";
        }

        $funcionario = new Funcionario(
            0,
            $_POST["nome_funcionario"],
            $_POST["sobrenome_funcionario"],
            $_POST["CPF_funcionario"],
            $_POST["data_nascimento_funcionario"],
            $_POST["data_contratacao_funcionario"],
            $_POST["telefone_funcionario"],
            $_POST["matricula_funcionario"],
            $_POST["codigo_voto_funcionario"],
            true,
            $_POST["ADM_funcionario"] === "true",
            $_POST["email_funcionario"],
            password_hash($_POST["senha_funcionario"], PASSWORD_BCRYPT)
        );

        $response = $this->dao->registrarFuncionario($funcionario);

        if ($response) {
            return "Funcionário cadastrado com sucesso!";
        }

        return "Erro ao cadastrar funcionário.";
    }

    public function getAllFuncionarios() {
        return $this->dao->getAllFuncionarios();
    }
}
