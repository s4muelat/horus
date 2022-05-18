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
  <br>
  
 
  <div id='pesq_input' class="input-group flex-nowrap">
  <div>
      <select id="tipoDado" class="custom-select">
      <option value='NOME' selected>Nome</option>
      <option value="CPFCNPJ">CPF/CNPJ</option>
      <option value="CELULAR">Celular</option>
      <option value="EMAIL">E-mail</option>
      </select>
 </div>
    <input id='buscaCliente' autocomplete="off" name='buscaCliente' type="text" class="form-control" style="width: 25%" placeholder="Algum dado do cliente" onKeyDown="buscaCliente();">
        <span class="input-group-text" id="addon-wrapping"><i class="bi bi-search"></i></span>

  </div> 
</div>

<div id='container2' class='container'>
  <table class="table table-striped table-hover">
    <thead>
    <tr>
    <th scope="col">Nome</th>
    <th scope="col">CPF/CNPJ</th>
    <th scope="col">Celular</th>
    <th scope="col">Email</th>
    </tr>
    </thead>
            <tbody>

</div>

</body>
</html>