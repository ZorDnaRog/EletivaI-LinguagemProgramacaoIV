<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Lista de Exercicios 01</title>
</head>

<body class="container">
  <h1>Exercicio 05</h1>

  <h4>Insira as notas de um aluno para cálculo de média e aprovação</h4>

  <form action="resultado.php" method="post">
    <div class="row mt-4">
      <div class="col">
        <label for="nota1" class="label-control">Primeira Nota:</label>
        <input type="number" name="nota1" id="nota1" class="form-control" required min>
      </div>
      <div class="col">
        <label for="nota2" class="label-control">Segunda Nota:</label>
        <input type="number" name="nota2" id="nota2" class="form-control" required min>
      </div>
      <div class="col">
        <label for="nota3" class="label-control">Terceira Nota:</label>
        <input type="number" name="nota3" id="nota3" class="form-control" required min>
      </div>
      <div class="col">
        <label for="nota4" class="label-control">Quarta Nota:</label>
        <input type="number" name="nota4" id="nota4" class="form-control" required min>
      </div>
      <div class="row mt-3">
        <div class="col">
          <button type="submit" class="btn btn-primary">
            Calcular Média
          </button>
        </div>
      </div>
    </div>

  </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

</body>

</html>