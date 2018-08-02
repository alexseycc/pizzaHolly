<?php
require "pizzariaClass.php";
require "conexao.php";

$piz=new pizzariaClass();

$piz->setNome($_GET['PizzariaNome']);
$piz->setEmail($_GET['Email']);
$piz->setTelefone($_GET['Telefone']);
$piz->setEndereco($_GET['Endereco']);


$registro=$con->query('select count(*) from pizzaria')->rowCount();




if($registro>0){

echo "<script type='text/javascript'>alert('Pizzaria já Existente')</script>";
}

else{

$insert=$con->prepare('insert into pizzaria (nome,endereco,telefone,email) values(:pizzaria,:email,:telefone,:endereco)');
$insert->bindValue(':pizzaria',$piz->getNome());
$insert->bindValue(':email',$piz->getEmail());
$insert->bindValue(':telefone',$piz->getTelefone());
$insert->bindValue(':endereco',$piz->getEndereco());
$insert->execute();
$con=null;
echo "<script>alert('Registrada com sucesso!')</script>";
}