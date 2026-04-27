<!DOCTYPE html>
<html>
<head>
    <title>Constante</title>
</head>
<body>

<?php
// Definindo a constante para a taxa de câmbio
define("TAXA_CAMBIO", 5.10); // Exemplo de valor para o dólar

// Calculando o valor em reais
$dolares = 50;
$reais = $dolares * TAXA_CAMBIO;

echo "O valor de 50 dólares em reais é R$ " . number_format($reais, 2, ',', '.');
?>

</body>
</html>