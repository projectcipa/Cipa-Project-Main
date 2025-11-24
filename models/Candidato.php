<?php
    class Candidatos {
        private int $id_candidato;
        private int $funcionario_FK;
        private int $foto_candidato;
        private int $numero_candidato;
        private int $cargo_candidato;
        private int $data_registro_candidato;
        private int $eleicao_FK;
        private int $status_candidato_ata;
        private int $quantidade_voto_candidato;

        public function __construct(
            $_idCandidato,
            $_funcionarioFK,
            $_fotoCandidato,
            $_numeroCandidato,
            $_cargoCandidato,
            $_dataRegistroCandidato,
            $_eleicaoFK,
            $_statusCandidatoAta,
            $_quantidadeVotoCandidato
        ) {
            $this->id_candidato = $_idCandidato;
            $this->funcionario_FK = $_funcionarioFK;
            $this->foto_candidato = $_fotoCandidato;
            $this->numero_candidato = $_numeroCandidato;
            $this->cargo_candidato = $_cargoCandidato;
            $this->data_registro_candidato = $_dataRegistroCandidato;
            $this->eleicao_FK = $_eleicaoFK;
            $this->status_candidato_ata = $_statusCandidatoAta;
            $this->quantidade_voto_candidato = $_quantidadeVotoCandidato;
        }

        /**
         * Get the value of id_candidato
         */ 
        public function getId_candidato()
        {
                return $this->id_candidato;
        }

        /**
         * Set the value of id_candidato
         *
         * @return  self
         */ 
        public function setId_candidato($id_candidato)
        {
                $this->id_candidato = $id_candidato;

                return $this;
        }

        /**
         * Get the value of funcionario_FK
         */ 
        public function getFuncionario_FK()
        {
                return $this->funcionario_FK;
        }

        /**
         * Set the value of funcionario_FK
         *
         * @return  self
         */ 
        public function setFuncionario_FK($funcionario_FK)
        {
                $this->funcionario_FK = $funcionario_FK;

                return $this;
        }

        /**
         * Get the value of foto_candidato
         */ 
        public function getFoto_candidato()
        {
                return $this->foto_candidato;
        }

        /**
         * Set the value of foto_candidato
         *
         * @return  self
         */ 
        public function setFoto_candidato($foto_candidato)
        {
                $this->foto_candidato = $foto_candidato;

                return $this;
        }

        /**
         * Get the value of numero_candidato
         */ 
        public function getNumero_candidato()
        {
                return $this->numero_candidato;
        }

        /**
         * Set the value of numero_candidato
         *
         * @return  self
         */ 
        public function setNumero_candidato($numero_candidato)
        {
                $this->numero_candidato = $numero_candidato;

                return $this;
        }

        /**
         * Get the value of cargo_candidato
         */ 
        public function getCargo_candidato()
        {
                return $this->cargo_candidato;
        }

        /**
         * Set the value of cargo_candidato
         *
         * @return  self
         */ 
        public function setCargo_candidato($cargo_candidato)
        {
                $this->cargo_candidato = $cargo_candidato;

                return $this;
        }

        /**
         * Get the value of data_registro_candidato
         */ 
        public function getData_registro_candidato()
        {
                return $this->data_registro_candidato;
        }

        /**
         * Set the value of data_registro_candidato
         *
         * @return  self
         */ 
        public function setData_registro_candidato($data_registro_candidato)
        {
                $this->data_registro_candidato = $data_registro_candidato;

                return $this;
        }

        /**
         * Get the value of eleicao_FK
         */ 
        public function getEleicao_FK()
        {
                return $this->eleicao_FK;
        }

        /**
         * Set the value of eleicao_FK
         *
         * @return  self
         */ 
        public function setEleicao_FK($eleicao_FK)
        {
                $this->eleicao_FK = $eleicao_FK;

                return $this;
        }

        /**
         * Get the value of status_candidato_ata
         */ 
        public function getStatus_candidato_ata()
        {
                return $this->status_candidato_ata;
        }

        /**
         * Set the value of status_candidato_ata
         *
         * @return  self
         */ 
        public function setStatus_candidato_ata($status_candidato_ata)
        {
                $this->status_candidato_ata = $status_candidato_ata;

                return $this;
        }

        /**
         * Get the value of quantidade_voto_candidato
         */ 
        public function getQuantidade_voto_candidato()
        {
                return $this->quantidade_voto_candidato;
        }

        /**
         * Set the value of quantidade_voto_candidato
         *
         * @return  self
         */ 
        public function setQuantidade_voto_candidato($quantidade_voto_candidato)
        {
                $this->quantidade_voto_candidato = $quantidade_voto_candidato;

                return $this;
        }
    }
?>