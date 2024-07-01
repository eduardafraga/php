<style>
p {
    background-color: #bb70ba;
}
</style>

<?php
$aluno = array( "nome" => "Fabio S", 
"idade" => 30, 
"end" => "rua x", 
"cidade"=> "Guanambi",
"estado"=> "BA", 
"cpf"=> "000.000.000-20");

echo "<p> Aluno 1 </p>" ;
echo $aluno["nome"] ."<br>";
echo $aluno["idade"] ."<br>";
echo $aluno["end"] . "<br>";
echo $aluno["cidade"] . "<br>";
echo $aluno["estado"] . "<br>";
echo $aluno["cpf"] . "<br>";

echo "<br>";
?>