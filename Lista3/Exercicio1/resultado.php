<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Lista de Exericios 03</title>
</head>

<body class="container mt-3">
  <h1>Resposta do Exercicio 01</h1>

  <?php

  function VerificarData($dia, $mes, $ano)
  {
    $diasemana = array('Domingo', 'Segunda-Feira', 'Terça-Feira', 'Quarta-Feira', 'Quinta-Feira', 'Sexta-Feira', 'Sabado');   

    if (checkdate($mes, $dia, $ano)) { // Função checkdate trabalha com data no formato americano MES-DIA-ANO
      echo "<br><br>A Data informada: " . $dia . "/" . $mes . "/" . $ano . " é Valida";        
    } else {
      echo "<br><br>A Data informada:  " . $dia . "/" . $mes . "/" . $ano . " é Inválida";
    }
  }

  $DiaInformadoPeloUsuario = $_POST['dia'];
  $MesInformadoPeloUsuario = $_POST['mes'];
  $AnoInformadoPeloUsuario = $_POST['ano']; 

 
  

  VerificarData($DiaInformadoPeloUsuario, $MesInformadoPeloUsuario, $AnoInformadoPeloUsuario);

  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>