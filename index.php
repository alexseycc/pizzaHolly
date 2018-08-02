<?php
//classes 
include "./php/pizzaria.php";
include "./php/conexao.php";
include "./php/cliente.php";
?>
<?php
//objetos
$piz=new pizzaria();
$c1=new cliente(); 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="icon" href="./img/Pizza.ico"/>
  <link rel="stylesheet" href="./css/index.css" />
  <script src="./js/jquery.min.js" ></script>
  <meta charset="UTF-8">
  <title>
 <?php
    $title=$con->prepare("select nome from pizzaria");
   $title->execute();
   $title=$title->fetch(); 
    echo $title['nome'];
    ?>
  </title>
</head>
  <pre>
  <fildset>
    <h2>PizzaHollyCliente</h2>
  <form id="formulario">
  Cliente              <input type="text" name="nome" id="nome">
  Cpf                  <input type="text" name="cpf" id="cpf">
  Rg                   <input type="text" name="rg" id="rg">
  Nascimento           <input type="date" name="nascimento" id="nascimento">
  Rua                  <input type="text" name="rua" id="rua">
  Bairro               <input type="text" name="bairro" id="bairro">
  Email                <input type="email" name="email" id="email">
  Telefone             <input type="tel" name="telefone" id="telefone">
  <input type="button" value="cadastrar" id="cad" />
  </form>
  </fildset>
  <?php
$c1->setNome("alan");
echo $c1->getNome();
$insert=$con->prepare('insert into cliente (nome) values (:nome)');
$insert->bindValue(':nome',$c1->getNome());
?>
<script>
$(document).ready(function(){
   $("#cad").click(function(){
    //$("#formulario")[0].reset();
      $.get("./php/CadastrarCliente.php",$("#formulario").serialize());
 alert("Cadastro Realizado com Sucesso!");
 //   document.getElementById("formulario").reset();
    });
});
</script>  
</body>
</html>