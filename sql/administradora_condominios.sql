/*criação do BD*/

CREATE DATABASE administradora_condominios DEFAULT CHARACTER SET UTF8;
USE administradora_condominios;

CREATE TABLE condominio(
	id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50),
    cnpj VARCHAR(14),
    endereco VARCHAR(100)
);

CREATE TABLE tipo_morador(
	id INT PRIMARY KEY AUTO_INCREMENT,
    descricao VARCHAR(10)
);
CREATE TABLE morador(
	id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50),
    cpf VARCHAR(11),
    email VARCHAR(20),
    senha VARCHAR(16),
    telefone_celular VARCHAR(11),
    telefone_fixo VARCHAR(10),
    id_condominio INT,
    numero_bloco INT,
    numero_apto INT,
    id_tipo_morador INT,
    CONSTRAINT fk_morador_condominio FOREIGN KEY (id_condominio) REFERENCES condominio(id),
    CONSTRAINT fk_morador_tipo FOREIGN KEY (id_tipo_morador) REFERENCES tipo_morador(id)
);

CREATE TABLE salao_de_festas(
	id INT PRIMARY KEY AUTO_INCREMENT,
	id_condominio INT,
    CONSTRAINT fk_salao_condominio FOREIGN KEY (id_condominio) REFERENCES condominio(id)
);

CREATE TABLE reserva_salao(
	id INT PRIMARY KEY AUTO_INCREMENT,
    id_salao INT,
    id_condominio INT,
    id_morador INT,
    data_reserva DATE,
    hora TIME,
    
    CONSTRAINT fk_reserva_salao FOREIGN KEY (id_salao) REFERENCES salao_de_festas(id),
	CONSTRAINT fk_reserva_condominio FOREIGN KEY (id_condominio) REFERENCES condominio(id),
	CONSTRAINT fk_reserva_morador FOREIGN KEY (id_morador) REFERENCES morador(id)
);

CREATE TABLE ocorrencia(
	id INT PRIMARY KEY AUTO_INCREMENT,
    id_condominio INT,
    id_morador INT,
    id_categoria INT,
    descricao VARCHAR(50),
	CONSTRAINT fk_ocorrencias_condominio FOREIGN KEY (id_condominio) REFERENCES condominio(id),
	CONSTRAINT fk_ocorrencias_morador FOREIGN KEY (id_morador) REFERENCES morador(id),
    CONSTRAINT fk_ocorrencias_categoria FOREIGN KEY (id_categoria) REFERENCES categoria_ocorrencia(id)
);

CREATE TABLE turno_trabalho(
	id INT PRIMARY KEY AUTO_INCREMENT,
    descricao VARCHAR(10)
);

CREATE TABLE funcao_trabalho(
	id INT PRIMARY KEY AUTO_INCREMENT,
    descricao VARCHAR(9)
);

CREATE TABLE funcionario(
	id INT PRIMARY KEY AUTO_INCREMENT,
    id_condominio INT,
    nome VARCHAR(50),
    cpf VARCHAR(11),
    id_turno_trabalho INT,
    id_funcao_trabalho INT,
    salario DECIMAL,
    endereco VARCHAR(50),
	CONSTRAINT fk_funcionario_condominio FOREIGN KEY (id_condominio) REFERENCES condominio(id),
    CONSTRAINT fk_funcionario_turno FOREIGN KEY (id_turno_trabalho) REFERENCES turno_trabalho(id),
    CONSTRAINT fk_funcionario_funcao FOREIGN KEY (id_funcao_trabalho) REFERENCES funcao_trabalho(id)
);

CREATE TABLE achados_perdidos(
	id INT PRIMARY KEY AUTO_INCREMENT,
    id_condominio INT,
    id_funcionario INT,
    descricao VARCHAR(20),
	CONSTRAINT fk_achados_condominio FOREIGN KEY (id_condominio) REFERENCES condominio(id),
    CONSTRAINT fk_achados_funcionario FOREIGN KEY (id_funcionario) REFERENCES funcionario(id)
);

CREATE TABLE categoria_ocorrencia(
	id INT PRIMARY KEY AUTO_INCREMENT,
    descricao VARCHAR(30)
);

/*dez inserções*/
insert into condominio (nome, cnpj, endereco) values ("Edificio ABC", "00000000000000", "Rua abc, 123");
insert into condominio (nome, cnpj, endereco) values ("Edificio DEF", "11111111111111", "Rua def, 456");
insert into tipo_morador (descricao) values ("Síndico");
insert into tipo_morador (descricao) values ("Subsíndico");
insert into tipo_morador (descricao) values ("Morador");
insert into turno_trabalho (descricao) values ("Matutino");
insert into turno_trabalho (descricao) values ("Vespertino");
insert into turno_trabalho (descricao) values ("Noturno");
insert into funcao_trabalho (descricao) values ("Porteiro");
insert into funcao_trabalho (descricao) values ("Zelador");
insert into categoria_ocorrencia (descricao) values ("Perturbação do sossego");
insert into morador 
	(nome, cpf, email, senha, telefone_celular, telefone_fixo, id_condominio, numero_bloco, numero_apto, id_tipo_morador) 
    values 
    ("Matheus Heck", "12345678910", "matheus@123.com.br", "senha123", "48912345678", "4811111111", 1, 1, 505, 1);
    
insert into morador 
	(nome, cpf, email, senha, telefone_celular, telefone_fixo, id_condominio, numero_bloco, numero_apto, id_tipo_morador) 
    values 
    ("Igor Correa", "01987654321", "igor@123.com.br", "123senha", "48987654321", "4822222222", 2, 1, 104, 2);
    
insert into morador 
	(nome, cpf, email, senha, telefone_celular, telefone_fixo, id_condominio, numero_bloco, numero_apto, id_tipo_morador) 
    values 
    ("Yuri Salvador", "65432198712", "yuri@123.com.br", "se123nha", "48945612378", "4833333333", 1, 1, 402, 3);
    
insert into funcionario 
	(id_condominio, nome, cpf, id_turno_trabalho, id_funcao_trabalho, salario, endereco)
    values
    (1, "Severino Santos", "12378945612", 1, 1, 2552.50, "Rua ghi 123");

insert into funcionario 
	(id_condominio, nome, cpf, id_turno_trabalho, id_funcao_trabalho, salario, endereco)
    values
    (1, "Nazareno da Silva", "78932145625", 2, 2, 2342.40, "Rua jkl 123");

insert into funcionario 
	(id_condominio, nome, cpf, id_turno_trabalho, id_funcao_trabalho, salario, endereco)
    values
    (1, "Debora Souza", "32165478935", 1, 1, 2552.50, "Rua mno 123");

insert into funcionario 
	(id_condominio, nome, cpf, id_turno_trabalho, id_funcao_trabalho, salario, endereco)
    values
    (1, "Celia Bastos", "65412398712", 2, 2, 2342.40, "Rua pqr 123");
    
insert into achados_perdidos 
	(id_condominio, id_funcionario, descricao)
    values
    (1, 1, "Squeeze de academia azul com branco");

insert into salao_de_festas 
	(id_condominio)
    values
    (1);
    
insert into salao_de_festas 
	(id_condominio)
    values
    (2);

insert into reserva_salao
	(id_salao, id_condominio, id_morador, data_reserva, hora)
    values
    (1, 1, 1, CURDATE(), CURTIME());
    
insert into reserva_salao
	(id_salao, id_condominio, id_morador, data_reserva, hora)
    values
    (1, 1, 2, CURDATE(), CURTIME());

insert into ocorrencia
	(id_condominio, id_morador, id_categoria, descricao)
    values
    (1, 1, 1, "Vizinho com som alto em horário proibido");
    
/*cinco alterações com where*/
UPDATE funcionario set salario = 3051.25 WHERE id = 1;
UPDATE funcionario set salario = 2097.42 WHERE id = 4;
UPDATE morador set email = "heck@123.com.br" WHERE id = 1;
UPDATE condominio set nome = "Condomínio Residencial Céu Azul" WHERE id = 1;
UPDATE achados_perdidos set descricao = "Bolsa de água quente verde" WHERE id = 1;

/*cinco exclusões com where*/
DELETE FROM funcionario WHERE id = 4;
DELETE FROM funcionario WHERE id = 3;
DELETE FROM morador WHERE id = 3;
DELETE FROM turno_trabalho WHERE id = 3;
DELETE FROM reserva_salao WHERE id = 1;

/*dez seleções sendo no mínimo 5 com JOIN*/ 
select * from condominio;
select * from turno_trabalho;
select * from funcao_trabalho;
select * from tipo_morador;
select * from morador;

select f.nome as Funcionario, ap.descricao as AchadosEPerdidos
from funcionario as F
inner join achados_perdidos as AP
on F.id = AP.id_funcionario
where ap.id_condominio = 1;

select m.nome as Morador, rs.data_reserva as ReservaSalao
from morador as M
inner join reserva_salao as RS
on M.id = RS.id_morador;

select m.nome as Condômino, tp.descricao as TipoCondomino
from morador as M
inner join tipo_morador as TP
on M.id_tipo_morador = TP.id
where TP.descricao like '%sindico%';

select m.nome as Morador, c.nome as NomeCondominio
from morador as M
inner join condominio as C
on M.id_condominio = C.id
where C.nome like '%céu%';

select o.descricao as MotivoOcorrencia, m.nome as Morador
from ocorrencia as O
inner join morador as M
on O.id_morador = M.id
where O.id_categoria = 1;



ALTER TABLE achados_perdidos MODIFY descricao varchar(50);
ALTER TABLE funcionario MODIFY salario DECIMAL(7,2);
