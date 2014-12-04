<?php
require "index.html";
if(isset($_GET['amount']) && isset($_GET['currency']) && isset($_GET['interest']) && isset($_GET['period'])) {
    $moneyAmount = $_GET['amount'];
    $currency = $_GET['currency'];
    $interest = $_GET['interest'];
    $period = $_GET['period'];
    if($period == '6months') {
        $period = 6;
    }
    else if($period == '1year') {
        $period = 12;
    }
    else if($period == '2years') {
        $period = 24;
    }
    else {
        $period = 60;
    }
    $result = round($moneyAmount * pow(1 + (($interest / 100) / 12), $period / 12 * 12), 2);
    if($currency == 'usd') {
        $result = '$ ' . $result;
        echo "<p>$result</p>";
    }
    else if($currency == 'eur') {
        $result = '&#8364; ' . $result;
        echo "<p>$result</p>";
    }
    else {
        $result = $result . " lv.";
        echo "<p>$result</p>";
    }
}
?>