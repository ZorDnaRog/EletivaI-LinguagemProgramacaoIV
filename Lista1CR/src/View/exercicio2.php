<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Lista de Exercicios 01</title>
</head>

<body class="border container mt-3">
    <h1>Exercicio 02</h1>

    <form action="/exercicio2-resultado" method="post">
        <div class="row mt-5">
            <div class="col">
                <label for="valorporquilo" class="label-control">Preço do Quilo do Produto</label>
                <input type="number" name="valorporquilo" id="valorporquilo" class="form-control mt-2" required />
            </div>
            <div class="col">
                <label for="qtdeproduto" class="label-control">Quantidade consumida(Kg): </label>
                <input type="numer" name="qtdeproduto" id="qtdeproduto" class="form-control mt-2" required />
            </div>
        </div>
        <div class="row mt-3 mb-3">
            <div class="col">
                <button type="submit" class="btn btn-primary">
                    Calcular Preço
                </button>
            </div>
        </div>

    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>