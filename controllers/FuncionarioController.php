<?php 
    require_once __DIR__ . "./repositories/FuncionarioDao.php";
    require_once __DIR__ . "./models/Funcionario.php";

    class FuncionarioController {
        private FuncionarioDAO $dao;
        public function __construct(){
            $this->dao = new FuncionarioDAO();
        }

        public function create(string $method): string {
            if($method === "POST") {

                require __DIR__ . "./views/cadastroFuncionarios.php";

                $funcionario = new Funcionario(

                    0,
                    htmlspecialchars($_POST["nome_funcionario"]),
                    htmlspecialchars($_POST["sobrenome_funcionario"]),
                    htmlspecialchars($_POST["CPF_funcionario"]),    
                    htmlspecialchars($_POST["data_nascimento_funcionario"]),
                    htmlspecialchars($_POST["data_contratacao_funcionario"]),
                    htmlspecialchars($_POST["telefone_funcionario"]),
                    htmlspecialchars($_POST["matricula_funcionario"]),
                    htmlspecialchars($_POST["codigo_voto_funcionario"]),
                    true,
                    htmlspecialchars($_POST["ADM_funcionario"]) === 'true' ? true : false,
                    htmlspecialchars($_POST["email_funcionario"]),
                    password_hash(htmlspecialchars($_POST["senha_funcionario"]), PASSWORD_BCRYPT)
                

                );

                $response = $this->dao->registrarFuncionario($funcionario);
                if ($response) {                    
                    return "Usuário Cadastrado com Sucesso";
                }
                return "Problema na criação do usuário";

            }
        }

        public function getAllFuncionarios() {
            return $this->dao->getAllFuncionarios();
        }


    }
?>