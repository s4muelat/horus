<?php
require_once "../geral/global.php";
require_once "../login/valida_sessao.php";
require_once "../bd/pdo.php";
?>

<html>
<!DOCTYPE html>
<html lang="pt-br">
<header>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Sistema gerenciador completo para hotéis e pousadas">
  <link rel='stylesheet' href='style.css' />
  <!--<script src="javascript.js"></script>-->

 
  <title>Hórus - Início</title>
</header>

<body>
 
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <span style='font-size: 1rem;' class="navbar-brand" href=""><div><?php echo 'Olá, ' . $_SESSION['nome_usuario'] . '.'; ?></div></span> 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Início</a>
      </li>
      
      <!-- clientes -->
      <li class="nav-item">
        <a class="nav-link" href='#' onClick='$("#corpo").load("cliente/pesquisa.php")'>Clientes</a>
      </li>
     
      <!-- Estoque -->
      <li class="nav-item">
        <a class="nav-link" href="#">Estoque</a>
      </li>

      <!-- Relatório -->
      <li class="nav-item">
        <a class="nav-link" href="#">Relatórios</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="../login/sair.php">Sair</a>
      </li>
      </ul>
  </div>
</nav>



<div class='corpo' id="corpo"></div>






</body>

</html> 