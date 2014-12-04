<?php
session_start();
if (!isset($_SESSION['score'])) {
    $_SESSION['score'] = 0;
}
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>HTML Tags Counter</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
    <header>
        <h1>Working with forms</h1>
        <p> Write a PHP script HTMLTagsCounter.php which generates an HTML form like in the example below. It should
            contain a label, an input text field and a submit button. The user enters HTML tag in the input field.
            If the tag is valid, the script should print “Valid HTML tag!”, and if it is invalid – “Invalid HTML Tag!”.
            On the second line, there should be a score counter. For every valid tag entered, the score should increase by 1.
            Hint: You may use sessions. Use an array to store all valid HTML5 tags.
        </p>
    </header>
    <article>
        <form action="" method="post">
            <p>Enter HTML tags </p>
            <input name="tag" type="text" required="required"/>
            <input type="submit" name="submit"/>
        </form>
    </article>

    <?php
    if (isset($_POST['submit'])) {
    $tagsString = 'html head body div span DOCTYPE title link meta style p h1 h2 h3 h4 h5 and h6 strong em abbr acronym'.
    'address bdo blockquote cite q code ins del dfn kbd pre samp var br a base img area map object param ul ol li dl dt dd'.
    'table tr td th tbody thead tfoot col colgroup caption form input textarea select option optgroup button label fieldset'.
    'legend script noscript bi tt sub sup big small hr b i';
    $tags = explode(' ', $tagsString);
    if(array_search($_POST['tag'], $tags)){
        $isValidTag = 'Valid';
        $_SESSION['score']++;
    } else {
        $isValidTag = 'Invalid';
    }
    echo "<p>{$isValidTag} HTML tag! <br>\n Score: {$_SESSION['score']}</p>";
    }
    ?>
</body>
</html>