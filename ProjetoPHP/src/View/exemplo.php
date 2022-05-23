<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body class="container border mt-5">
    <h1>Exemplo</h1>

    <form method="POST" action="/exemplo-resultado">
        <div class="row">
            <div class="col">
                <label class="label-control">Valor 01 </label>
                <input class="form-control" name="value1" type="text" />
            </div>
            <div class="col">
                <label class="label-control">Valor 02 </label>
                <input class="form-control" name="value2" type="text" />
            </div>
        </div>
        <div class="row mt-3 mb-2">
            <div class="col">
                <button type="submit" class="btn btn-primary">OK</button>
            </div>
        </div>
    </form>

    <?php

    if (isset($sum))
        echo "O valor da soma é $sum";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>