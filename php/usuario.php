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
    <container>
      <select id="selections" name="selections">
       <?php echo $c1->clientes($con);?>
      </select>
    </container>
  </div>
    </container>
  </div>
<?php
for($i=1;$i<=5;$i++)
echo "<br>";
?>
<p id="result">
  
</p>



<script>
$(document).ready(function(){
  $("#selections").change(function(){
    //alert($(this).val());
    $.post("RemoverUser.php",{selections:$(this).val()},function(data){
     // alert(data);
    $("#result").html(data);
    });
    
  });
  
});
</script>

</body>
</html>