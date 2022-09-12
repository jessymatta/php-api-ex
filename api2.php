<?php

// Precondition b: should be different from 0
function expression($a,$b,$c) {
    if($b!=0){
    return $a**3+$b*$c-$a/$b;
    }
}


if( isset ($_POST["a"],$_POST["b"],$_POST["c"] ) ){
    $a=$_POST["a"];
    $b=$_POST["b"];
    $c=$_POST["c"];
    echo "expression($a,$b,$c)";
    
    }


?>
