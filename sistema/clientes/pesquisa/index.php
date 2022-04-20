<?php
require_once '../../../geral/global.php';
require_once '../../../login/valida_sessao.php';
require_once '../../../bd/pdo.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<header>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Hórus">
  <!-- Atenção: arquivos css e js são chamados a partir do diretório sistema -->
  <link rel='stylesheet' href='clientes/pesquisa/pesquisa.css'>
  <script src='clientes/pesquisa/ajax.js'></script>
  <!--------------------------------------------------------------------------->
  <title>Hórus - Cliente</title>
</header>
<body>
<div id='container' class="container">
  <h2 id='pesq_titulo'>Buscar cliente</h2>  
  <div id='pesq_input' class="input-group flex-nowrap">
    <span class="input-group-text" id="addon-wrapping"><i class="bi bi-search"></i></span>
    <input id='buscaCliente' name='buscaCliente' type="text" class="form-control" placeholder="Nome, CPF ou telefone" OnKeyUp="buscaCliente();">
  </div>
</div>

<div id='container2' class='container'>
</div>

</body>
</html>