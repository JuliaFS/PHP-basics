<?php
require "index.html";
if(isset($_GET['data'])) {
    $tagsAsText = $_GET['data'];
    $allTags = explode(", ",$tagsAsText);
    for($i=0; $i<count($allTags); $i++){
        echo "<br>\n $i:$allTags[$i]";
    }
}
?>