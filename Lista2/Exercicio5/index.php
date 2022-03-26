<!doctype html>
<html lang="en">
  <head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Lista de Exericios 02</title>
  </head>
  <body class="container mt-5">
    <h1>Exericio 05</h1>

    <form action="" method="post">
        <div class="row">
            <?php
            for($i = 1; $i <=10;$i++){
            ?>
            <div class="col">
                <label for="valor" class="label-control">Valor<?= $i ?></label>
                <input type="number" class="form-control" name="valor<?= $i ?>" id="valor<?= $i ?>" required>
            </div>
            <?php
            }
            ?>
            <div class="row mt-3">
                <div class="col">
                    <button type="submit" name="ordenar" class="btn btn-primary">Calcular</button>
                </div>
            </div>            
        </div>
    </form>

    <?php

    if(isset($_POST['ordenar'])){
        for($i = 1; $i <=10;$i++){
            $vetor[$i] = $_POST["valor$i"];
        }

        for($i = 1; $i <=count($vetor); $i++){
            for($j = 1; $j <=count($vetor); $j++){
                if($vetor[$i]< $vetor[$j]){
                    $aux = $vetor[$i];
                    $vetor[$i] = $vetor[$j];
                    $vetor[$j] = $aux;

                }
            }
        }
        
        echo "<br>A sequencia de valores informados em Ordem Crescente é:<br>";
        foreach($vetor as $chave =>$valor){
            echo "$valor<br>";
        }

        for($i = 1; $i <=count($vetor); $i++){
            for($j = 1; $j <=count($vetor); $j++){
                if($vetor[$i] > $vetor[$j]){
                    $aux = $vetor[$i];
                    $vetor[$i] = $vetor[$j];
                    $vetor[$j] = $aux;

                }
            }
        }

        echo "<br>A sequencia de valores informados em Ordem Decrescente é:<br>";
        foreach($vetor as $chave =>$valor){
            echo "$valor<br>";
        }      

    }

    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
  </body>
</html>