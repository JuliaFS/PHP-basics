<!DOCTYPE html>
<html>
<head>
    <title>Square Root Sum</title>
    <link href="styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Number</th>
                <th>Square</th>
            </tr>
        </thead>
        <tbody>
<?php
$result = 0;
for($i = 0; $i <= 100; $i+=2) : ?>
        <tr>
            <td><?=$i?></td>
            <?php
                $squareValue = round(sqrt($i), 2);
                $result += $squareValue;
            ?>
            <td><?=$squareValue?></td>
         </tr>
<?php endfor; ?>
        <tr>
            <td class="bold">Total:</td>
            <td><?=$result?></td>
        </tr>
        </tbody>
    </table>
</body>
</html>