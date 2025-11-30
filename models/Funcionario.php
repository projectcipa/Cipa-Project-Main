<?php
    class Funcionario  {
        private int $id_funcionario;
	    private string $nome_funcionario;
	    private string $sobrenome_funcionario;
	    private string $CPF_funcionario;
	    private string $data_nascimento_funcionario;
	    private string $data_contratacao_funcionario;
	    private int $telefone_funcionario;
	    private string $matricula_funcionario;
	    private int $codigo_voto_funcionario;
	    private bool $ativo_funcionario;
	    private bool $ADM_funcionario;
	    private string $email_funcionario;
	    private string $senha_funcionario;

        public function __construct(
            $_idFuncionario,
	        $_nomeFuncionario,
	        $_sobrenomeFuncionario,
	        $_CPFFuncionario,
	        $_dataNascimentoFuncionario,
	        $_dataContratacaoFuncionario,
	        $_telefoneFuncionario,
	        $_matriculaFuncionario,
	        $_codigoVotoFuncionario,
	        $_ativoFuncionario,
	        $_ADMFuncionario,
	        $_emailFuncionario,
	        $_senhaFuncionario
        ) {
            $this->id_funcionario = $_idFuncionario;
            $this->nome_funcionario = $_nomeFuncionario;
            $this->sobrenome_funcionario = $_sobrenomeFuncionario;
            $this->CPF_funcionario = $_CPFFuncionario;
            $this->data_nascimento_funcionario = $_dataNascimentoFuncionario;
            $this->data_contratacao_funcionario = $_dataContratacaoFuncionario;
            $this->telefone_funcionario = $_telefoneFuncionario;
            $this->matricula_funcionario = $_matriculaFuncionario;
            $this->codigo_voto_funcionario = $_codigoVotoFuncionario;
            $this->ativo_funcionario = $_ativoFuncionario;
            $this->ADM_funcionario = $_ADMFuncionario;
            $this->email_funcionario = $_emailFuncionario;
            $this->senha_funcionario = $_senhaFuncionario;
        }

        

        /**
         * Get the value of id_funcionario
         */ 
        public function getId_funcionario()
        {
                return $this->id_funcionario;
        }

        /**
         * Set the value of id_funcionario
         *
         * @return  self
         */ 
        public function setId_funcionario($id_funcionario)
        {
                $this->id_funcionario = $id_funcionario;

                return $this;
        }

	    /**
	     * Get the value of nome_funcionario
	     */ 
	    public function getNome_funcionario()
	    {
	    	    return $this->nome_funcionario;
	    }

	    /**
	     * Set the value of nome_funcionario
	     *
	     * @return  self
	     */ 
	    public function setNome_funcionario($nome_funcionario)
	    {
	    	    $this->nome_funcionario = $nome_funcionario;

	    	    return $this;
	    }

	    /**
	     * Get the value of sobrenome_funcionario
	     */ 
	    public function getSobrenome_funcionario()
	    {
	    	    return $this->sobrenome_funcionario;
	    }

	    /**
	     * Set the value of sobrenome_funcionario
	     *
	     * @return  self
	     */ 
	    public function setSobrenome_funcionario($sobrenome_funcionario)
	    {
	    	    $this->sobrenome_funcionario = $sobrenome_funcionario;

	    	    return $this;
	    }

	    /**
	     * Get the value of CPF_funcionario
	     */ 
	    public function getCPF_funcionario()
	    {
	    	    return $this->CPF_funcionario;
	    }

	    /**
	     * Set the value of CPF_funcionario
	     *
	     * @return  self
	     */ 
	    public function setCPF_funcionario($CPF_funcionario)
	    {
	    	    $this->CPF_funcionario = $CPF_funcionario;

	    	    return $this;
	    }

	    /**
	     * Get the value of data_nascimento_funcionario
	     */ 
	    public function getData_nascimento_funcionario()
	    {
	    	    return $this->data_nascimento_funcionario;
	    }

	    /**
	     * Set the value of data_nascimento_funcionario
	     *
	     * @return  self
	     */ 
	    public function setData_nascimento_funcionario($data_nascimento_funcionario)
	    {
	    	    $this->data_nascimento_funcionario = $data_nascimento_funcionario;

	    	    return $this;
	    }

	    /**
	     * Get the value of data_contratacao_funcionario
	     */ 
	    public function getData_contratacao_funcionario()
	    {
	    	    return $this->data_contratacao_funcionario;
	    }

	    /**
	     * Set the value of data_contratacao_funcionario
	     *
	     * @return  self
	     */ 
	    public function setData_contratacao_funcionario($data_contratacao_funcionario)
	    {
	    	    $this->data_contratacao_funcionario = $data_contratacao_funcionario;

	    	    return $this;
	    }

	    /**
	     * Get the value of telefone_funcionario
	     */ 
	    public function getTelefone_funcionario()
	    {
	    	    return $this->telefone_funcionario;
	    }

	    /**
	     * Set the value of telefone_funcionario
	     *
	     * @return  self
	     */ 
	    public function setTelefone_funcionario($telefone_funcionario)
	    {
	    	    $this->telefone_funcionario = $telefone_funcionario;

	    	    return $this;
	    }

	    /**
	     * Get the value of matricula_funcionario
	     */ 
	    public function getMatricula_funcionario()
	    {
	    	    return $this->matricula_funcionario;
	    }

	    /**
	     * Set the value of matricula_funcionario
	     *
	     * @return  self
	     */ 
	    public function setMatricula_funcionario($matricula_funcionario)
	    {
	    	    $this->matricula_funcionario = $matricula_funcionario;

	    	    return $this;
	    }

	    /**
	     * Get the value of codigo_voto_funcionario
	     */ 
	    public function getCodigo_voto_funcionario()
	    {
	    	    return $this->codigo_voto_funcionario;
	    }

	    /**
	     * Set the value of codigo_voto_funcionario
	     *
	     * @return  self
	     */ 
	    public function setCodigo_voto_funcionario($codigo_voto_funcionario)
	    {
	    	    $this->codigo_voto_funcionario = $codigo_voto_funcionario;

	    	    return $this;
	    }

	    /**
	     * Get the value of ativo_funcionario
	     */ 
	    public function getAtivo_funcionario()
	    {
	    	    return $this->ativo_funcionario;
	    }

	    /**
	     * Set the value of ativo_funcionario
	     *
	     * @return  self
	     */ 
	    public function setAtivo_funcionario($ativo_funcionario)
	    {
	    	    $this->ativo_funcionario = $ativo_funcionario;

	    	    return $this;
	    }

	    /**
	     * Get the value of ADM_funcionario
	     */ 
	    public function getADM_funcionario()
	    {
	    	    return $this->ADM_funcionario;
	    }

	    /**
	     * Set the value of ADM_funcionario
	     *
	     * @return  self
	     */ 
	    public function setADM_funcionario($ADM_funcionario)
	    {
	    	    $this->ADM_funcionario = $ADM_funcionario;

	    	    return $this;
	    }

	    /**
	     * Get the value of email_funcionario
	     */ 
	    public function getEmail_funcionario()
	    {
	    	    return $this->email_funcionario;
	    }

	    /**
	     * Set the value of email_funcionario
	     *
	     * @return  self
	     */ 
	    public function setEmail_funcionario($email_funcionario)
	    {
	    	    $this->email_funcionario = $email_funcionario;

	    	    return $this;
	    }

	    /**
	     * Get the value of senha_funcionario
	     */ 
	    public function getSenha_funcionario()
	    {
	    	    return $this->senha_funcionario;
	    }

	    /**
	     * Set the value of senha_funcionario
	     *
	     * @return  self
	     */ 
	    public function setSenha_funcionario($senha_funcionario)
	    {
	    	    $this->senha_funcionario = $senha_funcionario;

	    	    return $this;
	    }
    }
?>