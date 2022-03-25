<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Lista de Exercicios 01</title>
</head>

<body class="container mt-3">
  <h1>Resposta do Exercicio 02</h1>

  <?php

  function FormatarMoedaReais($numero)
  {
   return "R$ ".number_format($numero, 2,',','.');
  }

  $valor = $_POST['valorporquilo'];
  $qtde = $_POST['qtdeproduto'];
  if ($valor >= 0 && $qtde >= 0) {
    echo "Valor a pagar: " .FormatarMoedaReais(doubleval($valor * $qtde));    
  }
  ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>