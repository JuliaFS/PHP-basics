<!DOCTYPE html>
<html>
<head>
    <title>Text Filter</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form method="post">
        <div>
            <label for="text">Text:</label>
            <input type="text" name="text" id="text" required="requared"/>
        </div>
        <div>
            <label for="banlist">Banlist</label>
            <input type="text" name="banlist" id="banlist" required="requared"/>
        </div>
        <input type="submit" value="Generate" name="submit">
    </form>
    <?php
        if(isset($_POST['submit'])){
            $text = $_POST['text'];
            $banlist = explode(', ', $_POST['banlist']);
            for($i = 0; $i < count($banlist); $i++){
                $replecedLetter = str_repeat('*', strlen($banlist[$i]));
                $text = str_replace($banlist[$i], $replecedLetter, $text);
            }
        ?>
        <p><?=$text?></p>
     <?php } ?>
</body>
</html>