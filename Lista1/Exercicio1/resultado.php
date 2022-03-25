<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Lista de Exercicios 01</title>
</head>

<body class="container mt-3">
    <h1>Resultado do Exercicio 01</h1>

    <div class="container mt-5">
        <?php

        $pagamento = $_POST["valorpago"];
        $preco = $_POST["precoproduto"];
        if ($pagamento - $preco < 0) {
            echo "Compra cancelada, o valor pago é menor que o valor do produto!";
        } else if ($pagamento - $preco > 0) {
            echo "Valor do Troco: " . $pagamento - $preco;
        } else {
            echo "O valor pago é o mesmo do produto. Não a troco para receber!";
        }


        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>