<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Lista de Exercicios - POO</title>
</head>

<body class="container border mt-5 ">
    <h1>Call Center</h1>

    <?php    
        require_once("Telefone.php");
        require_once("Fixo.php");
        require_once("Celular.php");
        require_once("PrePago.php");
        require_once("PosPago.php");
        
        $tel1 = new Fixo(18,996902587,0.5);
        $tel1->Mostrar();

        $tel2 = new Fixo(18,981048056,1.50);
        $tel2->Mostrar();
        

        
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>