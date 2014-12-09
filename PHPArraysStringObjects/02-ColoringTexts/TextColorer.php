<!DOCTYPE html>
<html>
<head>
    <title>Word Mapping</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <form method="post">
        <textarea name="text" required="required"></textarea>
        <input type="submit" value="Color text" name="submit">
    </form>
    <div class="container">
        <?php
        if(isset($_POST['submit'])){
            $text = $_POST['text'];
            $text = str_split($text);
            //var_dump($text);
            for($i = 0; $i < count($text); $i++){
                $currentLetter = ord($text[$i]);
                //var_dump($currentLetter);
                if($currentLetter % 2 == 0){
                    ?>
                    <span class="red"><?=$text[$i]?></span>

                <?php
                }
                else{

                    ?>
                    <span class="blue"><?=$text[$i]?></span>
                <?php
                }

            }
        }

        ?>
    </div>
</body>
</html>