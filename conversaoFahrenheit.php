<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<body>
    <form action="" method= "get">
<label for="">Digite a quantidade em Fahrenheit</label> 
<input type="number" name="numero" id="numero">
<input type="submit">
</form>
</body>
<?php 
if (isset($_GET['numero'])) {
$numero = $_GET['numero'];
$resultado= calcular($numero);
echo  $resultado;
}
function calcular ($numero) {
$res = (($numero - 32) * 5) / 9;
return $res;
}
?>
</html>