<?php
/* 
Create a multidimensional array called $studentGrades to store the grades of three students. Each student has grades for three subjects: Math, English, and Science. Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student.
*/

function averageResult($studentGrades){
    $storeMarks = [];
    foreach($studentGrades as $key => $value){
        $addMark = array_sum($value);
        $student = count($value);
        $avgMark = $addMark / $student;
        $storeMarks[$key] = $avgMark;
    }
    return $storeMarks;
}


$studentGrades = [
    "sanjoy" => ['Math' => 100, 'English' => 100, 'Science' => 100],
    "roni" => ['Math' => 80, 'English' => 75, 'Science' => 80],
    "jubayer" => ['Math' => 70, 'English' => 65, 'Science' => 70],
];

$result = averageResult($studentGrades);

print_r($result);



?>