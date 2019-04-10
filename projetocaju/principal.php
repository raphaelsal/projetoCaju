<?php

include ('connect.php');


/*if(empty($_POST['codigo']) AND empty($_POST['descricao'] AND $_POST['carro']) AND empty($_POST['motor'])){
	header('Location: principal.html');
		exit();
}*/

$codigo = mysqli_real_escape_string($link, $_POST['codigo']);
$descricao = mysqli_real_escape_string($link, $_POST['descricao']);
$carro = mysqli_real_escape_string($link, $_POST['carro']);
$motor = mysqli_real_escape_string($link, $_POST['motor']);



	$Qru = "";

	if(!empty($codigo))
	{
      $Qru .= " CODIGO = '{$codigo}' AND ";
	}
	if(!empty($descricao))
	{
      $Qru .= " DESCRICAO LIKE '%{$descricao}%' AND ";
	}
	if(!empty($carro))
	{
      $Qru .= " CARRO LIKE '{$carro}%' AND ";
	}
	if(!empty($motor))
	{
      $Qru .= " MOTOR LIKE '{$motor}%' AND ";
	}



	$con = "select * from cadpecas where {$Qru} 1=1 ";

$result = mysqli_query($link, $con);

    while($fetch = mysqli_fetch_row($result)){
        echo "<p>". $fetch[0] . " - " . $fetch[1] . " - " . $fetch[2] . " - " . $fetch[3] ." - " . $fetch[4] . " - " . $fetch[5] . "</p>";
    } 

 ?>


