<?php
//Dados de acesso ao banco
include_once('../bd/pdo.php');

if(empty($_GET['email']) || empty($_GET['senha'])){
    echo "Informe seu e-mail e senha.";
    exit();
}

$email = addslashes($_GET['email']);
$senha = addslashes(md5($_GET['senha']));

$sql = "SELECT email,senha FROM $dbbanco.login_usuarios WHERE email='$email' AND senha='$senha'";
$sql = $pdo->query($sql);

if($sql->rowCount() > 0) {
        echo "Êeeeee.. ao infinito e além.";
    } else {
        echo "Xiiii, dados incorretos.";
}
