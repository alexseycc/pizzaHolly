
    <script src="../js/jquery.min.js" ></script>


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

echo "<form id='formulario'>";
echo "<br>Nome:\t".$dado->nome."<br><input type='text' placeholder='novonome' id='nome' name='nome'/>".
  "<br>Cpf:\t".$dado->cpf."<br><input type='text' placeholder='novonome' name='cpf'/>".
  "<br>Rg:\t".$dado->rg."<br><input type='text' placeholder='novonome' name='rg'/>".
  "<br>Nascimento:\t".$dado->nascimento."<br><input type='text' placeholder='novonome' name='nascimento'/>".
  "<br>Rua:\t".$dado->rua."<br><input type='text' placeholder='novonome' name='rua'/>".
  "<br>Bairro:\t".$dado->bairro."<br><input type='text' placeholder='novonome' name='bairro'/>".
  "<br>Email:\t".$dado->email."<br><input type='text' placeholder='novonome' name='email'/>".
  "<br>DDD:\t".$dado->ddd."<br><input type='text' placeholder='novonome' name='ddd'/>".
  "<br>Telefone:\t".$dado->telefone."<br><input type='text' placeholder='novonome' name='telefone'/>"."<p>";
echo "<form>";
$con=null;
?>

<input type='button' id='remove' name='remove' value='remover usuário' />
<input type="button" name="atualizar" id="atualizar" value='atualizar usuário' />


<script>
  $(document).ready(function(){
  var cpf2="<?php echo $c1->getCpf();?>";
  
    
    
    $("#remove").click(function(){
  var btn=$(this).attr('name');
  var nome=$("#nome").val();
  var cpf=$("#cpf").val();
  var rg=$("#rg").val();
  var nascimento=$("#nascimento").val();
  var rua=$("#rua").val();
  var bairro=$("#bairro").val();
  var email=$("#email").val();
  //var ddd=$("#ddd").val();
  var telefone=$("#telefone").val();
  $.post("Atualizando.php",{btn:btn,cpf2:cpf2,nome:nome,cpf:cpf,rg:rg,nascimento:nascimento,rua:rua,bairro:bairro,email:email,telefone:telefone},function(){
//  if(btn=='remove'){
alert('removido com sucesso!');
   // if(document.getElementById('nome').value =='')
  //    alert('acertou');
//}
    });
 });   
    

    
    $("#atualizar").click(function(){
  var btn=$(this).attr('name');
  var nome=$("#nome").val();
  var cpf=$("#cpf").val();
  var rg=$("#rg").val();
  var nascimento=$("#nascimento").val();
  var rua=$("#rua").val();
  var bairro=$("#bairro").val();
  var email=$("#email").val();
  //var ddd=$("#ddd").val();
  var telefone=$("#telefone").val();
  $.post("Atualizando.php",{btn:btn,cpf2:cpf2,nome:nome,cpf:cpf,rg:rg,nascimento:nascimento,rua:rua,bairro:bairro,email:email,telefone:telefone},function(){
  alert('atualizado com sucesso!');
 });
});
      /*if(btn=='remove'){
alert('removido com sucesso!');
alert(document.getElementById('nome').value);
}
    else{
alert('atualizado com sucesso!');
  }
  */
  });

</script>