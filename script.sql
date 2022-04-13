mysql -u root

create database pjt2;

use pjt2;

create table usuario(
    idusuario int auto_increment primary key,
    nome varchar(20),
    email varchar(30) unique,
    senha varchar(50),
    cep varchar(20),
    rua varchar(20),
    num int(8),
    bairro varchar(20),
    cidade varchar(20),
    uf varchar(20)
);

desc usuario;

select * from usuario;

create table produtos(
    idproduto int auto_increment primary key,
    nomep varchar(20),
    modelo varchar(30),
    categoria varchar(10),
    cor varchar(40),
    estoque varchar(11),
    valor varchar(11),
    tamanho int(2),
    avaliacao int(1)
);

insert into produtos values(null,'Nike','AIR MAX 97 ','Casual','WHITE/RED CRUSH-BLACKENED BLUE','1','R$1.090,00','42','5');
insert into produtos values(null,'Nike','AIR MAX 97','Casual','METALLIC GOLD/VARSITY RED-BLACK','3','R$2.990,00','40','5');

desc produtos;

select * from produtos;
