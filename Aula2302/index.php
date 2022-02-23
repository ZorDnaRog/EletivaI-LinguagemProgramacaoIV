<!doctype html>
<html lang="En">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <h1>
        Olá! Hoje é dia
        <?php            
            echo "<p>".date('d/m/Y')."</p>"; // Pode se utilizar print("Seu texto aqui"); no lugar de "echo"
            $umaVariavel = 20; // Para iniciar uma variavel é necessário inserir $, no exemplo temos uma variavel do tipo int
            $umaVariavel = "Vanessa";            
            //echo "Meu nome é ".$umaVariavel; //Exemplo de exibição de uma variavel concatenada
            echo "Meu nome é $umaVariavel";
            $total = 30 * 10 /2 - 4 + 1;
            $total++;
            $total--;
            --$total; // O uso do incremento ou decremento antes da variavel tem com relaçao ao processamento, usado antes o laço de repetiçao do tipo "for" realiza primeiro o incremento ou decremento antes de iniciar o laço. Questão de prioridade.
            echo $total;


        ?>
        <!--Insira Y em maiusculo para obter o ano com quatro digitos!-->
    </h1>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>