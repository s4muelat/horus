<?php
//Domínio ou IP do sitema
$dominio = 'http://127.0.0.1';
//Tempo sessão em segundos
$tempo_sessao = '600';

//Verifica se existe sessão ativa, caso contrário, inicia uma nova.
if (empty($_SESSION)) 
	session_start();

//Verifica tempo da sessão
if (isset($_SESSION['start']) && (time() - $_SESSION['start'] > $tempo_sessao)) {
    echo "<script>
            alert('Hórus: Você foi desconectado por inatividade.')
            window.location.href='$dominio/horus/login'
          </script>";
    session_unset(); 
    session_destroy();
    exit();
}
$_SESSION['start'] = time();

//Verifica se o usuário está logado
if(empty($_SESSION['email']) || empty($_SESSION['senha'])) {
    header("Location: $dominio/horus/login");
} 
