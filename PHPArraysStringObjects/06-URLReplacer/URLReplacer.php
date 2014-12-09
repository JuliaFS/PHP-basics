<!DOCTYPE html>
<html>
<head>
    <title>URL Replacer</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form method="post">
        <div>
            <label for="text">Text:</label>
            <input type="text" name="text" id="text" required="requared"/>
        </div>
        <input type="submit" value="Generate" name="submit">
    </form>
    <?php
    if(isset($_POST['submit'])) {
        $text = $_POST['text'];
        $findStart = '<a href="';
        $replaceStart = '[URL=';
        $text = str_replace($findStart, $replaceStart, $text);
        $findEnd='">';
        $replaceEnd = ']';
        $text = str_replace($findEnd, $replaceEnd, $text);
        $findEndA = '</a>';
        $replaceEndA = '[/URL]';
        $text = str_replace($findEndA, $replaceEndA, $text);
    ?>
    <p><?=$text?></p>
    <?php } ?>
</body>
</html>