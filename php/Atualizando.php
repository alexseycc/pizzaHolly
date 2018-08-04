<?php
include "conexao.php";
include "pessoa.php";
$p1=new pessoa();

$select=$con->prepare("select * from cliente where cpf = :cpf");
//$select->bindValue(':cpf',$_REQUEST['cpf2']);
$select->bindValue(':cpf',$_REQUEST['cpf2']);
//895.895.654.12
$select->execute();
$dado=$select->fetch();


/*------> teste 
if(empty($_REQUEST['email']))
echo "vazio";
else{
echo "cheio";
  }
*/



if(empty($_REQUEST['nome'])){
$p1->setNome($dado['nome']);
}
else{
$p1->setNome($_REQUEST['nome']);
}
if(empty($_REQUEST['cpf'])){
$p1->setCpf($dado['cpf']);
}
else{
$p1->setCpf($_REQUEST['cpf']);
}
if(empty($_REQUEST['rg'])){
  $p1->setRg($dado['rg']);
}
else{
  $p1->setRg($_REQUEST['rg']);
}
if(empty($_REQUEST['nascimento'])){
$p1->setNascimento($dado['nascimento']);
  }
else{
  $p1->setNascimento($_REQUEST['nascimento']);
}
if(empty($_REQUEST['rua'])){
$p1->setRua($dado['rua']);
}
else{
  $p1->setRua($_REQUEST['rua']);
}
if(empty($_REQUEST['bairro'])){
$p1->setBairro($dado['bairro']);
}
else{
  $p1->setBairro($_REQUEST['bairro']);
}
if(empty($_REQUEST['email'])){
$p1->setEmail($dado['email']);
}
else{
  $p1->setEmail($_REQUEST['email']);
}
if(empty($_REQUEST['telefone'])){
$p1->setTelefone($dado['telefone']);
}
else{
$p1->setTelefone($_REQUEST['telefone']);  
}
#if butão !for atualizar
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

$insert=$con->prepare('update cliente set nome=:nome,cpf=:cpf,rg=:rg,nascimento=:nascimento,rua=:rua,bairro=:bairro,email=:email,telefone=:telefone where cpf=:cpf2');
$insert->bindValue(':nome',$p1->getNome());
$insert->bindValue(':cpf',$p1->getCpf());
$insert->bindValue(':rg',$p1->getRg());
$insert->bindValue(':nascimento',$p1->getNascimento());
$insert->bindValue(':rua',$p1->getRua());
$insert->bindValue(':bairro',$p1->getBairro());
$insert->bindValue(':email',$p1->getEmail());
$insert->bindValue(':telefone',$p1->getTelefone());
$insert->bindValue(':cp2',$_REQUEST['cpf2']);
$insert->execute();  
$con=null;
  }