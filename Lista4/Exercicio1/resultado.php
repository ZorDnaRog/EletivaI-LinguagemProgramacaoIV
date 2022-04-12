<?php

    session_start();  
    
    
    $_SESSION['volta1'] = $_POST['tempo1'];
    $_SESSION['volta2'] = $_POST['tempo2'];
    
    
?>

<h3>Tempo inserido!!!</h3>
<button class="btn btn-primary" onclick="window.location.href = 'index.php'">Inserir Outro Tempo</button>
<button class="btn btn-primary" onclick="window.location.href = 'voltas.php'">Verificar Resultados</button>