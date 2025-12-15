<?php 
    require_once __DIR__ . "/../utils/conexao.php";
    require_once __DIR__ . "/../models/Candidato.php";


  class CandidatoDAO {

    private PDO $pdo;

    public function __construct() {
        try {


            $this->pdo = Conexao::fazerConexao();

            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(PDO::ATTR_AUTOCOMMIT, true);

        } catch(PDOException $e) {
            echo("Erro ao conectar a partir de Candidato DAO: " . $e->getMessage());
        }
    }
    
    public function registrarCandidato(Candidato $candidato) {
        
        try{
            $this->pdo->beginTransaction();
            $sql1 = "SELECT id_funcionario FROM funcionario WHERE matricula_funcionario = :matricula";
            $stmt1 = $this->pdo->prepare($sql1);
            echo "Matricula: " . $_POST["Matricula_Candidato"] . "<br>";
            $matricula = $_POST["Matricula_Candidato"];
            var_dump($matricula);
            $stmt1->bindValue(":matricula", $matricula, PDO::PARAM_STR);
            $stmt1->execute();
            
            $idFunc = $stmt1->fetchColumn();
            echo "id: " . $idFunc . "<br>";
            
            
            echo("Veio aqui");
            
            $sql2 = "INSERT INTO candidato (
                    funcionario_FK,                
                    numero_candidato,
                    cargo_candidato,
                    data_registro_candidato,
                    eleicao_FK,
                    status_candidato_ata,
                    quantidade_voto_candidato
                    ) VALUES (
                    :funcionario_FK,                
                    :numero_candidato,
                    :cargo_candidato,
                    :data_registro_candidato,
                    :eleicao_FK,
                    :status_candidato_ata,
                    :quantidade_voto_candidato
               )";
    
        $stmt2 = $this->pdo->prepare($sql2);
        
        
        $stmt2->bindValue(":funcionario_FK", $idFunc, PDO::PARAM_INT);
        $stmt2->bindValue(":numero_candidato", $candidato->getNumero_candidato(), PDO::PARAM_STR);
        $stmt2->bindValue(":cargo_candidato", $candidato->getCargo_candidato(), PDO::PARAM_STR);
        $stmt2->bindValue(":data_registro_candidato", $candidato->getData_registro_candidato());
        $stmt2->bindValue(":eleicao_FK", $candidato->getEleicao_FK(), PDO::PARAM_INT);
        $stmt2->bindValue(":status_candidato_ata", $candidato->getStatus_candidato_ata(), PDO::PARAM_INT);
        $stmt2->bindValue(":quantidade_voto_candidato", $candidato->getQuantidade_voto_candidato(), PDO::PARAM_INT);
        $res = $stmt2->execute();
    
    $this->pdo->commit();
                return $res;
            
        
        } catch (PDOException $e) {
            echo("Erro em Funcionario DAO: " . $e->getMessage());
            $this->pdo->rollback();
            return false;
        } 
    }

    public function getAllCandidatos(): array {
    try {
        $sql = "SELECT * FROM candidato ORDER BY nome_funcionario, sobrenome_funcionario";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        $candidato = [];
        

        while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {

            $canditados[] = $data; 
        }

        return $canditados;

        } catch (PDOException $e) {
        
            error_log("Erro em Candidato DAO (getAllCandidatos): " . $e->getMessage());
            return [];
        }   
    }


  }
?>