<?php

// function mark($val, $mask){
//     $maskared = '';
//     $k = 0;
//     for($i = 0; $i<=strlen($mask)-1; $i++) {
//       if($mask[$i] == '#') {
//         if(isset($val[$k]))
//           $maskared .= $val[$k++];
//           } else {
//           if(isset($mask[$i]))  
//             $maskared .= $mask[$i];
//           }
//       }
//     return $maskared;
// }

// // $cnpj = "11222333000199";
// // $cpf = "00100200300";
// // $cep = "08665110";
// // $data = "10102010";

// // echo mask($cnpj,'##.###.###/####-##');
// // echo mask($cpf,'###.###.###-##');
// // echo mask($cep,'#####-###');
// // echo mask($data,'##/##/####');

// Mscara moeda em real e adiciona R$
function formataMoeda($formatamoeda)
{
   $formatamoeda = 'R$ ' . number_format($formatamoeda, 2, ',', '.');

   return $formatamoeda;
}


function gravaData($data) {
  if($data != '') {
    return (substr($data, 6, 4) . '-' . substr($data, 3, 2) . '-' . substr($data, 0, 2));
  }
}

function mostraData($data) {
  if($data != '') {
  return (substr($data, 8, 2) . '/' . substr($data, 5, 2) . '/' . substr($data, 0, 4));
  }
}

// Pega ms Por Extenso

function mesPorExtenso()
{

$mes = date('m');
      if($mes == '01')        {$mesext = 'Janeiro';}
      if($mes == '02')        {$mesext = 'Fevereiro';}
      if($mes == '03')        {$mesext = 'Maro';}
      if($mes == '04')        {$mesext = 'Abril';}
      if($mes == '05')        {$mesext = 'Maio';}
      if($mes == '06')        {$mesext = 'Junho';}
      if($mes == '07')        {$mesext = 'Julho';}
      if($mes == '08')        {$mesext = 'Agosto';}
      if($mes == '09')        {$mesext = 'Setembro';}
      if($mes == '10')        {$mesext = 'Outubro';}
      if($mes == '11')        {$mesext = 'Novembro';}
      if($mes == '12')        {$mesext = 'Dezembro';}

return $mesext;

}

// Mscara CPF / CNPJ / CEP
function formataCPFCNPJ($cpfcnpj)
{
      $tam = strlen($cpfcnpj);
      if($tam == 11)
      {
            $cpfcnpj = mask($cpfcnpj, '###.###.###-##');
        }
      elseif($tam == 14)
      {
          $cpfcnpj = mask($cpfcnpj, '##.###.###/####-##');
        }
      elseif($tam == 8)
      {
          $cpfcnpj = mask($cpfcnpj, '#####-###');
        }
return $cpfcnpj;
}
