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
  <link rel='stylesheet' href='style.css'>
  <link rel='stylesheet' href='cliente.css'>
  <script src="javascript.js"></script>
  <title>Hórus - Cliente</title>
  <style>
    body {
      background-color: green;
    }
  </style>
</header>

<body>

<div id='container' class="container">
        <div class="item item1">
          <div>Clientes</div>
          <a href='#' onClick='$("#container").load("cliente/pesquisa.php")'>Cliente / Pesquisa</a>
          
        </div>
</div>



</body>


</html>