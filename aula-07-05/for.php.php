
<?php
$aluno = array( "Eduarda Fraga",  17, "rua tal tal", "Guanambi","BA",  "000.000.000-20");

echo "<p> Aluno 1:" . "<br></p>";
for($i=0; $i < 6; $i++){
    echo "$aluno[$i]" . "<br>";

}
echo "<br>"; 
$aluno1 = array( "Duda", 17, "rua tal tal",  "GBI", "BA", "000.000.000-10");

echo "<p> Aluno 2:" . "<br></p>";
for($i=0; $i < 6; $i++){
    echo "$aluno1[$i]" . "<br>";

}
echo "<br>";

$aluno2 = array("eu", 17, "rua tal tal", "GBI", "BA", "03");

echo "<p> Aluno 3:" . "<br> </p>";
for($i=0; $i < 6; $i++){
    echo "$aluno2[$i]" . "<br>";

}

?>

<style>
p {
    background-color: #4a92a8;
}
</style>
