<?php
require "conexao.php";

$conn=obter();
function obter(){
mysqli_connect("localhost","root","","pizzaholly");
//mysqli_select_db("pizzaholly");  
 }

//maneira 1
$registro=$con->query('select count(*) from pizzaria');
//$registro->execute();
$number = $registro->fetchColumn(); 

//maneira 2
$n=$con->query('select count(*) from pizzaria');
//$n->fetch();
$number2=$n->rowCount();


//maneira 3
$number4=$con->query('select count(*) from pizzaria')->rowcount();
$number3=$con->query('select count(*) from pizzaria')->fetchcolumn();

echo "alan".$number."<br>";
echo "alan".$number2."<br>";
echo "alan".$number3."<br>";


//$nRows = $pdo->query('select count(*) from blah')->fetchColumn();