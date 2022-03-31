<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Lista de Exercicios 03</title>
</head>

<body class="container mt-3">
  <h1>Exercicio 02</h1>

  <form action="" method="POST">
    <div class="row">
      <?php
      for ($i = 1; $i <= 10; $i++) {
      ?>
        <div class="col">
          <label for="nomealuno" class="label-control">Aluno <?= $i ?></label>
          <input type="string" name="nomealuno<?= $i ?>" id="nomealuno<?= $i ?>" class="form-control" required>
        </div>
      <?php
      }
      ?>
      <div class="row mt-3">
        <div class="col">
          <button type="submit" name="ordenar" class="btn btn-primary">Ordenar</button>
        </div>
      </div>
    </div>
  </form>

  <?php
  if (isset($_POST['ordenar'])) {
    for ($i = 1; $i <= 10; $i++) {
      $vetor[$i] = $_POST["nomealuno$i"];
    }

    asort($vetor);

    echo "<br>A sequencia dos nomes em ordem crescente é:<br>";
    foreach ($vetor as $chave => $valor) {
      echo "$valor<br>";
    }
  }

  ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>