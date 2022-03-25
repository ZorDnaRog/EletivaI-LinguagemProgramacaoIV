<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Lista de Exericios 02</title>
</head>

<body class="container mt-5">
    <h1>Exercicio 03</h1>
    <form action="" method="post">
        <div class="row mt-3">
            <?php
            for ($i = 1; $i <= 5; $i++) {
            ?>
                <div class="col">
                    <label for="valor" class="label-control">Valor<?= $i ?></label>
                    <input type="number" name="valor<?= $i ?>" id="valor<?= $i ?>" class="form-control" required>
                </div>
            <?php
            }
            ?>
        </div>
        <div class="row mt-4">
            <div class="col">
                <button type="submit" class="btn btn-primary" name="buscar">Inserir e Remover Duplicados</button>
            </div>
        </div>
    </form>

    <?php

    if (isset($_POST['buscar'])) {
        for ($i = 1; $i <= 5; $i++) {
            $vetor[$i] = $_POST["valor$i"];
        }

        for ($i = 1; $i <= count($vetor); $i++) {
            for ($j = 1; $j <= count($vetor); $j++) {
                if ($vetor[$i] == $vetor[$j] && $vetor[$i] != "-" && $i != $j) {
                    $vetor[$j] = "-";
                }
            }
        }


        foreach ($vetor as $chave => $valor) {
            echo "Posição " . $chave . " - Valor " . $valor;
            echo "<br>";
        }
    }

    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>