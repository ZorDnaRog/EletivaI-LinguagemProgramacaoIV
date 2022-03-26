<!doctype html>
<html lang="en">
  <head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Lista de Exericios 03</title>
  </head>
  <body class="container mt-3 ">
    <h1>Exercicio 01</h1>

    <form action="resultado.php" method="POST">
        <div class="row">
            <div class="col">
                <label for="dia" class="label-control">Dia:</label>
                <input type="number" class="form-control" id ="dia" name="dia"/>
            </div>
            <div class="col">
                <label for="mes" class="label-control">Mês:</label>
                <input type="number" class="form-control" id ="mes" name="mes"/>
            </div>
            <div class="col">
                <label for="ano" class="label-control">Ano:</label>
                <input type="number" class="form-control" id ="ano" name="ano"/>
            </div>
            <div class="row">
              <div class="col mt-3">
                <button type="submit" class="btn btn-warning">
                  Verificar Data
              </div>
            </div>
        </div>
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
  </body>
</html>