<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Lista de Exericicios 04</title>
</head>


<body class="container mt-3">
  <h1>Exercicio 02</h1>

  <form action="" method="POST">
    <div class="col-6 container border mt-5">
      <h3>Controle de Cheques</h3>
      <div class="row container mt-3">
        <?php
        if (isset($_POST['verificar'])) {

          setcookie('qtde_cheques', $_POST['qtde_cheques'], time() + 120);
          
          for ($i = 0; $i < $_POST['qtde_cheques']; $i++) {
        ?>
            <div class="col-6">
              <label for="soma_cheque<?= $i ?>" class="label-control">Valor do Cheque <?= $i ?></label>
              <input type="float" name="soma_cheque<?= $i ?>" id="soma_cheque<?= $i ?>" class="form-control">
            </div>
        <?php
          }
        }
        ?>
        <div class="row mt-3">
          <?php
          for ($i = 0; $i < 1; $i++) {
          ?>
            <div class="col-3 mb-3">
              <button type="submit" class="col btn btn-danger" name="inserir">Inserir</button>
            </div>
          <?php
          }
          ?>
          <div class="col-3 mb-3">
            <button type="submit" class="col btn btn-warning" name="calcular">Calcular</button>
          </div>
        </div>
      </div>
  </form>

  <?php

  if (isset($_POST['verificar'])) {
    setcookie('soma_lote', $_POST['soma_lote'], time() + 120);
  }



  if (isset($_POST['inserir'])) {

    for ($i = 0; $i < $_COOKIE['qtde_cheques']; $i++) {
      $array[$i] = $_POST["soma_cheque$i"];
    }
    setcookie('soma', array_sum($array), time() + 120);
  }

  if (isset($_POST['calcular'])) {

    echo "<h4>Resultado da Verificação</h4><br>";

    if ($_COOKIE['soma_lote'] == $_COOKIE['soma']) {
      echo "Situação: LOTE OK";
    } else if ($_COOKIE['soma_lote'] > $_COOKIE['soma']) {
      echo "Situação: Diferença Negativa";
    } else {
      echo "Situação: Diferença Positiva";
    }
  }


  ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>