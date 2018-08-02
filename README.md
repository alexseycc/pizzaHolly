# pizzaHolly
rm -rf ~/.mysql_history


: '
require con.php

$insert=$con->preapare('insert into table values(:nome,:value)');
$insert->bindValue(':nome',nome);
$insert->bindValue(':value',value);
$insert->execute();
$insert=null;

mysli_num_rows
pdo->rowCount();
pdo-fetchcolumn();
'


<<ConnectingPROCEDURE
require con.php

$insert=mysqli_query($con,"insert into table values('nom','id')");
$insert=null;
<<ConnectingPROCEDURE