<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Lista de Exercicios 03</title>
</head>

<body class="container mt-3">
  <h1>Exercicio 03</h1>

  <form action="" method="POST">
    <div class="row">
      <?php
      for ($i = 1; $i <= 2; $i++) {
      ?>
        <div class="col-3">
          <label for="valor" class="label-control">Valor <?= $i ?></label>
          <input type="number" name="valor<?= $i ?>" id="valor<?= $i ?>" class="form-control mt-2" required>
        </div>
      <?php
      }
      ?>
      <div class="row mt-3">
        <div class="col">
          <button type="submit" name="verificar" class="btn btn-primary">Verificar</button>
        </div>
      </div>
    </div>
  </form>

  <?php
  if (isset($_POST['verificar'])) {

    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];

    function VerificaValorMenorIntervalo($num1, $num2)
    {

      if ($num1 > $num2) {
        $maior = $num1;
        $menor = $num2;
      } else {
        $maior = $num2;
        $menor = $num1;
      }
      if ($maior - $menor > 1) {
        $menor += 1;
      } else {
        $menor = "Não a valores inteiros neste intervalo!";
      }
      return $menor;
    }

    if (is_numeric(VerificaValorMenorIntervalo($valor1, $valor2))) {
      echo "<br>O menor valor do intervalo é: " . VerificaValorMenorIntervalo($valor1, $valor2);
    } else {
      echo "<br>Não há valores neste intervalo!";
    }
  }
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>