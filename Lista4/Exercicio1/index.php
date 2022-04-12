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
    <div class="col-5 container border mt-5">
    <h3>Calculo do Tempo</h3>
    <div class="row container mt-3">
      <div class="col-5">        
      <label for="tempo" class="label-control">Tempo da Volta</label>
        <input type="time" name="tempo" id="tempo" class="form-control" required>      
      </div>      
      <div class="row mt-3">  
      <div class="col mb-3" style="text-align: left">
        <button type="submit" name="inserir" class="col btn btn-danger">Inserir Tempo</button>
        <button type="submit" name="exibir" class="col btn btn-success" type="button">Exibir Resultados</button>
      </div>     
    </div>
    </div>
    </form>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
  </body>
</html>