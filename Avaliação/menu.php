<?php

require('cabeca.php');

$usuario = $_SESSION['usuario'];

?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Menu</title>
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
        <h2>SEJA BEM-VINDO</h2>
        <p>Usuário: <strong><?php echo htmlspecialchars($usuario); ?></strong></p>
        <p>O que deseja fazer hoje ?</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            
        
        <div class="form-group">
            <a href="lerGE.php" class="btn btn-primary">Vizualizar Solicitações GE</a>
            </div>

            <div class="form-group">
            <a href="lerDSM.php" class="btn btn-primary">Vizualizar Solicitações DSM</a> 
                <span class="help-block"></span>
            </div>


            <div class="form-group">
            <a href="lerTUDO.php" class="btn btn-primary">Vizualizar todas as Solicitações</a> 
                <span class="help-block"></span>
            </div>    

            <div class="form-group">
          <?php   if ($usuario === "coordenacao") :  ?>
          <a href="demandas.php" class="btn btn-primary">Solicitar uma Demanda</a>
          <?php endif ?>
          </div>   

          <div class="form-group">
            <a href="sair.php" class="btn btn-danger">Sair da Conta</a>
            </div>
          

        </form>
    </div>    
</body>
</center>
</html>