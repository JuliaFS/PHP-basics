<?php
    if(isset($_POST['submit'])){
        $start = $_POST['startIndex'];
        //var_dump(start);
        $end = $_POST['endIndex'];
        //var_dump(end);

    $numbers = array();
    for($j = $start; $j <= $end; $j++) {
        if (isPrime($j)){
            $numbers[] = "<span class=\"bold\">$j</span>";
        } else {
            $numbers[] = $j;
        }
    }
    $result = implode(', ', $numbers);
}

    function isPrime($number)
    {
        // If n is less than 2 then by definition cannot be prime.
        if ($number < 2) {
            return false;
        }
        if ($number != round($number)) {
            return false;
        }
        // Now assume that n is prime, we will try to prove that it is not.

        $isPrime = true;

        // Now check every whole number from 2 to the square root of n. If any of these divides n exactly, n cannot be prime.
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                $isPrime = false;
            }
        }
        // Finally return whether n is prime or not.
        return $isPrime;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Find Primes in Range</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<form method="post">
    <label for="start">Starting index:</label>
    <input type="text" id="start" name="startIndex">
    <label for="end">End:</label>
    <input type="text" id="end" name="endIndex">
    <input type="submit" value="Submit" name="submit">
</form>
<?php if (isset($_POST['submit'])) : ?>
    <div><?=$result?></div>
<?php endif ?>
</body>
</html>