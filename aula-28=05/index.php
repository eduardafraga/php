<?php

function soma_multiplicao($x, $y)
{
    return $x / $y * ($x + $y);
}


function potencia($x, $y)
{
    return $x ** $y;
}


echo soma_multiplicao(20, 60);
echo "<br>" . potencia(4, 7);



