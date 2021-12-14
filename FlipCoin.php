<?php
$flipCoin;
$countHead = 0;
$countTail = 0;

echo "Enter the number of times you want to flip the coin :<br>";

if(isset($_POST['submit'])){
    $userInput = $_POST['number'];
    for($i = 0; $i < $userInput; $i++){
        $flipCoin = rand(0,1) + 1;
        if($flipCoin == 1){
            $countHead++;
        }else {
            $countTail++;
        }
    }
    echo "head repeats " . $countHead . " times<br>";
    echo "tail repeats " . $countTail . " times<br>";
    $percentageHead = ($countHead / $userInput) * 100;
    echo "Percentage of head : " . $percentageHead . "<br>";
    $percentageTail = ($countTail / $userInput) * 100;
    echo "Percentage of tail : " . $percentageTail . "<br>";
}
?>

<form method="post">
    <input type="text" name="number" required>
    <input type="submit" name="submit">
</form>