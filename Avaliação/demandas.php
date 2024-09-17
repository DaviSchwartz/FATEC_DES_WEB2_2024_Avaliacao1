<?php
require ('cabeca.php');

if ($_SESSION['usuario'] !== 'coordenacao') {
    header("Location: menu.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif;
            background-color: #313645;
            color:#ffffff
        }
        .wrapper{ width: 350px; padding: 20px; }

        .form-control,
        .custom-select {
            box-sizing: border-box; 
            width: 100%; 
            padding: 10px; 
            border-radius: 4px; 
            border: 1px solid #ccc; 
            background-color: #ffffff; 
            color: #000000; 
        }
        .form-group {
            margin-bottom: 15px; /* Espaçamento entre os campos */
        }
    </style>
</head>
<center>
<body>
    <div class="wrapper">
        <h2>DEMANDAS</h2>
        <p>Favor inserir as informações exigidas abaixo.</p>
        <form action="cadastros.php" method="POST">
            <div class="form-group">
                <label>LABORATÓRIO</label>
                <br>
                <select class="custom-select form-control" name="lab" id="lab">
    <option selected >Laboratório 1</option>
    <option>Laboratório 2</option>
    <option>Laboratório 3</option>
  </select>
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>PRAZO LIMITE</label>
                <input type="date" name="prazo" id="prazo" class="form-control" value = "dd/mm/aaaa">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
            <label>SOLICITAÇÃO</label>
            <input type="text" name="slct" id="slct" class="form-control" value = "Ex: Ajuste na sala">
    
            </div>

            <div class="form-group">
                <label>CURSO</label>
               <br>
            <select class="custom-select form-control" name ="curso" id="curso">
    <option selected value="DSM">Desenvolvimento de Software</option>
    <option value="GE">Gestão Empresarial</option>
  </select>

        </form>
        <br>
        <input type="submit" class="btn btn-success" value="Enviar">
        <br>
        <br>
        <a href="menu.php" class="btn btn-primary">Voltar</a>
    </div>    
</body>
</center>
</html>