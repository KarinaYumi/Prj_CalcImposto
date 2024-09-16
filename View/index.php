
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMPOSTO DE RENDA</title>
    <link rel="stylesheet" href="../Assets/css/style.css">
</head>
<body>


    <img src="../Assets/img/imgIndex.png" class="img">
    <div class="container">
        <div class="titulo">
            <h1 class="titulo">IMPOSTO DE RENDA</h1>
            <h2 class="ori">Informe os dados abaixo:</h2>
        </div> 
            <div>
                <form name="login" method="post" action="../Controller/UsuarioController.php" >
    
                    <input type="text" name="nome" id="nome" class="inputform" placeholder="Digite seu nome completo" size="23" required /><br><br>
                    <input type="text" name="cpf" id="cpf" placeholder="Digite seu CPF" size="24" required/><br><br>
                    <input type="number" name="rendimento" id="rendimento"placeholder="Rendimento anual"size="15" required/>
                    <input type="submit" value="Calcular" name="btn" id="btn" class="btn">
                
            </div>
                </form>
    </div>
</body>
</html>