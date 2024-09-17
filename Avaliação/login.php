<?php

require_once('sessao.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $dados = new sessao;
    if($dados->logar($_POST['login'], $_POST['senha'])) {
            header("location: menu.php");
    }
}
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Acessar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 18px sans-serif;
            background-color: #313645;
            color:#ffffff
        }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<center>
<body>
    <div class="wrapper">
        <h2>ENTRAR</h2>
        <p>Favor inserir login e senha.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>LOGIN</label>
                <input type="text" name="login" id="login" class="form-control">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>SENHA</label>
                <input type="password" name="senha" id="senha" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Acessar">
            </div>
        </form>
    </div>    
</body>
</center>
</html>