<?php
    require_once __DIR__ . "/../repositories/CandidatoDAO.php";
    require_once __DIR__ . "/../models/Candidato.php";

    class CandidatoController {
        private CandidatoDAO $dao;
        public function __construct(){
            $this->dao = new CandidatoDAO();
        }

        public function create(string $method): string {

            if($method === "GET"){

                require __DIR__ . "/../views/CadastroCandidato.php";
                return "";
                

            }

            if($method === "POST") {

                //require __DIR__ . "/../views/cadastroFuncionarios.php";

                $funcionario = new Candidato(
                    0,
                    htmlspecialchars($_POST["Numero_candidato"]),
                    htmlspecialchars($_POST["Setor_Candidato"]),    
                    (int) htmlspecialchars($_POST["Eleicao_vinculada"]),
                    3, //status                
                    0 //quantidade votos                                       
                );

                $response = $this->dao->registrarCandidato($funcionario);
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
                $funcionarios = $this->dao->listaCandidato();
                //echo("List: " . "<br>");
                //var_dump($funcionarios);
                return $funcionarios;
                
            }
            return "Método não suportado.";
        }

        public function listar(string $method): array {
            if ($method === "GET") {
        
                $candidatos = $this->dao->listaCandidatos();
    
                return $candidatos;
                
            }
            return "Método não suportado.";
        }




    }
?>