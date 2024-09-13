<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method= "get">
<label for="">Digite o valor em real</label> 
<input type="number" name="numero" id="numerojnb">
<input type="submit">
</form>    
</body>

<?php

if (isset($_GET['numero'])) {
$numero2 = $_GET['numero'];
$conversao = $numero2 * 1.81;
echo '<p>O valor convertido é: R$ ' . number_format($conversao, 2, ',', '.') . '</p>';

}


?>
</html>