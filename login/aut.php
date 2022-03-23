<?php

if(!empty($_POST['submit'])){
    //Dados de acesso ao banco
    include_once('../bd/pdo.php');

    if(empty($_POST['email']) || empty($_POST['senha'])){
    echo "Informe seu e-mail e senha.";
    exit();
    }

    $email = addslashes($_POST['email']);
    $senha = addslashes(md5($_POST['senha']));

    $sql = "SELECT email,senha FROM $dbbanco.login_usuarios WHERE email='$email' AND senha='$senha'";
    $sql = $pdo->query($sql);

    if($sql->rowCount() > 0) {
        //Variáveis de sessão
        $_SESSION['email'] = "$email";
        $_SESSION['senha'] = "$senha";       
        header("Location: ../sistema");
    } else {
        echo "alert('Dados estão incorretos!');";
    }
}