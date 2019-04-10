<?php
include('connect.php');

if(empty($_POST['login']) || empty($_POST['senha']) ){
	header('Location: cadastro.html');
		exit();
}

$login = mysqli_real_escape_string($link, $_POST['login']);
$senha = mysqli_real_escape_string($link, $_POST['senha']);

$query = "Select * from cadcliente where login='$login'";
$result = mysqli_query($link, $query);
$row = mysqli_num_rows($result);

if($row==1){
	echo "Usuario Existente";
			exit;
} else{
	mysqli_query($link, "INSERT INTO `cadcliente` (`ID`, `LOGIN`, `SENHA`, `EMAIL`) VALUES (NULL, '$login', '$senha', '')");
		header('Location: index.php');
			exit;
}





?>