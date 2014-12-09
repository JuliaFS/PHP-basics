<!DOCTYPE html>
<html>
<head>
    <title>Word Mapping</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <form method="post">
        <textarea name="text" required="required"></textarea>
        <input type="submit" value="Count words" name="submit">
    </form>

    <table>
        <?php
        if(isset($_POST['submit'])){
            $text = strtolower($_POST['text']);
            //var_dump($text);
            $pattern = '/([A-Za-z])\w+/';
            preg_match_all($pattern, $text, $words, PREG_SPLIT_NO_EMPTY);
            $words = array_count_values($words[0]);
            //var_dump($words);


            foreach ($words as $key => $value) {
                ?>
                <tr>
                    <td><?=$key?></td>
                    <td><?=$value?></td>
                </tr>
            <?php } ?>
        <?php } ?>
    </table>
</body>
</html>