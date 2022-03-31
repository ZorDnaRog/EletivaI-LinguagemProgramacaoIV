<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Lista de Exercicios 02</title>
</head>

<body class="container mt-5">
    <h1>Exercicio 04</h1>

    <form action="" method="post">
        <div class="row">
            <?php
            for ($i = 1; $i <= 10; $i++) {
            ?>
                <div class="col">
                    <label for="valor" class="label-control">Valor<?= $i ?></label>
                    <input type="number" name="valor<?= $i ?>" id="valor<?= $i ?>" class="form-control" required>
                </div>
            <?php
            }
            ?>
        </div>
        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-primary" name="calcular">Calcular</button>
            </div>
        </div>
    </form>

    <?php

    if (isset($_POST['calcular'])) {
        for ($i = 1; $i <= 10; $i++) {
            $vetor[$i] = $_POST["valor$i"];
        }

        $soma = 0;
        for ($i = 1; $i <= count($vetor); $i++) {
            $soma = $soma + $vetor[$i];
        }

        echo "<br><br>A média dos valores informados é: " . $soma / count($vetor);
    }

    ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>