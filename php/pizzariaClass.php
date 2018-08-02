<?php
require "conexao.php";

class pizzariaClass{

  public $nome;
  public $email;
  public $telefone;
  public $endereco;
  
  
  

  public function getNome(){
  return $this->nome;
 
  }
  
  public function setNome($nome){
    $this->nome=$nome;
  }

  
public function getEmail(){
  return $this->email;
  }
  
  public function setEmail($email){
$this->email=$email;
  }
  
  public function getTelefone(){
  return $this->telefone;
  }
  
  public function setTelefone($telefone){
$this->telefone=$telefone;
  }
  
  public function getEndereco(){
  return $this->endereco;
  }
  
  public function setEndereco($endereco){
$this->endereco=$endereco;
  }

  

public function Titulo($con){
  $title=$con->prepare("select nome from pizzaria");
   $title->execute();
   $title=$title->fetch(); 
   echo $title['nome'];
$con=null;    
}
 
  public function remove($con){
    $re=$con->prepare('delete from pizzaria where nome is null');
    $re->execute();
    $con=null;
  }
  
}