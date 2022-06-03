<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Inserir Cliente</title>
</head>

<body>
    <?php require_once "barra_navegacao.php"; ?>
    <div class="container mt-5 border">
        <h1>Inserir Cliente</h1>

        <form action="/cliente/inserir" method="POST">
            <div class="row">
                <div class="col-5">
                    <label for="nome" class="label-control">Informe o nome:</label>
                    <input type="text" class="form-control" name="nome" id="nome" />
                </div>
                <div class="col-5">
                    <label for="email" class="label-control">Informe o email:</label>
                    <input type="text" class="form-control" name="email" id="email" />
                </div>
                <div class="col-2">
                    <label for="idade" class="label-control">Informe a idade:</label>
                    <input type="text" class="form-control" name="idade" id="idade" />
                </div>
                <div class="row mt-1 mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>