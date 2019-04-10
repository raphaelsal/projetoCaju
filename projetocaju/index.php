<!DOCTYPE HTML>

<html lang="pt-br">
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="index.css">
<meta charset="utf-8">
</head>

<title> Login de Usuário </title>

<form method="POST" action="login.php">

<body>
<div class="simple-login-container">
    <h2>Login</h2>
    <div class="row">
        <div class="col-md-12 form-group">
            <input type="text" class="form-control" placeholder="Usuario" name="login" id="login" required="required">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 form-group">
            <input type="password" placeholder="Senha" class="form-control" name="senha" id="senha" required="required">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 form-group">
            <input type="submit" class="btn btn-block btn-login" placeholder="senha" value="entrar" id="entrar" name="entrar" >
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="cadastro.html">Cadastre-se</a>
        </div>
    </div>
</div>
</body>
</form>
</html>