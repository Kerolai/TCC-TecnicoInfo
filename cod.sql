/*Dados MySql da plataforma*/

myslq -u root;
CREATE DATABASE tekmind;
USE tekmind;

CREATE TABLE usuarios (
	idUsuario int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nomeUsuario varchar(100) NOT NULL,
	emailUsuario varchar(50) NOT NULL,
	enderecoUsuario varchar(50),
	cpfUsuario varchar(11) NOT NULL,
	senhaUsuario varchar(32) NOT NULL);

CREATE TABLE forum (
	idMensagem int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	data timestamp default current_timestamp(),
	de varchar (50) NOT NULL,
	para varchar (50) NOT NULL,
	mensagem text NOT NULL);

CREATE TABLE avaliacao (
	idAval int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	qnt_estrela int NOT NULL,
	created datetime NOT NULL,
	modified datetime DEFAULT NULL);

insert into usuarios value(' ', 'Elisângela Schaefer de Mello', 'elisschaefermello60@gmail.com', 'Rua Pinheiro Machado, 405', '04830945010', MD5('98765'));
insert into usuarios value(' ', 'Kerolai', 'kerolai@gmail.com', 'Vasconcelos Deuses, 89', '04728492101', MD5('12345'));