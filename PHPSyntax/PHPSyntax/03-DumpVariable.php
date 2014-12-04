<?php
$firstVariable = "hello";
printVariableType($firstVariable);

$secondVariable = 15;
printVariableType($secondVariable);

$thirdVariable = 1.234;
printVariableType($thirdVariable);

$forthVariable = array(1,2,3);
printVariableType($forthVariable);

$fifthVariable = (object)[2,34];
printVariableType($fifthVariable);


function printVariableType($variables)
{
    if (is_numeric($variables)) {
        var_dump($variables);
    } else {
        echo gettype($variables);
    }
    echo "<br>\n";
}
?>