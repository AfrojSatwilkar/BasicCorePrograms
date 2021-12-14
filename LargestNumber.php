<?php
$firstNumber = 875;
$secondNumber = 655;
$thirdNumber = 654;

if($firstNumber > $secondNumber && $firstNumber > $thirdNumber) {
    echo $firstNumber . " is greater among 3 numbers";
}elseif($seconNumber > $firstNumber && $seconNumber > $thirdNumber) {
    echo $secondNumber . " is greater among 3 numbers";
}elseif($thirdNumber > $firstNumber && $thirdNumber > $seconNumber) {
    echo $thirdNumber . " is greater among 3 numbers";
}elseif($firstNumber == $seconNumber || $firstNumber == $thirdNumber || $seconNumber == $thirdNumber) {
    echo "you enter 2 similer number";
}
?>