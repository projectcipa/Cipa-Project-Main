<?php 
    require_once __DIR__ . "/../repositories/DocumentoDAO.php";
    require_once __DIR__ . "/../models/Documento.php";

    class DocumentoController {
        private DocumentoDAO $dao;
        public function __construct(){
            $this->dao = new DocumentoDAO();
        }

        public function create(string $method): string {

            if($method === "GET"){

                require __DIR__ . "/../views/CadastroCandidato.php";
                return "";
                

            }

            if($method === "POST") {

                $documento = new Documento(
                    htmlspecialchars($_POST["data_hora_documento"]),
                    htmlspecialchars($_POST["data_inicio_documento"]),
                    htmlspecialchars($_POST["data_fim_documento"]),    
                    htmlspecialchars($_POST["observacao_documento"]),
                    htmlspecialchars($_POST["pdf_documento"]),
                    htmlspecialchars($_POST["titulo_documento"]),
                    htmlspecialchars($_POST["tipo_documento"])
                );

                $response = $this->dao->registrarDocumento($documento);
                if ($response) {   
                    /*(Código para quando clicaar no botão criar ir para a pagina de listagem)  - >  header('Location: index.php?view=ListaFuncionarios');
                    exit;*/           
                    return true;
                    
                }
                return false;

            }

        }


    }




?>