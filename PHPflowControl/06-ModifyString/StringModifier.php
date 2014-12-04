<!DOCTYPE html>
<html>
<head>
    <title>Modify String</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <form method="post">
        <input type="text" name="text">
        <input id="r1" type="radio" name="radio" value="checkPalindrome"><label for="r1" >Check Palindrome </label>
        <input id="r2" type="radio" name="radio" value="strrev"><label for="r2">Revers String</label>
        <input id="r3" type="radio" name="radio" value="splitString"> <label for="r3">Split</label>
        <input id="r4" type="radio" name="radio" value="hash"> <label for="r4">Hash String</label>
        <input id="r5" type="radio" name="radio" value="shuffleString"><label for="r5">Shuffle String</label>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    if(isset($_POST['text']) && !empty($_POST['text']) && isset($_POST['radio'])):
    $text = $_POST['text'];
    $action = $_POST['radio'];
        //var_dump($action);
    $result = "";
        if($action == "checkPalindrome") {
            //var_dump($text);
            //var_dump($result);
                if ($text === strrev($text)) {
                    $result = "$text is a palindrome!";
                } else {
                    $result = "$text is not a palindrome!";
                }
        }
        if($action == "strrev") {
                $result = strrev($text);
        }

        if($action == "splitString") {
            $text = str_split($text);
            $result = implode(' ', $text);
        }

        if($action == "hash") {
            $result = crypt($text, '$2y$10$aNeX./aMWpleStringforSaAlt$');
        }
        if($action == "shuffleString"){
            $result = str_shuffle($text);
        }

    ?>
    <div><?=$result?></div>
    <?php endif; ?>
</body>
</html>