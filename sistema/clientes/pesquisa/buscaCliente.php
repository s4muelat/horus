<?php
require_once '../../../geral/global.php';
require_once "../../../login/valida_sessao.php";
require_once "../../../bd/pdo.php";
require_once "../../../geral/funcoes.php";

$dado = $_GET["dado"];
$tipoDado = $_GET["tipoDado"];

function alerta() {
  exit("<center>Infome um dado válido</center>"); 
}

if (empty($dado)) {
  alerta(); 
  exit;
}

$sql = "SELECT CODIGO, NOME, SOBRENOME, CPF_CNPJ, CELULAR, EMAIL FROM clientes WHERE";

switch ($tipoDado) {
  case 'NOME':
    $sql = $sql .= " NOME";
    break;

  case 'CPFCNPJ':
    $sql = $sql .= " CPF_CNPJ";
    break;

  case 'CELULAR':
    $dado = str_replace(' ', '', $dado);
    if (is_numeric($dado))
      $sql = $sql .= " CELULAR";
      break;

  case 'EMAIL':
    if (preg_match("/@/", $dado)) {
      $sql = $sql .= " EMAIL";
    } else {
      alerta();
    }
    
}

$sql = $sql .= " LIKE '%$dado%'";

$sql = $pdo->query($sql);
if ($sql->rowCount() <> 0) {
  $data = $sql->fetchAll(PDO::FETCH_ASSOC);

  echo '<table class="table table-striped table-hover">
    <thead>
    <tr>
    <th scope="col">Nome</th>
    <th scope="col">CPF/CNPJ</th>
    <th scope="col">Celular</th>
    <th scope="col">Email</th>
    <th scope="col">Mais dados</th>
    </tr>
    </thead>
            <tbody>';

  foreach ($data as $item) {
    $CODIGO    = $item['CODIGO'];
    $NOME      = $item['NOME'];
    $SOBRENOME = $item['SOBRENOME'];
    $CPF_CNPJ  = mark($item['CPF_CNPJ'], '###.###.###-##');
    $CELULAR   = $item['CELULAR'];
    $EMAIL     = $item['EMAIL'];
    echo "<tr>
              <th scope='row'>$NOME $SOBRENOME</th>
              <td>$CPF_CNPJ</td>
              <td>$CELULAR</td>
              <td>$EMAIL</td>
              <td><a href=\"#\" onClick='$(\"#corpo\").load(\"clientes/cadastro/index.php?clienteCodigo=$CODIGO\")'><i class='bi bi-person-plus-fill'></i>  </a></td>
              </tr>
            ";
  }
} else {
  echo "<center>Cliente não encontrado</center>";
}


?>


</tbody>
</table>