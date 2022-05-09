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

    $f1 = new Funcionario("Rafael Silva", 27952, 1000);
    $f1->Mostrar();
    echo " Salario Líquido: " . $f1->getSalarioLiquido();
    echo "</br></br>";

    $f2 = new Servente("Jean Feitosa", 27552, 1000);
    $f2->Mostrar();
    $insalubridade = $f2->CalculoInsalubridade();       
    echo "Insalubridade:    " .$insalubridade;
    echo "</br>";
    echo " Salario Líquido: " . ($f2->getSalarioLiquido() + $insalubridade);
    echo "</br></br>";

    $f3 = new Motorista("Amanda Vieira", 24985, 1000, 86467731);
    $f3->Mostrar();
    echo "Carteira de Motorista: ".$f3->getCarteira();
    echo "</br>";
    echo " Salario Líquido: " . $f3->getSalarioLiquido();
    echo "</br></br>";

    $f4 = new MestreDeObras("Wellington Teixeira", 24971, 1000, 10);
    $f4->Mostrar();
    echo " Salario Líquido: " . $f4->getSalarioLiquido();
    echo "</br>";
    echo "Funcionarios Supervisionados:  " . $f4->AdcFuncionarios();
    echo "</br></br>";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>