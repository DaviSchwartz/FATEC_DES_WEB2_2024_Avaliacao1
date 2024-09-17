<?php
require('cabeca.php');



$lab = $_POST['lab'];
$prazo = $_POST['prazo'];
$slct = $_POST['slct'];
$curso = $_POST['curso'];

if ($curso === 'DSM')  {
    $fp = fopen('DSM.txt', 'a');
}
elseif ($curso === 'GE') {
    $fp = fopen('GE.txt', 'a');
}



fwrite($fp, $lab);
fwrite($fp, "|");
fwrite($fp, $prazo);
fwrite($fp, "|");
fwrite($fp, $slct);
fwrite($fp, "\n" );
fclose($fp);

?>
<!DOCTYPE html>
<html lang="pt_BR">
    
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 18px sans-serif;
            background-color: #313645;
            color:#ffffff }
    </style>
</head>
<center>
<body>
    <label> SUA DEMANDA FOI ENVIADA COM SUCESSO </label>
<br>
    <a href="menu.php" class="btn btn-primary">Voltar</a>
</body>
        </center>
</html>