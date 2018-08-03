<?php
require "conexao.php";
require "pizzariaClass.php";
require "cliente.php";
?>
<?php
$piz=new pizzariaClass();
$c1 = new cliente();
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="../js/jquery.min.js" ></script>

  <link rel="icon" href="../img/Pizza.ico"/>
    <style>
  @import url(../css/index.css);
</style>
  <meta charset="UTF-8">
  <title><?php echo $piz->Titulo($con);?></title>
</head>
<body>
  <div>
    <container id="container">
      <form id="formulario" method="get">
  <label for="">PizzariaNome</label><input type="text" name="PizzariaNome" id="PizzariaNome" class="PaizzariaNome" value="staling">
  <br>
  <label for="">Endereco</label><input type="text" name="Endereco" id="Endereco" class="Endereco">
  <br>
  <label for="">Telefone</label><input type="tel" name="Telefone" id="Telefone" class="Telefone">
  <br>
  <label for="">Email</label><input type="email" name="Email" id="Email" class="Email">
  <br>
      <input type="button" name="cad" id="cad" class="cad" value="cadastrar">
      </form>
      </container>
  </div>
  <?php
  $select=$con->query('select count(*) from pizzaria')->rowcount();
  ?>
  <script>
   var mensagem = "<?php echo $select;?>";
   //alert(mensagem);
 // document.write(mensagem);
  </script>
<script>
  $(document).ready(function(){
  $("#cad").click(function(){
    var count="<?php echo $select;?>";
  $.ajax({
   url:"CadastroPizzaria.php", 
   data:$("formulario").serialize()/*{PizzariaNome:PizzariaNome,Endereco:Endereco,:Telefone:Telefone,Email:Email}*/, 
   success:function(){
  if(count==0){
    alert('pizzaria add com exito');  
     
  }
     else{
     alert('pizzaria já existe!');  
       
     }
  }
  });  
  });  
  });
  </script>
  <?php
  $nome="<script>document.write(document.getElementById('PizzariaNome').value)</script>";
  $c1->setNome($nome);
  echo "alan<br>";
  echo $c1->getNome();
  echo "<br>".$select;
// echo "<script typt='text/javascript'>alert('Pizzaria já Existente')</script>";
 // $piz->remove($con);
  ?>
  </body>
</html>