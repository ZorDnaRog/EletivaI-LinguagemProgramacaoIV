<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Inserir Produto</title>
</head>

<body>
    <?php require_once "barra_navegacao.php"; ?>

    <div class="border container mt-3">
        <h1>Inserir Produto</h1>
        <form action="/produto/inserir" method="post">
            <div class="row">
                <div class="col-5">
                    <label for="nome" class="label-control" name="nome" id="nome">Informe o Nome:</label>
                    <input type="text" class="form-control" name="nome" id="nome" />
                </div>
                <div class="col-5">
                    <label for="descricao" class="label-control" name="descricao" id="descricao">Informe a Descrição:</label>
                    <input type="text" class="form-control" name="descricao" id="descricao" />
                </div>
                <div class="col-2">
                    <label for="valor" class="label-control" name="valor" id="valor">Informe o Valor:</label>
                    <input type="text" class="form-control" name="valor" id="valor" />
                </div>
            </div>
            <div class="row">
                <div class="col mt-5">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>