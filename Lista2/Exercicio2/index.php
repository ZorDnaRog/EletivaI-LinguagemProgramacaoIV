<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Lista de Exercicios 02</title>
</head>

<body class="container mt-5">
  <h1>Exercicio 02</h1>

  <form action="" method="POST">
    <div class="row">
      <?php
      for ($i = 1; $i <= 20; $i++) {
      ?>
        <div class="col-3">
          <label for="valor<?= $i ?>" class="label-control mt-5">Valor <?= $i ?></label>
          <input type="number" name="valor<?= $i ?>" id="valor<?= $i ?>" class="form-control" required min="1" max="10">
        </div>
      <?php
      }
      ?>
    </div>
    <div class="row">
      <div class="col-3">
        <label for="num_buscado" class="label-control mt-5">Valor Procurado</label>
        <input type="number" name="num_buscado" id="num_buscado" class="form-control" required min="1" max="10">
      </div>
      <div class="row">
        <div class="col-3 mt-2">
          <button type="submit" class="btn btn-primary" name="procurar">Inserir e Procurar</button>
        </div>
      </div>
    </div>
  </form>

  <?php
  if (isset($_POST['procurar'])) {
    for ($i = 1; $i <= 20; $i++) {
      $vetor[$i] = $_POST["valor$i"];
    }
    $valor_procurado = $_POST['num_buscado'];
    
    foreach ($vetor as $chave => $valor) {
      $cont = 0;
      if ($valor == $valor_procurado) {
        echo "<br><br><br>";
        echo "O valor $valor_procurado foi encontrado na posição $chave";
        echo "<br>";
        $cont++;
      }      
    }

    if($cont == 0){
      echo "<br><br><br>";
      echo "O valor $valor_procurado não foi encontrado";
    }
  }
  ?>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>