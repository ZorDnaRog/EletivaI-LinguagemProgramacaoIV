<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Lista de Exercicios 01</title>
</head>

<body class="container mt-3">
  <h1>Resposta do Exercicio 03</h1>

  <?php
  $valor = $_POST['valorverificar'];
  $valorparametro = doubleval($valor);
  if ($valorparametro > 10) {
    echo "O valor digitado é maior do que 10";
  } else if ($valorparametro < 10) {
    echo "O valor digitado é menor do que 10";
  } else {
    echo "O valor digitado é o próprio 10";
  }
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>