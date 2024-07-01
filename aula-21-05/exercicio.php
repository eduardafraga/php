<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h2>exercicio/casa</h2>
    <pre>
        <?php
        echo"<br>";
        $alunos_notas = array(
        array("nome" => "Ana", "nota" => 10),
        array("nome" => "Bernardo", "nota" => 10),
        array("nome" => "Carlos", "nota" => 10),
        array("nome" => "Daniel", "nota" =>10)
    );

print_r($alunos_notas);

echo "<h3>Alunos Aprovados:</h3>";
foreach ($alunos_notas as $aluno) {
    if ($aluno['nota'] > 7) {
        echo $aluno['nome'] . ": " . $aluno['nota'] . "<br>";
    }
}

echo "<br>";

echo "<h3>Alunos Reprovados:</h3>";
foreach ($alunos_notas as $aluno) {
    if ($aluno['nota'] < 3) {
        echo $aluno['nome'] . ": " . $aluno['nota'] . "<br>";
    }
}

echo "<br>";

echo "<h3>Alunos na Final:</h3><br>";
foreach ($alunos_notas as $aluno) {
    if ($aluno['nota'] > 3 && $aluno['nota'] <= 7) {
        echo $aluno['nome'] . ": " . $aluno['nota'] . "<br>";
    }
}
?>

    </pre>
</body>
</html>