<?php
include "conexao.php";
include "pessoa.php";
$c1=new pessoa();


$c1->setNome($_REQUEST['nome'])
$c1->setCpf($_REQUEST['cpf']);
$c1->setRg($_REQUEST['rg']);
$c1->setNascimento($_REQUEST['nascimento']);
$c1->setRua($_REQUEST['rua']);
$c1->setBairro($_REQUEST['bairro']);
$c1->setEmail($_REQUEST['email']);
$c1->setTelefone($_REQUEST['telefone']);
  
#if butão for atualizar
if($_REQUEST['btn']=='remove'){
  $delete=$con->prepare('delete from cliente where cpf = :cpf');
  $delete->bindValue(':cpf',$_REQUEST['cpf2']);
  $delete->execute();
  $con=null;
  }
else{
//preparando valores para objetos e classes
/*
$p1->setNome($_GET['nome']);
$p1->setCpf($_GET['cpf']);
$p1->setRg($_GET['rg']);
$p1->setNascimento($_GET['nascimento']);
$p1->setRua($_GET['rua']);
$p1->setBairro($_GET['bairro']);
$p1->setEmail($_GET['email']);
$p1->setTelefone($_GET['telefone']);
*/
//inserção de addos

$insert=$con->prepare('update cliente set nome=:nome,cpf=:cpf,rg=:rg,nascimento=:nascimento,rua:rua,rua=:bairro,email=:email,telefone=:telefone)');
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
  }
