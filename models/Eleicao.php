<?php
    class Eleicao {
        private int $id_eleicao;
        private int $edital_FK;
        private string $data_inicio_eleicao;
        private string $data_fim_eleicao;
        private string $status_eleicao;
    
        public function __construct(
            $_idEleicao,
            $_editalFK,
            $_dataInicioEleicao,
            $_dataFimEleicao,
            $_statusEleicao
        ) {
            $this->id_eleicao = $_idEleicao;
            $this->edital_FK = $_editalFK;
            $this->data_inicio_eleicao = $_dataInicioEleicao;
            $this->data_fim_eleicao = $_dataFimEleicao;
            $this->status_eleicao = $_statusEleicao;
        }

        /**
         * Get the value of id_eleicao
         */ 
        public function getId_eleicao()
        {
                return $this->id_eleicao;
        }

        /**
         * Set the value of id_eleicao
         *
         * @return  self
         */ 
        public function setId_eleicao($id_eleicao)
        {
                $this->id_eleicao = $id_eleicao;

                return $this;
        }

        /**
         * Get the value of data_inicio_eleicao
         */ 
        public function getData_inicio_eleicao()
        {
                return $this->data_inicio_eleicao;
        }

        /**
         * Set the value of data_inicio_eleicao
         *
         * @return  self
         */ 
        public function setData_inicio_eleicao($data_inicio_eleicao)
        {
                $this->data_inicio_eleicao = $data_inicio_eleicao;

                return $this;
        }

        /**
         * Get the value of data_fim_eleicao
         */ 
        public function getData_fim_eleicao()
        {
                return $this->data_fim_eleicao;
        }

        /**
         * Set the value of data_fim_eleicao
         *
         * @return  self
         */ 
        public function setData_fim_eleicao($data_fim_eleicao)
        {
                $this->data_fim_eleicao = $data_fim_eleicao;

                return $this;
        }

        /**
         * Get the value of status_eleicao
         */ 
        public function getStatus_eleicao()
        {
                return $this->status_eleicao;
        }

        /**
         * Set the value of status_eleicao
         *
         * @return  self
         */ 
        public function setStatus_eleicao($status_eleicao)
        {
                $this->status_eleicao = $status_eleicao;

                return $this;
        }

        /**
         * Get the value of edital_FK
         */ 
        public function getEdital_FK()
        {
                return $this->edital_FK;
        }

        /**
         * Set the value of edital_FK
         *
         * @return  self
         */ 
        public function setEdital_FK($edital_FK)
        {
                $this->edital_FK = $edital_FK;

                return $this;
        }
    }
?>