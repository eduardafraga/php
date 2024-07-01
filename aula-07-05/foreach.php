<?php
$aluno = array( "nome" => "Duda", 
"idade" => 17, 
"end" => "rua tal tal", 
"cidade"=> "Guanambi",
"estado"=> "BA", 
"cpf"=> "000");

echo "<p> Aluno 1: <br> </p>";
foreach($aluno as $chave => $valor){
echo " $valor" . "<br> ";
}


$aluno1 = array( "nome" => "Eduarda", 
"idade" => 17, 
"end" => "rua z", 
"cidade"=> "",
"estado"=> "BA", 
"cpf"=> "0");

echo "<p> Aluno 2 <br> </p>" ;
foreach($aluno1 as $chave => $valor){
    echo " $valor" . "<br> ";
    }
echo "<br>";


$aluno2 = array( "nome" => "Eu", 
"idade" => 17, 
"end" => "rua tal tal", 
"cidade"=> "GBI",
"estado"=> "BA", 
"cpf"=> "000");

echo "<p> Aluno 3 <br> </p>";
foreach($aluno2 as $chave => $valor){
    echo " $valor" . "<br> ";
    }

?>
<style>
p {
    background-color: #4a92a8;
}
</style>