<?php 
    $valor = $_POST['valorverificar'];
    $valorparametro = doubleval($valor);
    if ($valorparametro >10){
        echo "Valor maior que 10";
    } else if($valorparametro < 10){
        echo "Valor menor que 10";
    } else{
        echo "Valor é igual a 10";
    }
?>
    