<?php 

$dsm_demandas = 'DSM.txt';
$ge_demandas = 'GE.txt';

$leitor_dsm = file_get_contents($dsm_demandas);
$leitor_ge = file_get_contents($ge_demandas);

echo "<!DOCTYPE html>
<html lang='pt_BR'>
<head>
    <meta charset='UTF-8'>
    <title>Demandas de GE e DSM</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css'>
    <style type='text/css'>
        body{ font: 18px sans-serif;
            background-color: #313645;
            color:#ffffff
        }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<center>
<body>
<div class='wrapper'>
        <h2>Demandas de DSM</h2>
        <pre> $leitor_dsm </pre>
        
        <h2>Demandas de GE</h2>
        <pre> $leitor_ge </pre>
        <a href='menu.php' class='btn btn-primary'>Voltar</a>
</div>
</body>
</center>
</html>";

?>