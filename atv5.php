<?php
$nota = 0;
$nota = $_GET['aluno'];
if($nota == 7 || $nota > 7)
{
    $teste = "Aprovado";
}
else if($nota < 7)
{
    $teste = "Reprovado";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATV 5</title>
</head>
<body>
<form>
	<input type="number" name="aluno" value= <?= $nota ?> required>Aprovação de Aluno<br>
	<button type="submit">Verificar situação</button>
	<p><?= $teste ?>.</p>
</form>
</body>
</html>