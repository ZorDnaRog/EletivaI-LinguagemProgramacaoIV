<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body class="container border mt-5 ">
    <h1>Distância entre dois pontos</h1>

    <?php

    require_once("Ponto.php");

    $p1 = new Ponto(2, 4);

    echo "Quantidade de objetos criados:" . Ponto::getContador();
    echo "<br/><br/><br/>";
    $p2 = new Ponto(4, 6);

    echo "Distancia entre os pontos(Método 01): " . number_format($p1->CalcularDistancia($p2), 2);
    echo "<br/>";
    echo "Distancia entre os pontos(Método 02): " . number_format($p1->CalcularDistancia2(4, 6), 2);
    echo "<br/>";
    echo "Distancia entre os pontos(Método 03): " . number_format($p1->CalcularDistancia2(4, 6, 1, 2), 2);
    echo "<br/><br/>";

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>