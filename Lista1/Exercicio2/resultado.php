<?php
    $valor =$_POST['valorporquilo'];
    $qtde =$_POST['qtdeproduto'];
    if($valor >= 0 && $qtde >=0){
        echo "Valor a pagar: ".doubleval($valor * $qtde);
        echo"</br";
    } else{
        echo "Verifique os valores inseridos";
    }
?>