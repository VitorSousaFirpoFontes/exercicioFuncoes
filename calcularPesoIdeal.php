<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method= "get">
<label for="">Digite sua altura</label> 
<input type="number" name="altura" id="numero"> <br>

<label for="">Homem</label>
<input type="checkbox" name="homem" value="1">

<label for="">Mulher</label>
<input type="checkbox" name="mulher" value="2"> <br>
<input type="submit">
</form>


<?php 
if (isset($_GET['altura'])) {
$altura = $_GET['altura'];
}


if (isset($_GET['homem'])) {
    $peso_ideal = (72.2* $altura) - 58;
    echo '<br> <br> Seu peso ideial é ' . $peso_ideal;
}
if (isset($_GET['mulher'])) {
    $peso_ideal = (62.1* $altura) - 44.7;
    echo '<br> <br> Seu peso ideial é ' . $peso_ideal;
}





?>



</body>
</html>