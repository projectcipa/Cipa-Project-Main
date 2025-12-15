<?php
    abstract class Conexao{
        private static string $server = "127.0.0.1";
        private static string $dbname = "cipa_app";
        private static string $user = "root";
        private static string $password = "";
        private static string $port = "3307";
    
        public static function fazerConexao(): PDO{
            try{
                $conn = new PDO(
                    "mysql:host=" . self::$server . ";dbname=" . self::$dbname . ";port=" . self::$port,
                    self::$user,
                    self::$password
                );

               
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            } catch (PDOException $e) {
                echo("Mensagem de Error na Classe de conexão" . $e->getMessage);
            } finally {
                return $conn;
            }

        }
    }

?>