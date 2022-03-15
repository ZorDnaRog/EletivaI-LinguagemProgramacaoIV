<?php

$pagamento = $_POST["valorpago"];
$preco = $_POST["precoproduto"];

echo "O valor do troco é: ".($preco - $pagamento);


?>