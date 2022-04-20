<?php
require_once '../../../geral/global.php';
require_once "../../../login/valida_sessao.php";
require_once "../../../bd/pdo.php";

$dado = addslashes($_GET['dado']);

function alerta() {
  echo "<center>Nenhum dado encontrado</center>";

}

?>
<!DOCTYPE html>
<html lang="pt-br">
<header>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Hórus">  
</header>
<body>
<?php

$sql = $pdo->query("SELECT nome, sobrenome, celular1, email  FROM clientes WHERE nome LIKE '$dado%' ORDER BY nome LIMIT 0,5");
  if($sql->rowCount() <> 0){
    $data = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    echo '<table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th scope="col">Nome</th>
                  <th scope="col">Celular</th>
                  <th scope="col">Email</th>
                </tr>
              </thead>
            <tbody>';

    foreach($data as $item){
      $nome = $item['nome'];
      $sobrenome = $item['sobrenome'];
      $celular1 = $item['celular1'];
      $email = $item['email'];     
      echo "<tr>
              <th scope='row'>$nome $sobrenome</th>
              <td>$celular1</td>
              <td>$email</td>
              </tr>
            ";   
            
            
  }
}  else {
      alerta();
      
}
    
    
    ?>
    

  </tbody>
</table>
</body>
</html>