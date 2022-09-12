<?php

$str_input = $_GET["str_input"];


function checkPalindrome($str_input)
{

    $str_reversed = strrev($str_input);
    $is_palindrome = False;

    if ($str_input == $str_reversed) {
        $is_palindrome = True;
    }

$results =["word"=>$str_input, "is_palindrome"=>$is_palindrome];
return $results;
}



echo json_encode(checkPalindrome($str_input));
