<?php
/*
include "conexao.php";
include "cliente.php";
$c1=new cliente();


//preparando valores para objetos e classes
$c1->setNome($_GET['nome']);
$c1->setCpf($_GET['cpf']);
$c1->setRg($_GET['rg']);
$c1->setNascimento($_GET['nascimento']);
$c1->setRua($_GET['rua']);
$c1->setBairro($_GET['bairro']);
$c1->setEmail($_GET['email']);
$c1->setTelefone($_GET['telefone']);

//inserção de addos
$insert=$con->prepare('insert into cliente 
(nome,cpf,rg,nascimento,rua,bairro,email,telefone)
values(:nome,:cpf,:rg,:nascimento,:rua,:bairro,:email,:telefone)');
$insert->bindValue(':nome',$c1->getNome());
$insert->bindValue(':cpf',$c1->getCpf());
$insert->bindValue(':rg',$c1->getRg());
$insert->bindValue(':nascimento',$c1->getNascimento());
$insert->bindValue(':rua',$c1->getRua());
$insert->bindValue(':bairro',$c1->getBairro());
$insert->bindValue(':email',$c1->getEmail());
$insert->bindValue(':telefone',$c1->getTelefone());
$insert->execute();  
$con=null;
*/
include "conexao.php";
include "pessoa.php";
$p1=new pessoa();


//preparando valores para objetos e classes
$p1->setNome($_GET['nome']);
$p1->setCpf($_GET['cpf']);
$p1->setRg($_GET['rg']);
$p1->setNascimento($_GET['nascimento']);
$p1->setRua($_GET['rua']);
$p1->setBairro($_GET['bairro']);
$p1->setEmail($_GET['email']);
$p1->setTelefone($_GET['telefone']);

//inserção de addos
$insert=$con->prepare('insert into cliente 
(nome,cpf,rg,nascimento,rua,bairro,email,telefone)
values(:nome,:cpf,:rg,:nascimento,:rua,:bairro,:email,:telefone)');
$insert->bindValue(':nome',$p1->getNome());
$insert->bindValue(':cpf',$p1->getCpf());
$insert->bindValue(':rg',$p1->getRg());
$insert->bindValue(':nascimento',$p1->getNascimento());
$insert->bindValue(':rua',$p1->getRua());
$insert->bindValue(':bairro',$p1->getBairro());
$insert->bindValue(':email',$p1->getEmail());
$insert->bindValue(':telefone',$p1->getTelefone());
$insert->execute();  
$con=null;
