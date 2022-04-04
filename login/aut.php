<?php
require_once '../geral/global.php';

//Verifica se o usuário está logado
if(!empty($_SESSION['email']) || !empty($_SESSION['senha'])) {
	header("Location: $dominio_ip_sistema/$dir_sistema");
}

if(!empty($_POST['submit'])){
    //Dados de acesso ao banco
    require_once '../bd/pdo.php';

    if(empty($_POST['email']) || empty($_POST['senha'])){
    echo "Informe seu e-mail e senha.";
    exit();
    }

    $email = addslashes($_POST['email']);
    $senha = addslashes(md5($_POST['senha']));

    $sql = "SELECT nome,email,senha FROM $db_banco.login_usuarios WHERE email='$email' AND senha='$senha'";
    $sql = $pdo->query($sql);

    if($sql->rowCount() > 0) {
        
        while ($row = $sql->fetch()) {
            $_SESSION['nome_usuario'] = $row['nome'];
        }
        
        //Variáveis de sessão
        $_SESSION['email'] = "$email";
        $_SESSION['senha'] = "$senha";
        $_SESSION['hash'] = md5(date('dmyHis') . microtime());
        //Inicia tempo de sessão (usado no arquivo login/aut.php)
        $_SESSION['start'] = time();
        //header("Location: $dominio_ip_sistema/$dir_sistema");
        $_SESSION['oklogin'] = "oklogin";

        
    } else {
        $_SESSION['errologin'] = "errologin";
    }
}