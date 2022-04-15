<?php
require_once '../../geral/global.php';
require_once '../../login/valida_sessao.php';
require_once '../../bd/pdo.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<header>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Sistema gerenciador completo para hotéis e pousadas">
  <link rel='stylesheet' href='style.css' />
  <link rel='stylesheet' href='cliente/pesquisa.css'>
  <script src="javascript.js"></script>
  <title>Hórus - Cliente</title>
  
</header>

<body>

<div id='container' class="container">
  <h2 id='pesq_titulo'>Buscar cliente</h2>
  
  <div id='pesq_input' class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping"><i class="bi bi-search"></i></span>
  <input type="text" class="form-control" placeholder="Nome, CPF ou telefone" aria-label="Username" aria-describedby="Informe algum dado">
</div>
</div>

</body>


</html>