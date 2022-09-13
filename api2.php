<?php

if( isset ($_POST["a"],$_POST["b"],$_POST["c"] ) ){
    $a=$_POST["a"];
    $b=$_POST["b"];
    $c=$_POST["c"];
    $output=$a**3+$b*$c-$a/$b;
    // echo "$output";
    $results=["a"=>$a, "b"=>$b, "c"=>$c, "output"=>$output];
    echo json_encode($results);
    }
?>
