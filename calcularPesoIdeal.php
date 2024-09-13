<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method= "get">
<label for="">Digite o seu peso</label> 
<input type="number" name="peso" id="numero">

<label for="">Homem</label>
<input type="checkbox" name="homem" value="1">

<label for="">Mulher</label>
<input type="checkbox" name="mulher" value="2">
<input type="submit">
</form>


<?php 
if (isset($_GET['peso'])) {
$peso = $_GET['peso'];
$genero = $_GET['homem'];
}


if (isset($_GET['homem'])) {
    echo 'voce e homi';
}
if (isset($_GET['mulher'])) {
    echo 'voce e muie';
}





?>



</body>
</html>