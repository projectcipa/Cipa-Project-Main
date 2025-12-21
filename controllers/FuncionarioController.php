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
                    /*htmlspecialchars($_POST["senha_funcionario"])*/
                    password_hash(htmlspecialchars($_POST["senha_funcionario"]), PASSWORD_BCRYPT)
                

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
        
                $funcionarios = $this->dao->listaFuncionarios();
    
                return $funcionarios;
                
            }
            return "Método não suportado.";
        }


        public function edit(string $method) {
            try {
                // GET -> exibir formulário preenchido
                if ($method === "GET") {
                    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
                    if ($id <= 0) {
                        echo "<p>ID inválido.</p>";
                        return false;
                    }
                    $funcionario = $this->dao->funcionarioPorId($id);
                    if (!$funcionario) {
                        echo "<p>Funcionário não encontrado.</p>";
                        return false;
                    }
                    require __DIR__ . "/../views/editarFuncionario.php";
                    return true;
                }

                // POST -> atualizar
                if ($method === "POST") {
                    $id = isset($_POST["id_funcionario"]) ? intval($_POST["id_funcionario"]) : 0;
                    if ($id <= 0) {
                        error_log("Editar: id inválido em POST");
                        return false;
                    }

                    // buscar registro atual para preservar campos sensíveis (ex: senha)
                    $existing = $this->dao->funcionarioPorId($id);
                    if (!$existing) {
                        error_log("Editar: funcionário não encontrado (id={$id})");
                        return false;
                    }

                    // normalizar campos
                    $nome = isset($_POST["nome_funcionario"]) ? trim($_POST["nome_funcionario"]) : $existing->getNome_funcionario();
                    $sobrenome = isset($_POST["sobrenome_funcionario"]) ? trim($_POST["sobrenome_funcionario"]) : $existing->getSobrenome_funcionario();
                    $cpf = isset($_POST["CPF_funcionario"]) ? trim($_POST["CPF_funcionario"]) : $existing->getCPF_funcionario();
                    $data_nasc = isset($_POST["data_nascimento_funcionario"]) ? trim($_POST["data_nascimento_funcionario"]) : $existing->getData_nascimento_funcionario();
                    $data_contrat = isset($_POST["data_contratacao_funcionario"]) ? trim($_POST["data_contratacao_funcionario"]) : $existing->getData_contratacao_funcionario();
                    $telefone = isset($_POST["telefone_funcionario"]) ? trim($_POST["telefone_funcionario"]) : $existing->getTelefone_funcionario();
                    $matricula = isset($_POST["matricula_funcionario"]) ? trim($_POST["matricula_funcionario"]) : $existing->getMatricula_funcionario();
                    $codigo_voto = isset($_POST["codigo_voto_funcionario"]) ? trim($_POST["codigo_voto_funcionario"]) : $existing->getCodigo_voto_funcionario();
                    $email = isset($_POST["email_funcionario"]) ? trim($_POST["email_funcionario"]) : $existing->getEmail_funcionario();

                    // ativo: form envia "1" ou "0"
                    $ativo = (isset($_POST["ativo_funcionario"]) && intval($_POST["ativo_funcionario"]) === 1) ? 1 : 0;

                    // ADM: form envia "true"/"false" ou "1"/"0"
                    $adm = 0;
                    if (isset($_POST["ADM_funcionario"])) {
                        $v = $_POST["ADM_funcionario"];
                        $adm = ($v === 'true' || $v === '1' || $v === 'on') ? 1 : 0;
                    } else {
                        $adm = $existing->getADM_funcionario() ? 1 : 0;
                    }

                    // senha: se campo vazio, preservar; senão, hash
                    $senhaRecebida = isset($_POST["senha_funcionario"]) ? trim($_POST["senha_funcionario"]) : '';
                    if ($senhaRecebida === '') {
                        $senha = $existing->getSenha_funcionario();
                    } else {
                        $senha = password_hash($senhaRecebida, PASSWORD_DEFAULT);
                    }

                    $funcionario = new Funcionario(
                        $id,
                        htmlspecialchars($nome),
                        htmlspecialchars($sobrenome),
                        htmlspecialchars($cpf),
                        htmlspecialchars($data_nasc),
                        htmlspecialchars($data_contrat),
                        htmlspecialchars($telefone),
                        htmlspecialchars($matricula),
                        htmlspecialchars($codigo_voto),
                        $ativo,
                        $adm,
                        htmlspecialchars($email),
                        $senha
                    );

                    $ok = $this->dao->atualizarFuncionario($funcionario);

                    if ($ok === false) {
                        error_log("Editar: atualizarFuncionario retornou false (id={$id}). POST: " . print_r($_POST, true));
                        return false;
                    }

                    return true;
                }

                return false;
            } catch (\Throwable $e) {
                error_log("Exception em FuncionarioController::edit - " . $e->getMessage());
                return false;
            }
        }


        public function delete(string $method) {

            if ($method === "POST") {
                $id = isset($_POST['id_funcionario']) ? intval($_POST['id_funcionario']) : 0;
            } else {
                $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
            }

            if ($id <= 0) {
                return false;
            }

            return $this->dao->apagarFuncionario($id);
        }

    }
?>