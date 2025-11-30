<?php 
    class Documento {
        private int $id_documento;
        private string $data_hora_documento;
        private string $data_inicio_documento;
        private string $data_fim_documento;
        private string $observacao_documento;
        private string $pdf_documento;
        private string $titulo_documento;
        private int $tipo_documento;

        public function __construct(
            $_idDocumento,
            $_dataHoraDocumento,
            $_dataInicioDocumento,
            $_dataFimDocumento,
            $_observacaoDocumento,
            $_pdfDocumento,
            $_tituloDocumento,
            $_tipoDocumento
        ) {
            $this->id_documento = $_idDocumento;
            $this->data_hora_documento = $_dataHoraDocumento;
            $this->data_inicio_documento = $_dataInicioDocumento;
            $this->data_fim_documento = $_dataFimDocumento;
            $this->observacao_documento = $_observacaoDocumento;
            $this->pdf_documento = $_pdfDocumento;
            $this->titulo_documento = $_tituloDocumento;
            $this->tipo_documento = $_tipoDocumento;
        }

        /**
         * Get the value of id_documento
         */ 
        public function getId_documento()
        {
                return $this->id_documento;
        }

        /**
         * Set the value of id_documento
         *
         * @return  self
         */ 
        public function setId_documento($id_documento)
        {
                $this->id_documento = $id_documento;

                return $this;
        }

        /**
         * Get the value of data_hora_documento
         */ 
        public function getData_hora_documento()
        {
                return $this->data_hora_documento;
        }

        /**
         * Set the value of data_hora_documento
         *
         * @return  self
         */ 
        public function setData_hora_documento($data_hora_documento)
        {
                $this->data_hora_documento = $data_hora_documento;

                return $this;
        }

        /**
         * Get the value of data_inicio_documento
         */ 
        public function getData_inicio_documento()
        {
                return $this->data_inicio_documento;
        }

        /**
         * Set the value of data_inicio_documento
         *
         * @return  self
         */ 
        public function setData_inicio_documento($data_inicio_documento)
        {
                $this->data_inicio_documento = $data_inicio_documento;

                return $this;
        }

        /**
         * Get the value of data_fim_documento
         */ 
        public function getData_fim_documento()
        {
                return $this->data_fim_documento;
        }

        /**
         * Set the value of data_fim_documento
         *
         * @return  self
         */ 
        public function setData_fim_documento($data_fim_documento)
        {
                $this->data_fim_documento = $data_fim_documento;

                return $this;
        }

        /**
         * Get the value of observacao_documento
         */ 
        public function getObservacao_documento()
        {
                return $this->observacao_documento;
        }

        /**
         * Set the value of observacao_documento
         *
         * @return  self
         */ 
        public function setObservacao_documento($observacao_documento)
        {
                $this->observacao_documento = $observacao_documento;

                return $this;
        }

        /**
         * Get the value of pdf_documento
         */ 
        public function getPdf_documento()
        {
                return $this->pdf_documento;
        }

        /**
         * Set the value of pdf_documento
         *
         * @return  self
         */ 
        public function setPdf_documento($pdf_documento)
        {
                $this->pdf_documento = $pdf_documento;

                return $this;
        }

        /**
         * Get the value of titulo_documento
         */ 
        public function getTitulo_documento()
        {
                return $this->titulo_documento;
        }

        /**
         * Set the value of titulo_documento
         *
         * @return  self
         */ 
        public function setTitulo_documento($titulo_documento)
        {
                $this->titulo_documento = $titulo_documento;

                return $this;
        }

        /**
         * Get the value of tipo_documento
         */ 
        public function getTipo_documento()
        {
                return $this->tipo_documento;
        }

        /**
         * Set the value of tipo_documento
         *
         * @return  self
         */ 
        public function setTipo_documento($tipo_documento)
        {
                $this->tipo_documento = $tipo_documento;

                return $this;
        }
    }
    
?>