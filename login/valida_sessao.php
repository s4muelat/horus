<?php
//Verifica tempo da sessão
if (isset($_SESSION['start']) && (time() - $_SESSION['start'] > $tempo_sessao)) {
    $valida_sessao_usuario = $_SESSION['nome_usuario'];
    
    session_unset();
    session_destroy();
    echo "<script>
        alert('$valida_sessao_usuario, para sua segurança você foi desconectado do sistema.');
        window.location.href='$dominio_ip_sistema/horus/login';
    </script>";  
    
    // header("Location: $dominio_ip_sistema/horus/login");
    exit();        
}
$_SESSION['start'] = time();

//Verifica se o usuário está logado
if(empty($_SESSION['email']) || empty($_SESSION['senha'])) {
    header("Location: $dominio_ip_sistema/horus/login");
} 
