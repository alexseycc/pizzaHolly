<?php
require "cliente.php";
require "conexao.php";

$c1=new cliente();
$c1->setNome($_POST['selections']);


$select=$con->prepare("select * from cliente where nome = :nome");
$select->bindValue(':nome',$c1->getNome());
$select->execute();
//$dado=$select->fetch();-->objeto está vindo do banco,ñ da casse!,cada coluna um obj
$dado=$select->fetchobject();
echo "<br>Nome:\t".$dado->nome.
  "<br>Cpf:\t".$dado->cpf.
  "<br>Rg:\t".$dado->rg.
  "<br>Nascimento:\t".$dado->nascimento.
  "<br>Rua:\t".$dado->rua.
  "<br>Bairro:\t".$dado->bairro.
  "<br>Email:\t".$dado->email.
  "<br>DDD:\t".$dado->ddd.  
  "<br>Telefone:\t".$dado->telefone."<br>";
?>
<input type='button' id='remove' name='remove' value='remover usuário' onclick="alert('preparando para remover!')" />
<input type="button" name="" id="bt" onclick="alert('atualizando')" value='atualizar usuário' />