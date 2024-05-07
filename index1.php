<?php 
    $var = "nula"; 
       echo "Variável \$var é nula/vazia!<br>";  

   $var = "River Phoenix"; 
   if(is_string($var)) { 
       echo "Variável \$var é uma string!<br>"; }
        
   $var = 23; 
   if(is_integer($var)) { 
       echo "Variável \$var é um inteiro!<br>";}
        
   $var = false; 
   if(is_bool($var)) { 
       echo "Variável \$var é booleana!";} 
  
?>  
