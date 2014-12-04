<?php
require "index.html";
$input = explode(', ',$_GET['data']);
$input = array_count_values($input);
arsort($input);
if (isset ($_GET['data'])) {
    foreach ($input as $key => $value) {
        if ($value != 1) {
            echo "<p>$key: $value times</p>";
        } else {
            echo "<p>$key: $value time</p>";
        }
    }
}
echo "<p>Most fequent tag is: " . array_search(max($input), $input)."</p>";
?>