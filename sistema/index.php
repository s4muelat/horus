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
  <title>Hórus - Início</title>
</header>

<body>
 
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a style='font-size: 1rem;' class="navbar-brand" href="#"><div><?php echo 'Olá, ' . $_SESSION['nome_usuario'] . '.'; ?></div></a> 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Início</a>
      </li>
      <!-- clientes -->
      <li class="nav-item">
        <a class="nav-link" href="#">Cliente</a>
      </li>
      <!-- Estoque -->
      <li class="nav-item">
        <a class="nav-link" href="#">Estoque</a>
      </li>
      <li class="nav-item dropdown">
        <a id='rel' class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          Relatório</a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../login/sair.php">Sair</a>
      </li>
      </ul>
  </div>
</nav>

</body>

</html> 