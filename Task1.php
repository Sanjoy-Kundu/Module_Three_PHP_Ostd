<?php
/*
Task 1: String Manipulation
Create a string variable called $text with the value "The quick brown fox jumps over the lazy dog.". Write a PHP function which takes "$text" as an argument to:
*/
function myText($text){
    $lowecase = strtolower($text);
    $chnage = str_replace("brown", "red", $lowecase);
    return $chnage;
}

$text = "The quick brown fox jumps over the lazy dog.";
$result = myText($text);
echo $result;
?>