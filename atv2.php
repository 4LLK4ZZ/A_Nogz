<?php
$peso = 0;
$valor = 0;
$resultado = 0;
$peso = $_GET['peso'];
$valor = $_GET['valor'];
$resultado = $peso * $valor;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATV 2</title>
</head>
<body>
    <form>
    <input type="number" name="peso" value= <?= $peso ?> required>Valor do kg<br>
  	<input type="number" name="valor" value= <?= $valor ?> required>kg<br>
	<button type="submit">Calcular valor</button>
	<p>Valor de: <?= $resultado ?> reais.</p>
    </form>
</body>
</html>