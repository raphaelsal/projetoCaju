<?php

include('connect.php');

if(empty($_POST['codigo']) || empty($_POST['descricao']) || empty($_POST['carro']) || empty($_POST['motor']) || empty($_POST['montadora']) || empty($_POST['ano']) ){
	header('Location: cadastropeca.html');
		exit();
}

$codigo = mysqli_real_escape_string($link, $_POST['codigo']);
$descricao = mysqli_real_escape_string($link, $_POST['descricao']);
$carro = mysqli_real_escape_string($link, $_POST['carro']);
$motor = mysqli_real_escape_string($link, $_POST['motor']);
$montadora = mysqli_real_escape_string($link, $_POST['montadora']);
$ano = mysqli_real_escape_string($link, $_POST['ano']);

$query = "Select * from cadpecas where codigo='$codigo'";
$result = mysqli_query($link, $query);
$row = mysqli_num_rows($result);

if($row==1){
	echo "Codigo Existente";
			exit;
} else{
	mysqli_query($link, "INSERT INTO `cadpecas` (`CODIGO`, `DESCRICAO`, `CARRO`, `MONTADORA`, `MOTOR`, `ANO`) VALUES ('$codigo','$descricao','$carro','$montadora', '$motor', '$ano')");
		header('Location: principal.html');
			exit;
}

 






?>