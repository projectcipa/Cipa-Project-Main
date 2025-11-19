<?php
    abstract class Conexao{
        private string $server = "127.0.0.1";
        private string $dbname = "CIPA_APP";
        private string $user = "root"
        private string $password = "";
        private string $port = "3306";
    
        public function __construct() {
            
        }

        public function fazerConexao(): PDO{
            try{
                $conn = new PDO(
                    "mysql:host=" . $this->server . ";dbname=" . $this->dbname . ";port=" . $this->port,
                    $this->user,
                    $this->password
                );

                // Tratamento de Error na conexão
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            } catch (PDOException $e) {
                echo("Mensagem de Error na Classe de conexão" . $e->getMessage);
            } finally {
                return $conn;
            }

        }
    }

?>