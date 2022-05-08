<?php

require_once("Ponto.php");

$p1 = new Ponto(2, 4);

echo "Quantidade de objetos criados:" . Ponto::getContador();
echo "<br/>";
$p2 = new Ponto(4, 6);

echo "Distancia entre os pontos:" . $p1->CalcularDistancia($p2);
echo "<br/>";
echo "Distancia entre os pontos:" . $p1->CalcularDistancia2(4, 6);
echo "<br/>";
echo "Distancia entre os pontos:" . $p1->CalcularDistancia2(4, 6, 1, 2);
