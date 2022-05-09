<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Lista de Exercicios - POO</title>
</head>

<body class="container border mt-5 ">
    <h1>Construtora</h1>

    <?php
    require_once("Funcionario.php");
    require_once("Servente.php");
    require_once("Motorista.php");
    require_once("MestreObras.php");

    $fun1 = new Funcionario("Rafael Silva", 27952, 3000);
    $fun1->Mostrar();
    echo " Salario Líquido: " . $fun1->getSalarioLiquido();
    echo "</br></br>";

    $fun2 = new Servente("Jean Feitosa", 27552, 1500);
    $fun2->Mostrar();
    echo " Salario Líquido: " . $fun2->getSalarioLiquido();
    echo "</br>";
    echo "Insalubridade:    " . $fun2->CalculoInsalubridade();
    echo "</br></br>";

    $fun3 = new Motorista("Amanda Vieira", 24985, 3800, 86467731);
    $fun3->Mostrar();
    echo " Salario Líquido: " . $fun3->getSalarioLiquido();
    echo "</br></br>";

    $fun4 = new MestreDeObras("Wellington Teixeira", 24971, 9800, 10);
    $fun4->Mostrar();
    echo " Salario Líquido: " . $fun4->getSalarioLiquido();
    echo "</br>";
    echo "Funcionarios Supervisionados:  " . $fun4->FunComandado();
    echo "</br></br>";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>