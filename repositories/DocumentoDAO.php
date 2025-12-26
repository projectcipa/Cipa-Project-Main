<?php
    require_once __DIR__ . "../utils/conexao.php";
    require_once __DIR__ . "../models/Documento.php";

    class DocumentoDAO {
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
    

        public function registrarDocumento(Documento $documento) {
            try {

                $sql = "INSERT INTO documento (
                        data_hora_documento,
                        data_inicio_documento,
                        data_fim_documento,
                        observacao_documento,
                        pdf_documento,
                        titulo_documento,
                        tipo_documento
                        ) VALUE (
                        :data_hora_documento,
                        :data_inicio_documento,
                        :data_fim_documento,
                        :observacao_documento,
                        :pdf_documento,
                        :titulo_documento,
                        :tipo_documento
                        )";

                        $stmt = $this->pdo->prepare($sql);
                        $stmt->bindValue(":data_hora_documento", $documento->getData_hora_documento());

                        $stmt->bindValue(":data_inicio_documento", $documento->getData_inicio_documento());

                        $stmt->bindValue(":data_fim_documento", $documento->getData_fim_documento());

                        $stmt->bindValue(":observacao_documento", $documento->getObservacao_documento(), PDO::PARAM_STR);

                        $stmt->bindValue(":pdf_documento", $documento->getPdf_documento(), PDO::PARAM_STR);

                        $stmt->bindValue(":titulo_documento", $documento->getTipo_documento(), PDO::PARAM_INT);

                        return $stmt->execute();
                
            } catch (PDOException $e) {
                echo("Erro em DocumentoDAO: " . $e->getMessage());
                return false;
            }
        }
    }

?>

    