<!DOCTYPE html>
<html>
<head>
    <title>Sentence Extractor</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form method="post">
        <div>
            <label for="text">Text:</label>
            <input type="text" name="text" id="text" required="requared"/>
        </div>
        <div>
            <label for="word">Word:</label>
            <input type="text" name="word" id="word" required="requared"/>
        </div>
        <input type="submit" value="Generate" name="submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $text = $_POST['text'];
        $word = $_POST['word'];
        $pattern = '/[^.!?]*[\.\?!]+/';
        preg_match_all($pattern, $text, $sentences);
        //var_dump($sentences);
        $wordPattern = '/[\s]'.$word.'[\s\.\?!]/';
       //var_dump($wordPattern);
        for($i = 0; $i < count($sentences[0]); $i++) {
            $currRow = $sentences[0][$i];
            $result = preg_match($wordPattern, $currRow);
           if($result > 0){ ?>
           <p><?=$currRow?></p>
    <?php
           }
        }
    }
    ?>
</body>
</html>