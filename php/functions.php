<?php
require "conexao.php";

$conn=mysqli_connect("localhost","root","","pizzaholly");
function obter(){
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

echo "using pdo";
echo $number."<br>";
echo $number2."<br>";
echo $number3."<br><br>";


$registro2=mysqli_query($conn,'select count(*) from pizzaria');
$number5=mysqli_num_rows($registro2);

echo "now using mysqli<br>";
echo $number5."<br>";





//$nRows = $pdo->query('select count(*) from blah')->fetchColumn();