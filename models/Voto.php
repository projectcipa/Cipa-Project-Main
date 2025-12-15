<?php

        require_once __DIR__ . "./Funcionario.php";

        class Voto {
                private int $id_voto;
                private string $data_hora_voto;
                private Funcionario $funcionario_FK;

                public function __construct(
                $_idVoto,
                $_dataHoraVoto,
                $_funcionarioFK
                ) {
                $this->id_voto = $_idVoto;
                $this->data_hora_voto = $_dataHoraVoto;
                $this->funcionario_FK = $_funcionarioFK;
                }

                /**
                 * Get the value of id_voto
                 */ 
                public function getId_voto()
                {
                        return $this->id_voto;
                }

                /**
                 * Set the value of id_voto
                 *
                 * @return  self
                 */ 
                public function setId_voto($id_voto)
                {
                        $this->id_voto = $id_voto;

                        return $this;
                }

                /**
                 * Get the value of data_hora_voto
                 */ 
                public function getData_hora_voto()
                {
                        return $this->data_hora_voto;
                }

                /**
                 * Set the value of data_hora_voto
                 *
                 * @return  self
                 */ 
                public function setData_hora_voto($data_hora_voto)
                {
                        $this->data_hora_voto = $data_hora_voto;

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
        }
?>