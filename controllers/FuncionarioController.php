<<<<<<< HEAD
<?php 
    require_once __DIR__ . "/../repositories/FuncionarioDAO.php";
    require_once __DIR__ . "/../models/Funcionario.php";

    class FuncionarioController {
        private FuncionarioDAO $dao;
        public function __construct(){
            $this->dao = new FuncionarioDAO();
        }

        public function create(string $method): string {

            if($method === "GET"){

                require __DIR__ . "/../views/cadastroFuncionarios.php";
                return "";
                

            }

            if($method === "POST") {

                //require __DIR__ . "/../views/cadastroFuncionarios.php";

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
                    htmlspecialchars($_POST["senha_funcionario"])
                    /*password_hash(htmlspecialchars($_POST["senha_funcionario"]), PASSWORD_BCRYPT)*/
                

                );

                $response = $this->dao->registrarFuncionario($funcionario);
                if ($response) {   
                    /*(Código para quando clicaar no botão criar ir para a pagina de listagem)  - >  header('Location: index.php?view=ListaFuncionarios');
                    exit;*/           
                    return true;
                    
                }
                return false;

            }

        }

        public function list(string $method): array {
            if ($method === "GET") {
        
                // 1. Busca os dados
                $funcionarios = $this->dao->listaFuncionarios();
                //echo("List: " . "<br>");
                //var_dump($funcionarios);
                return $funcionarios;
                
            }
            return "Método não suportado.";
        }



    }
=======
<?php 
    require_once __DIR__ . "/../repositories/FuncionarioDAO.php";
    require_once __DIR__ . "/../models/Funcionario.php";

    class FuncionarioController {
        private FuncionarioDAO $dao;
        public function __construct(){
            $this->dao = new FuncionarioDAO();
        }

        public function create(string $method): string {

            if($method === "GET"){

                require __DIR__ . "/../views/cadastroFuncionarios.php";
                return "";
                

            }

            if($method === "POST") {

                //require __DIR__ . "/../views/cadastroFuncionarios.php";

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
                    htmlspecialchars($_POST["senha_funcionario"])
                    /*password_hash(htmlspecialchars($_POST["senha_funcionario"]), PASSWORD_BCRYPT)*/
                

                );

                $response = $this->dao->registrarFuncionario($funcionario);
                if ($response) {   
                    /*(Código para quando clicaar no botão criar ir para a pagina de listagem)  - >  header('Location: index.php?view=ListaFuncionarios');
                    exit;*/           
                    return true;
                    
                }
                return false;

            }

        }

        public function list(string $method): string {
            if ($method === "GET") {
        
                // 1. Busca os dados
                $funcionarios = $this->dao->listaFuncionarios();
        
                // 2. Carrega a View (A variável $funcionarios fica disponível em listarFuncionarios.php)
                require __DIR__ . "/../views/listarFuncionarios.php";
        
                return "";
            }
            return "Método não suportado.";
        }



    }
>>>>>>> 08a2da62c70ab79b3b27e0b257d1e616146cc2c0
?>