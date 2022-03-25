<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Lista de Exercicios 01</title>
</head>

<body class="container mt-3">
    <h1>Exercicio 01</h1>

    <div class="container mt-3">
        <form action="resultado.php" method="post">
            <div class="row">
                <div class="col-2">
                    <label for="valorpago" class="label-control">Valor Pago:</label>
                    <input type="number" name="valorpago" id="valorpago" class="form-control" />
                </div>
                <div class="col-2">
                    <label for="precoproduto" class="label-control">Preço Produto:</label>
                    <input type="numer" name="precoproduto" id="precoproduto" class="form-control" />
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <button type="submit" class="btn btn-primary">
                        Calcular
                    </button>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>