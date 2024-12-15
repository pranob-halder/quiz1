<?php

use LDAP\Result;

function sumOfTwoNumbers($num1=2,$num2=2){
$Result = $num1+$num2;
return $Result;
}

$sumOfTest1= sumOfTwoNumbers(10,10);
$sumOfTest2= sumOfTwoNumbers();

$myresult = $sumOfTest1+ $sumOfTest2;

echo "This is my Resukt ".$myresult;

//variadic function
function arraySum(array $numbers){
    $sumarrayresult= array_sum($numbers);
    return  $sumarrayresult;
}
  $sumarrayresults = arraySum([2,3,3]);
  echo "your arry sum is $sumarrayresults";
?>