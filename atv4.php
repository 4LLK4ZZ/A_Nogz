<?php
$n1 = 0;
$n1 = $_GET['numb2'];
if($n1 == 0)
{
    $teste = "Igual a zero";
}
else if($n1 > 0)
{
    $teste = "Valor Positivo";
}
else
{
	$teste = "Valor Negativo";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATV2</title>
</head>
<body>
<form>
	<input type="number" name="numb2" value= <?= $n1 ?> required>Positivo/Negativo<br>
	<button type="submit">Verificar número</button>
	<p><?= $teste ?>.</p>
</form>
</body>
</html>