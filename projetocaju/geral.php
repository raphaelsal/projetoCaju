<?php

include('connect.php');

if(empty($_POST['senha1']) || empty($_POST['senha2']) || empty($_POST['login']) ){
	header('Location: geral.html');
		exit();
} else 


$login = mysqli_real_escape_string($link, $_POST['login']);
$senha1 = mysqli_real_escape_string($link, $_POST['senha1']);
$senha2 = mysqli_real_escape_string($link, $_POST['senha2']);


$query = "Select * from cadcliente where login='$login' and senha='$senha1' ";
$result = mysqli_query($link, $query);
$row = mysqli_num_rows($result);



if($row==1){
		mysqli_query($link, "UPDATE `cadcliente` SET SENHA = '$senha2' WHERE LOGIN = '$login'");
		header('Location: principal.html');
			exit;
} else{
	echo "usuario nao cadastrado";
	header('Location: geral.html');
		exit;
}


?>