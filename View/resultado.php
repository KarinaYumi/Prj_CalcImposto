<?php

    session_start();
    require_once("../Model/Usuario.php");
    $Usuario = new usuario;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/css/style.css">
    <title>Imposto de renda</title>
</head>
<body>
    <h1 class="tituloResultado">RESULTADO</h1>
    <img src="../Assets/img/imgResultado.png" class="imgResultado">
    <div class="container">
            <form name="login" method="post" action="index.html">
                <input value="<?php echo ("Nome: ").$_SESSION['nome']?>" class="inputResultado" name="nome" id="nome" type="text" readonly>
                <input value="<?php echo ("CPF: ").$_SESSION['cpf']?>" class="inputResultado" name="cpf" id="cpf" type="text"  readonly>
                <input value="<?php echo ("Rendimento Informado: ").$_SESSION['rendimento']?>"class="inputResultado" name="rendimento" id="rendimento" type="text" readonly>
                <input value="<?php echo ("Alíquota: ").$_SESSION['aliquota'].("%")?>"class="inputResultado" name="aliquota" id="aliquota" type="text" readonly>
                <input value="<?php echo ("Valor do Imposto: R$").$_SESSION['valorImposto']?>"class="inputResultado" name="valorImposto" id="valorImposto" type="text" readonly>
            </form>
        </div>  
</body>
</html>



