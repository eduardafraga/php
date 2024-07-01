<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>array_laços</h1>

    <h2>Exemplo 01</h2>
    <pre>
    <?php
        $A1=array ("Eu", "Fraga", "Eduarda", ",");
        echo "imrpesso 1 por 1<br>";
        echo $A1[0];
        echo $A1[3] . " ";
        echo $A1[2] . " ";
        echo $A1 [1];
        ?>
    </pre>

    <h2>Exemplo 02: Impressão com for</h2>
    <pre>
    <?php
        $A3=array("Eu", "Duda", "Eduarda");
        for($i=0; $i<(count($A3)); $i++){
            echo $i;
            echo "$A3[$i] <br> "; 
         }
         ?>
    </pre>

    <h2>Exemplo 03: Impressão com foreach</h2>
    <pre>
    <?php
        $A4=array("Eu", "Duda", "Eduarda");
        foreach($A4 as $eu){
            echo $eu . " "; 
         }
         ?>
    </pre>

    <h2>Exemplo 4: print</h2>

    <?php 
    $alunos = array ("Maria" =>
                        array("endereço"=>"rua palmira cardoso",
                    "bairro"=> "Ipiranga"),

                        "João" =>
                        array ("endereço"=>"rua palmira cardoso",
                        "bairro"=> "Ipiranga"),

                        "Zeca"=>
                        array ("endereço"=>"rua palmira cardoso",
                        "bairro"=> "Ipiranga")

                        
        );
                        
    ?>
</body>
</html>