<?php
//classes 
require "./pizzariaClass.php";
include "./conexao.php";
require "./cliente.php";
?>
<?php
//objetos
$piz=new pizzariaClass();
$c1=new cliente(); 

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="icon" href="../img/Pizza.ico"/>
  <link rel="stylesheet" href="../css/index.css" />
<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"--> 
  <style>
  @import url("../css/bootstrap.min.css");
 // @import url("../css/bootstrap-theme.min.css");
  </style>
  <script src="../js/jquery.min.js" ></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script src="../js/jquery.mask.min.js"></script>
  <script src="../js/bootstrap-notify.min.js" ></script>
  
  
  <script>
  $(document).ready(function(){
    $('#cpf').mask('000.000.000.00');
    $('#nascimento').mask('00/00/0000');
    $("#telefone").mask("0000-0000");
    $("#rg").mask("999.999.999-W", {
				translation: {
					'W': {
						pattern: /[X0-9]/
					}
				},
				reverse: true
			})
			
			var options = {
				translation: {
					'A': {pattern: /[A-Z]/},
					'a': {pattern: /[a-zA-Z]/},
					'S': {pattern: /[a-zA-Z0-9]/},
					'L': {pattern: /[a-z]/},
				}
			}
    
  });
  </script>
  
  
  <meta charset="UTF-8">
  <title>
    
 <?php/*
      $title=$con->prepare("select nome from pizzaria");
   $title->execute();
   $title=$title->fetch(); 
   echo $title['nome'];
*/echo $piz->Titulo($con);?>
  </title>
</head>
  <pre>
  <fildset>
    <h2><?php echo $piz->Titulo($con);?>Cliente</h2>
  <form id="formulario">
 
 Cliente               <input type="text" name="nome" id="nome" placeholder="nome completo">
  
 Cpf                   <input type="text" name="cpf" id="cpf" placeholder="000.000.000.00">
 
  Rg                   <input type="text" name="rg" id="rg" placeholder="000.000.000.0">
 
  Nascimento           <input type="text" name="nascimento" id="nascimento" placeholder="dd/mm/yyyyy">
 
  Rua                  <input type="text" name="rua" id="rua" placeholder="rua">
 
  Bairro               <input type="text" name="bairro" id="bairro" placeholder="bairro">
 
  Email                <input type="email" name="email" id="email" placeholder="usuario@exemplo.com">
 
  Telefone             <input type="tel" name="telefone" id="telefone" placeholder="(xx)9xxxx-xxxx">
                       <button type="button" class="btn btn-default btn-sm" id="cad"><span class="glyphicon glyphicon-send" >Cadastrar</span></button>
                      
                       <!--input type="button" value="cadastrar" id="cad" style="width:150px" /-->
  </form>
  </fildset>
<script>
$(document).ready(function(){
   $("#cad").click(function(){
    //$("#formulario")[0].reset();
      $.get("./CadastrarCliente.php",$("#formulario").serialize());
 alert("Cadastro Realizado com Sucesso!");
    document.getElementById("formulario").reset();
    });
});
</script>  
</body>
</html>