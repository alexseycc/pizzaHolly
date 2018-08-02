<?php
require "pizzariaClass.php";
?>
<?php
$piz=new pizzariaClass();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <style>
  @import url(../css/index.css);
</style>
  <meta charset="UTF-8">
  <title><?php echo $piz->Titulo($con);?></title>
</head>
<body>
  <div>
    <container>
  <label for="">PaizzariaNome</label><input type="text" name="PaizzariaNome" id="PaizzariaNome" class="PaizzariaNome">
  <br>
  <label for="">Endereco</label><input type="text" name="Endereco" id="Endereco" class="Endereco">
  <br>
  <label for="">Telefone</label><input type="tel" name="Telefone" id="Telefone" class="Telefone">
  <br>
  <label for="">Email</label><input type="email" name="Email" id="Email" class="Email">
  <br>
      <input type="button" name="cad" id="cad" class="cad" value="cadastrar">
      </container>
  </div> 

  </body>
</html>