<!DOCTYPE html>
<html>
<head>
    <title>Sum of digits</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<form method="post">
    <label for="start">Input string:</label>
    <input type="text" id="start" name="text">
    <input type="submit" value="Submit" name="submit">
    <?php
    if(isset($_POST['text']) && !empty($_POST['text'])):
    $textValues = $_POST['text'];
    //$splitedText = explode(", ", $textValues);
    $splitedText = preg_split('/[ ,;]+/', $textValues);
    //var_dump($splitedText);
    ?>
    <table>
        <tbody>
    <?php
    for($i = 0; $i < count($splitedText); $i++):
        if(is_numeric($splitedText[$i])){
            //var_dump($splitedText[$i]);
            $digits = str_split($splitedText[$i]);
            //var_dump($digits);
            $sumOfDigits = array_sum($digits);
            //var_dump($sumOfDigits);
    }
        else{
            $sumOfDigits = "I cannot sum that";
        }
    ?>
        <tr>
            <td><?=$splitedText[$i]?></td>
            <td><?=$sumOfDigits?></td>
        </tr>
    <?php endfor; ?>
        </tbody>
    </table>
    <?php endif; ?>
</form>
</body>
</html>