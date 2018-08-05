<?php
//classes 
include "conexao.php";
require "funcionarios.php";
require "pizzariaClass.php";
?>



<?php
if(!empty($_REQUEST['nome'])
   ||!empty($_REQUEST['cpf'])
   ||!empty($_REQUEST['rg'])
   ||!empty($_REQUEST['cargo'])
   ||!empty($_REQUEST['rua'])
   ||!empty($_REQUEST['bairro'])
      ||!empty($_REQUEST['salario'])
      ||!empty($_REQUEST['telefone'])){
  funcionarios::cadastrandoFuncionario($con,$_REQUEST['nome'],$_REQUEST['cpf'],$_REQUEST['rg'],$_REQUEST['cargo'],$_REQUEST['salario'],$_REQUEST['rua'],$_REQUEST['bairro'],$_REQUEST['telefone']);
//echo "<script>alert('foi clickado')</script>";
}

?>




<?php
//objetos
$piz=new pizzariaClass();
//$c1=new cliente(); 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="icon" href="../img/Pizza.ico"/>
  <link rel="stylesheet" href="../css/index.css" />
  <script src="../js/jquery.min.js" ></script>
  <meta charset="UTF-8">
  <title> <?php echo $piz->Titulo($con); ?>
  </title>
</head>
  <body>
  <pre>
  <fildset>
    <h2><?php echo $piz->Titulo($con);?>Funcionário</h2>
  <form id="formulario" action='CadastrarFuncionario.php' method="GET">
  Funcionário          <input type="text" name="nome" id="nome">
  Cpf                  <input type="text" name="cpf" id="cpf">
  Rg                   <input type="text" name="rg" id="rg">
  Cargo                <input type="text" name="cargo" id="cargo">
  Rua                  <input type="text" name="rua" id="rua">
  Bairro               <input type="text" name="bairro" id="bairro">
  Salário              <input type="text" name="salario" id="salario">
  Telefone             <input type="tel" name="telefone" id="telefone">
                      
    <input type="submit" id='cad' name='cad' value="cadastrar" onclick="alert('cadastrando com sucesso')">
   
        <!--input type="button" value="cadastrar" id="cad" style="width:150px"/-->
  </form>
  </fildset>
<script>
$(document).ready(function(){
$("#cad").click({
  //location.reload();
  alert('a');
});
});
</script>  
</body>
</html>