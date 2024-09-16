<?php

    session_start();

    require_once ('../Model/Usuario.php');
    require_once('../Dao/UsuarioDao.php');

    $usuario = new Usuario();
    $usuarioDao = new UsuarioDao();


    $usuario->setNome($_POST['nome']);
    $usuario->setCpf($_POST['cpf']);
    $usuario->setRendimento($_POST['rendimento']);
    $nome = $usuario->getNome();
    $cpf = $usuario->getCpf();
    $rendimento = $usuario->getRendimento();

    if($usuario->getNome() && $usuario->getCpf() && $usuario->getRendimento()){

        if(usuarioDao::validarCpf($cpf) === true){

        $aliquota = usuarioDao::calculoAliquota($rendimento);
        $imposto = usuarioDao::calculoImposto($rendimento);


        header("Location: ../View/resultado.php");
        
        $_SESSION['nome']  = $nome;
        $_SESSION['cpf'] = $cpf;
        $_SESSION['rendimento'] = $rendimento;
        $_SESSION['aliquota'] = $aliquota;
        $_SESSION['valorImposto'] = $imposto;

    }else{
        echo '<script>alert("CPF Inválido!")</script>';
        header('location: index.php');
    }

}

?>