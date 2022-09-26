<?php
$n1 = 0;
$n1 = $_GET['numb1'];
if($n1 = 10 && $n1 > 10)
{
	$true = "Maior ou igual a 10!";
}
else
{
	$true = "Menor que 10!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATV 3</title>
</head>
<body>
    <form>
    <input type="number" name="numb1" value= <?= $n1 ?> required>Maior/Menor que 10<br>
	<button type="submit">Verificar número</button>
	<p><?= $true ?>.</p>
    </form>
</body>
</html>
