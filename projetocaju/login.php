<?php

include('connect.php');

if(empty($_POST['login']) || empty($_POST['senha']) ){
	header('Location: index.php');
		exit();
}

$login = mysqli_real_escape_string($link, $_POST['login']);
$senha = mysqli_real_escape_string($link, $_POST['senha']);

$query = "Select * from cadcliente where login='$login' and senha='$senha' ";
$result = mysqli_query($link, $query);
$row = mysqli_num_rows($result);

if($row==1){
		header('Location: principal.html');
			exit;
} else{
	echo "usuario nao cadastrado";
	header('Location: index.php');
		exit;
}

?>