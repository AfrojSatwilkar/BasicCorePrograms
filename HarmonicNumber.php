<?php
$harmonicNumber = 1;

echo "Enetr number :<br>";

if(isset($_POST['submit'])){
    $num = $_POST['number'];
    
    if($num != 0){
        for($i = 1; $i < $num; $i++){
            $harmonicNumber = $harmonicNumber + (1 / $i);
        }
    }
    echo "Nth harmonic number is : " . $harmonicNumber;
}
?>

<form method="post">
    <input type="text" name="number" required>
    <input type="submit" name="submit">
</form>