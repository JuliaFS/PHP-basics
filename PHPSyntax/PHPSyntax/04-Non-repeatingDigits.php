<?php
$n = 1234;
$result = [];

if($n < 100){
echo "no";
}
else{
    if($n < 999){
        $i = $n;
    }
    else{
        $n = 999;
    }
for($i=100; $i<=$n; $i++){
$rightDigit = $i % 10;
$middleDigit = ($i / 10) % 10;
$leftDigit = floor($i / 100);
    if($rightDigit != $middleDigit && $middleDigit != $leftDigit && $leftDigit != $rightDigit){
        $result[] = $i;
    }

}
echo implode($result, ', ');
}

?>