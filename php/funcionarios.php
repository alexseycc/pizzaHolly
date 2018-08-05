<?php
include "./conexao.php";
include "pessoa.php";

class funcionarios extends pessoa{
  
public function cadastrandoFuncionario($con,$nome,$cpf,$rg,$cargo,$salario,$rua,$bairro,$telefone){
  $insert=$con->prepare('insert into funcionario 
(nome,cpf,rg,cargo,salario,rua,bairro,telefone)
values(:nome,:cpf,:rg,:cargo,:salario,:rua,:bairro,:telefone)');

  $insert->bindValue(':nome',$nome);
$insert->bindValue(':cpf',$cpf);
$insert->bindValue(':rg',$rg);
//$insert->bindValue(':nascimento',$nascimento);
$insert->bindValue(':cargo',$cargo);
$insert->bindValue(':salario',$salario);
$insert->bindValue(':rua',$rua);
$insert->bindValue(':bairro',$bairro);
//$insert->bindValue(':email',$email);
$insert->bindValue(':telefone',$telefone);
$insert->execute();  
$con=null;

    }

public function x($con,$nome,$cpf,$rg,$nascimento,$cargo,$salario){
   $insert=$con->prepare('insert into funcionario (nome,cpf,rg,nascimento) values(:cargo)');
  // $insert=$con->query('insert into funcionario (nome,cpf,rg,nascimento) values(:cargo)');
  $insert->bindValue(':cargo',$cargo);
  $insert->execute();
}  
  
  
  
}