
<?php

$cantores= array("ana", "chris cornell", "lana del rey", "fagner");

echo "<p>  cantores: <br></p>";
for($l=0; $l<=(count($cantores)-1); $l++){

    if($l == 4){
        echo "$cantores[$l] <br>";
}
}
?>