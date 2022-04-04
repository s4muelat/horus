<?php
// *** Não deletar! Inicia sessão para outros arquivos.
if (empty($_SESSION))
	session_start();

//Define domínio ou IP do sistema
$dominio_ip_sistema = 'http://127.0.0.1';

//Diretórios
$dir_base = 'horus';
//Diretorio sistema
$dir_sistema = 'horus/sistema';
//Login
$dir_login = 'horus/login';
//Imagens
$dir_imagens = 'horus/imagens';

// ------------- Tempo duração da sessão ----------------
//ATENÇÃO: Tempo em segundos
$tempo_sessao = '600';

// ---> DESATIVADO POR HORA <---
//Derruba sessão do usuário
//ATENÇÃO: Tempo em milisegundos (1 milisegundo = 1000)
//Executa somente após fazer login
/*
if(!empty($_SESSION['hash'])) {
	echo "<!-- Derruba sessao -->
		  <script>
			setTimeout(function() {
				location.href='../login/sair.php'
			}, $tempo_sessao)
		  </script>";
}
*/
//------------------------

// Bootstrap CSS
echo "<link rel='stylesheet' href='$dominio_ip_sistema/$dir_base/bootstrap46/css/bootstrap.min.css' />";
echo "<link rel='stylesheet' href='$dominio_ip_sistema/$dir_base/bootstrap46/css/bootstrap.min.css.map' />";
// Jquery
echo "<script type='text/javascript' src='$dominio_ip_sistema/$dir_base/bootstrap46/js/jquery-3.6.0.min.js'></script>";
// Bootstrap JS
echo "<script type='text/javascript' src='$dominio_ip_sistema/$dir_base/bootstrap46/js/bootstrap.bundle.min.js'></script>";
// Icon
echo "<link rel='shortcut icon' href='$dominio_ip_sistema/$dir_base/imagens/sol-icon.ico' />";
// Arquivo CSS global
echo "<link rel='stylesheet' href='$dominio_ip_sistema/$dir_base/estilo/global.css' />";

// Font Roboto Google
echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">';