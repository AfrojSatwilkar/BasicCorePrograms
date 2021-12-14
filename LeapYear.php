<?php
$year;
echo "Enetr Year<br>";

if (isset($_POST['submit'])) {
    $year = $_POST['number'];
    if ($year >= 1000) {
        if ((($year % 4 == 0 && $year % 100 != 0)) || ($year % 400 == 0)) {
            echo "Leap year";
        } else {
            echo "Not Leap year";
        }
    } else {
        echo "Invalid Input from User";
    }
}
?>

<form method="post">
    <input type="text" name="number" required>
    <input type="submit" name="submit">
</form>