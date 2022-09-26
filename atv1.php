<?php
$v1 = 0;
$v2 = 0;
$result = 0;
$v1 = $_GET['valor1'];
$v2 = $_GET['valor2'];
$result = $v1 - $v2;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATV 1</title>
</head>
<body>
<form>
  	<input type="number" name="valor1" value= <?= $v1 ?> required>Valor 1<br>
  	<input type="number" name="valor2" value= <?= $v2 ?> required>Valor 2<br>
  	<button type="submit">Calcular troco</button>
	<p>Troco de: <?= $result ?> reais.</p>
</form>
</body>
</html>