<?php

$alunos = array( "Mariana", "Nanda", "Raifran", "Duda");
echo "impressão 1 por 1";

 echo "$alunos [0] <br>";
 echo "$alunos [1] <br>";
 echo "$alunos [2] <br>";
 echo "$alunos [3] <br>";

 echo "exemplo com for";
 for ($i=0; $i<(count($alunos)); $i++){
    echo $i;
    echo "alunos [$i] <br>";
}

    echo "exemplo com foreach <br>";
    foreach ($alunos as $dados){
        echo $dados;
    }

?>