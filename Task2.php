<?php
/*
Create an array called $numbers containing the numbers 1 to 10. Write a PHP function which takes the "$numbers" array as an argument to remove the even numbers from the array and print the resulting array.
*/
function removeEven($numbers){
        $oddNumber = [];
      foreach($numbers as $num){
            if($num %2 != 0){
                array_push($oddNumber, $num);
            }
      }
       return $oddNumber;
}

$numbers = [1,2,3,4,5,6,7,8,9,10];
$result = removeEven($numbers);
print_r($result);
?>