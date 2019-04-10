<?php

include('connect.php');

if(empty($_POST['login']) || empty($_POST['senha']) ){
	header('Location: excluir.html');
		exit();
}

$login = mysqli_real_escape_string($link, $_POST['login']);
$senha = mysqli_real_escape_string($link, $_POST['senha']);

$query = "Select * from cadcliente where login='$login' and senha='$senha' ";
$result = mysqli_query($link, $query);
$row = mysqli_num_rows($result);

if($row==1){
	mysqli_query($link, "DELETE FROM `cadcliente` WHERE login='$login'");
		header('Location: index.php');
			exit;
} else{
	echo "usuario nao cadastrado";
	header('Location: excluir.html');
		exit;
}



?>