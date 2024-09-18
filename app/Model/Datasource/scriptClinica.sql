create database clinica;
use clinica;
create table pacientes(
	id int not null auto_increment,
    nome varchar(100) not null,
    dt_nasc date not null,
    cpf varchar(15) not null,
    telefone varchar(11) not null,
    primary key(id)
);
create  table medicos(
	id int not null auto_increment,
	nome varchar(100) not null,
	crm int not null,
    especialidade varchar(150) not null,
    primary key(id)
);
create table convenios(
	id int not null auto_increment,
    nome varchar(100) not null,
    primary key(id)
);
create table tipoAtendimentos(
	id int not null auto_increment,
    nome varchar(255) not null,
    primary key(id)
);

