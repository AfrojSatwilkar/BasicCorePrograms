<form method="post">
    <input type="text" name="number" required>
    <input type="submit" name="submit">
</form>

<?php
if (isset($_POST['submit'])) {
    $num = $_POST['number'];
    if ($num % 2 == 0) {
        echo $num . " is Even";
    } else {
        echo $num . " is Odd";
    }
}
?>