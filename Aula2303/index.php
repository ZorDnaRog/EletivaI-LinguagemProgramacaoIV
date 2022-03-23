<!doctype html>
<html lang="en">
  <head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Funções</title>
  </head>
  <body class="container mt-5">
    <h1>Trabalhando com Funções</h1>

    <?= date("d/m/Y"); ?>
    <br>
    <?= date("h:i") ?>
    <br>
    <?php 
          //Função sem Retorno
          function FormatarNumero($numero){
            echo "Este é um valor formatado: R$".(number_format($numero,2,',','.'));
          }

          //Função com Retorno
          function RetornarFormatacao($numero){
            return number_format($numero,2,',','.'); // Função com Return
          }


          FormatarNumero(10004,789); // Exemplo de chamada da Função sem retorno
          echo "<br>";
          echo "Este é um valor formatado: R$".RetornarFormatacao(10003.731);// Exemplo de chamada da Função com retorno 
    ?>
    <br>
    <?php 
        function makecoffe($type = "cappucino"){
          return "Fazendo uma xicara de café $type\n";
        }
        echo makecoffe();
        echo "<br>";
        echo makecoffe(null);
        echo "<br>";
        echo makecoffe("expresso");          
    ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
  </body>
</html>