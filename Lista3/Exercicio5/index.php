<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Lista de Exercicios 03</title>
</head>

<body class="container">
  <h1>Exericio 05</h1>

  <form action="" method="POST">
    <div class="row">
      <div class="col">
        <label for="peso" class="label-control">Informe o Peso</label>
        <input type="float" name="peso" id="peso" class="form-control" required>
      </div>
      <div class="col">
        <label for="altura" class="label-control">Informe a Altura</label>
        <input type="float" name="altura" id="altura" class="form-control">
      </div>
      <div class="row mt-3">
        <div class="col">
          <button type="submit" name="calcular" class="btn btn-primary">Calcular</button>
        </div>
      </div>
    </div>
  </form>

  <?php

  if (isset($_POST['calcular'])) {

    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    function CalculoIMC($valor1, $valor2)
    {
      return number_format($valor1 / pow($valor2, 2), 1);
    }

    function ClassificarIMC($classificar)
    {
      if ($classificar < 18.5) {
        $resultado =  "Abaixo do Peso";
      } elseif ($classificar >= 18.6 and $classificar <= 24.9) {
        $resultado =  "Peso ideal (parabéns)";
      } elseif ($classificar >= 25 and $classificar <= 29.9) {
        $resultado =  "Levemente acima do peso";
      } elseif ($classificar >= 30 and $classificar <= 34.9) {
        $resultado =  "Obesidade grau I";
      } elseif ($classificar >= 35 and $classificar <= 39.9) {
        $resultado =  "Obesidade grau II (severa)";
      } else {
        $resultado =  "Obesidade grau III (mórbida)";
      }
      return $resultado;
    }



    echo "<br>IMC: " . CalculoIMC($peso, $altura) . "<br>Classificado como: " . ClassificarIMC(CalculoIMC($peso, $altura));
  }

  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>