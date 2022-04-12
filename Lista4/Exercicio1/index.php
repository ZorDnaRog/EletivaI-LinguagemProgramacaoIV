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

  <form action="resultado.php" method="POST">
    <div class="col-5 container border mt-5">
      <h3>Calculo do Tempo</h3>
      <div class="row container mt-3">
        <div class="col-5">
          <label for="tempo1" class="label-control">Tempo da Volta 1</label>
          <input type="number" name="tempo1" id="tempo1" class="form-control">
        </div>
        <div class="col-5">
          <label for="tempo2" class="label-control">Tempo da Volta 2</label>
          <input type="number" name="tempo2" id="tempo2" class="form-control">
        </div>
        <div class="row mt-3">
          <div class="col mb-3">
            <button type="submit" class="col btn btn-danger">Inserir Tempo</button>            
          </div>
        </div>
      </div>
  </form>

  <?php

      session_start();


  ?>
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>