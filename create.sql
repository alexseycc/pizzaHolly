create database pizzaholly;use pizzaholly

create table cliente(nome varchar(30),cpf varchar(20),rg varchar(20),nascimento date,rua varchar(30),
bairro varchar(10),email varchar(30),telefone varchar(20),ddd varchar(5) default '+5571');

create table pizzaria(nome varchar(10),endereco varchar(20),telefone varchar(20),email varchar(30));

create table venda(pizza varchar(10),quantidade int,preco float,total float,atendente varchar(20),dat
a date,hora time);