<?php
    class BrancosOuNulos {
        private int $id_branco_nulo;
        private int $quatidade_branco;
        private int $quantidade_nulo;
        private int $eleicao_Fk;
    
        public function __contruct (
            $_idBrancoNulo,
            $_quatidadeBranco,
            $_quantidadeNulo,
            $_eleicaoFk
        ) {
            $this->id_branco_nulo = $_idBrancoNulo;
            $this->quatidade_branco = $_quatidadeBranco;
            $this->quantidade_nulo = $_quantidadeNulo;
            $this->eleicao_Fk = $_eleicaoFk;
        }

        /**
         * Get the value of id_branco_nulo
         */ 
        public function getId_branco_nulo()
        {
                return $this->id_branco_nulo;
        }

        /**
         * Set the value of id_branco_nulo
         *
         * @return  self
         */ 
        public function setId_branco_nulo($id_branco_nulo)
        {
                $this->id_branco_nulo = $id_branco_nulo;

                return $this;
        }

        /**
         * Get the value of quatidade_branco
         */ 
        public function getQuatidade_branco()
        {
                return $this->quatidade_branco;
        }

        /**
         * Set the value of quatidade_branco
         *
         * @return  self
         */ 
        public function setQuatidade_branco($quatidade_branco)
        {
                $this->quatidade_branco = $quatidade_branco;

                return $this;
        }

        /**
         * Get the value of quantidade_nulo
         */ 
        public function getQuantidade_nulo()
        {
                return $this->quantidade_nulo;
        }

        /**
         * Set the value of quantidade_nulo
         *
         * @return  self
         */ 
        public function setQuantidade_nulo($quantidade_nulo)
        {
                $this->quantidade_nulo = $quantidade_nulo;

                return $this;
        }

        /**
         * Get the value of eleicao_Fk
         */ 
        public function getEleicao_Fk()
        {
                return $this->eleicao_Fk;
        }

        /**
         * Set the value of eleicao_Fk
         *
         * @return  self
         */ 
        public function setEleicao_Fk($eleicao_Fk)
        {
                $this->eleicao_Fk = $eleicao_Fk;

                return $this;
        }
    }

        
?>