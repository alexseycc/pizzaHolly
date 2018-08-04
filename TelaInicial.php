<?php
//classes 
require "./php/pizzariaClass.php";
include "./php/conexao.php";
require "./php/cliente.php";
?>
<?php
//objetos
$piz=new pizzariaClass();
$c1=new cliente(); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link href="./css/font.css" rel="stylesheet" />
    <link rel="icon" href="./img/Pizza.ico"/>
  <link rel="stylesheet" href="./css/TelaInicial.css" />
  <script src="./js/jquery.min.js" ></script>
  <meta charset="UTF-8">
  <title>
 <?php echo $piz->Titulo($con); ?>
  </title>
</head>
<body>
  <div class="container">
            <div class="content">
<div class="title"> <?php echo $piz->Titulo($con); ?></div>
            <input type="button" value="Cadastre Cliente" onclick="window.open('index.php','_blank')" /><input type="button" value="Consultar Dados" onclick="window.open('./php/usuario.php','_blank')"/>
            </div>
        </div>

  </body>
</html>