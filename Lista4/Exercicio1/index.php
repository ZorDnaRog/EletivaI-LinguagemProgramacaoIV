<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Lista de Exericicios 04</title>
</head>


<body class="container mt-3">
  <h1>Exercicio 01</h1>

  <form action="" method="POST">
    <div class="col-6 container border mt-5">
      <h3>Calculo do Tempo</h3>
      <div class="row container mt-3">
        <div class="col-6">
          <label for="tempo" class="label-control">Tempo da Volta</label>
          <input type="float" name="tempo" id="tempo" class="form-control">
        </div>
        <div class="row mt-3">
          <div class="col-3 mb-3">
            <button type="submit" class="col btn btn-danger" name="inserir">Inserir</button>
          </div>
          <div class="col-3 mb-3">
            <button type="submit" class="col btn btn-warning" name="exibir">Exibir</button>
          </div>
        </div>
      </div>
  </form>

  <?php

  if (isset($_POST['iniciar'])) {
    setcookie('contador', 1, time() + 120);
  }

  if (isset($_POST['inserir'])) {

    $contador = 1;
    $contador = $contador + $_COOKIE['contador'];
    setcookie('contador', $contador, time() + 120);
    $i = $_COOKIE['contador'];

    setcookie("array[$i]", $_POST['tempo'], time() + 120);
  }

  if (isset($_POST['exibir'])) {

    echo "<h4>Parciais da Corrida</h4><br>";

    foreach ($_COOKIE['array'] as $chave => $valor) {
      echo "Volta: $chave Tempo: $valor";
      echo "<br>";
    }

    echo "<br><br>";

    $posicao = 0;    
    foreach ($_COOKIE['array'] as $chave => $valor) {
      if ($valor == min($_COOKIE['array'])) {
        $menor = $valor;
        $posicao = $chave;
      }
    }    

    $media = array_sum($_COOKIE['array']) / count($_COOKIE['array']);

    echo "Tempo médio: " . number_format($media,2);
    echo "<br>Melhor Tempo: Volta $posicao Tempo: $menor";
  }


  ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>