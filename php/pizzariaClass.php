<?php
require "conexao.php";

class pizzariaClass{

  public $nome;
  public $dono;
  public $telefone;
  public $endereco;
  
  public function getNome(){
  return $this->nome;
 
  }
  
  public function setNome($nome){
    $this->nome=$nome;
  }

  
public function getDono(){
  return $this->dono;
  }
  
  public function setDono($dono){
$this->dono=$dono;
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
    }
  
  
}