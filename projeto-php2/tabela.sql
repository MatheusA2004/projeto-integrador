CREATE DATABASE seac;

use seac;

create table usuario(
    id_usuario int PRIMARY KEY AUTO_INCREMENT,
    nome_usuario varchar(50) not null,
    senha varchar(70) not null
    );

create table admin(
    id_admin int PRIMARY KEY AUTO_INCREMENT,
    login varchar(70) not null,
    senha varchar(100) not null
);
create table chamados(
    id_chamado int PRIMARY KEY AUTO_INCREMENT,
    funcionario varchar(50) not null,
    maquina varchar(50) not null,
    sala varchar(50)     not null,
    urgencia varchar(50) not null,
    problema varchar(200) not null
);

INSERT INTO ADMIN VALUES(1, 'admin', sha1('admin'));
INSERT INTO usuario VALUES(1,'use', sha1(123));