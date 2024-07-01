<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    table {
        width: 100%;
    }

    table caption {
        font-size: 1.5em;
        margin: 0.5em 0 0.75em;
    }

    table tr {
        background-color:  #049CB3;
        border: 1px solid #ddd;
        padding: 0.35em;
    }

    body {
        font-family: "Open Sans", sans-serif;
    }
    </style>
    <title>tabela aluno</title>
</head>

<body>
    <pre>
    <?php

    $array = [
        "alunos" => [
            [
                'id' => 1,
                'nome' => 'eduarda',
                'idade' => 17
            ],
            [
                'id' => 2,
                'nome' => 'eu',
                'idade' => 17
            ],
            [
                'id' => 3,
                'nome' => 'duda',
                'idade' => 18
            ]
        ]
    ];

    $keys = [
        array_keys($array['alunos'][0]),
        array_keys($array['alunos'][1]),
        array_keys($array['alunos'][2])
        
    ];
    ?>
    </pre>
    <table>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>idade</th>
        </tr>

        <?php
        foreach ($array as $alunos) {

            for ($i = 0; $i < sizeof($alunos); $i++) {
                echo "<tr>";
                for ($j = 0; $j < 3; $j++) {

                    print "<td>" . ($array['alunos'][$i][$keys[$i][$j]]) . "</td>";
                }
                echo "</tr>";
            }
        }


        ?>

    </table>
</body>

</html>