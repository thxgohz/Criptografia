
create database criptografia;
use criptografia;

create table tbl_usuario(
cd_usuario int primary key auto_increment,
nome varchar(80) not null,
email varchar(80) not null,
chaveP varchar(12) not null
);

insert into tbl_usuario
values(default, 'thiago','thiago@email.com','1234');