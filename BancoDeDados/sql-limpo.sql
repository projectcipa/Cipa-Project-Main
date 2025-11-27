CREATE DATABASE cipa_app;
USE cipa_app;

CREATE TABLE brancoounulo (
  id_branco_nulo INT NOT NULL AUTO_INCREMENT,
  quantidade_branco INT DEFAULT 0,
  quantidade_nulo INT DEFAULT 0,
  eleicao_FK INT NOT NULL,
  PRIMARY KEY (id_branco_nulo),
  CONSTRAINT eleicao_FK_brancoounulo FOREIGN KEY (eleicao_FK) REFERENCES eleicao (id_eleicao)
 /* CONSTRAINT brancoounulo_ibfk_1 FOREIGN KEY (eleicao_FK) REFERENCES eleicao (id_eleicao)*/
);

CREATE TABLE candidato (
  id_candidato INT NOT NULL AUTO_INCREMENT,
  funcionario_FK INT NOT NULL,
  foto_candidato VARCHAR(300) DEFAULT NULL,
  numero_candidato VARCHAR(10) NOT NULL,
  cargo_candidato VARCHAR(35) DEFAULT NULL,
  data_registro_candidato DATE NOT NULL,
  eleicao_FK INT NOT NULL,
  status_candidato_ata ENUM('eleito','suplente','participante') DEFAULT NULL,
  quantidade_voto_candidato INT DEFAULT NULL,
  PRIMARY KEY (id_candidato),
  UNIQUE KEY funcionario_FK (funcionario_FK),
  UNIQUE KEY numero_candidato (numero_candidato),
  UNIQUE KEY foto_candidato (foto_candidato),
  CONSTRAINT candidato_fk FOREIGN KEY (funcionario_FK) REFERENCES funcionario (id_funcionario),
  CONSTRAINT eleicao_fk FOREIGN KEY (eleicao_FK) REFERENCES eleicao (id_eleicao)
);

CREATE TABLE documento (
  id_documento 				int(11) NOT NULL AUTO_INCREMENT,
  data_hora_documento  		timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  data_inicio_documento 	date NOT NULL,
  data_fim_documento 		date NOT NULL,
  observacao_documento 		varchar(200) DEFAULT NULL,
  pdf_documento 			varchar(300) DEFAULT NULL,
  titulo_documento 			varchar(100) DEFAULT NULL,
  tipo_documento 			enum('edital','ata') DEFAULT NULL,
  PRIMARY KEY (id_documento)
);

CREATE TABLE eleicao (
  id_eleicao 				INT NOT NULL AUTO_INCREMENT,
  edital_FK 				INT NOT NULL,
  data_inicio_eleicao 		DATE NOT NULL,
  data_fim_eleicao 			DATE NOT NULL,
  status_eleicao 			VARCHAR(20) DEFAULT NULL,
  PRIMARY KEY (id_eleicao),
  CONSTRAINT eleicao_fk FOREIGN KEY (edital_FK) REFERENCES documento (id_documento)
);


CREATE TABLE funcionario (
  id_funcionario INT NOT NULL AUTO_INCREMENT,
  nome_funcionario VARCHAR(40) NOT NULL,
  sobrenome_funcionario VARCHAR(80) NOT NULL,
  CPF_funcionario VARCHAR(11) DEFAULT NULL,
  data_nascimento_funcionario DATE NOT NULL,
  data_contratacao_funcionario DATE NOT NULL,
  telefone_funcionario VARCHAR(11) NOT NULL,
  matricula_funcionario VARCHAR(20) NOT NULL,
  codigo_voto_funcionario CHAR(8) DEFAULT NULL,
  ativo_funcionario TINYINT(1) NOT NULL DEFAULT 1,
  ADM_funcionario TINYINT(1) NOT NULL DEFAULT 0,
  email_funcionario VARCHAR(100) NOT NULL,
  senha_funcionario VARCHAR(20) NOT NULL,
  PRIMARY KEY (id_funcionario),
  UNIQUE KEY email_funcionario (email_funcionario),
  UNIQUE KEY CPF_funcionario (CPF_funcionario),
  UNIQUE KEY codigo_voto_funcionario (codigo_voto_funcionario)
);


CREATE TABLE voto (
  id_voto INT NOT NULL AUTO_INCREMENT,
  data_hora_voto DATE NOT NULL,
  funcionario_FK INT NOT NULL,
  PRIMARY KEY (id_voto),
  KEY funcionario_FK (funcionario_FK),
  CONSTRAINT voto_fk FOREIGN KEY (funcionario_FK) REFERENCES funcionario (id_funcionario)
);

