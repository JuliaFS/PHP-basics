<!DOCTYPE html>
<html>
<head>
    <title>Rich People's Problems</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <form method="post">
        Enter cars separeted by ", "
        <input type="text" name="cars"/>
        <input type="submit" value="Show result" />
    </form>
<?php
    if(isset($_POST['cars']) && !empty($_POST['cars'])):
        $cars = $_POST['cars'];
        //$cars = explode(", ", $cars);
        $cars = preg_split('/[ ,;]+/', $cars);
        //var_dump($cars);
        ?>
    <table>
        <thead>
            <tr>
                <th>Car</th>
                <th>Color</th>
                <th>Count</th>
            </tr>
        </thead>
    <?php
    $colors = ['red', 'pink', 'blue', 'grey', 'yellow', 'black', 'white', 'green', 'silver'];
    foreach($cars as $carName):
        $count = rand(1,10);
        $carColors = array_rand($colors);
        ?>
        <tr>
            <td><?=$carName?></td>
            <td><?=$colors[$carColors]?></td>
            <td><?=$count?></td>
        </tr>
    <?php
       endforeach;
    ?>
    </table>
    <?php
    endif;
    ?>


</body>
</html>