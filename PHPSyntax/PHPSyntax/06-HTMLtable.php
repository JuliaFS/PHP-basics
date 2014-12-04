<?php
$name = "Gosho";
$phone = "0882-321-423";
$age = "24";
$address = "Hadji Dimitar";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>HTML Table</title>
    <link type="text/css" rel="stylesheet" href="html-table.css">
</head>
<body>
<table>
    <tbody>
        <tr>
            <td><strong>Name</strong></td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td><strong>Phone number</strong></td>
            <td><?php echo $phone; ?></td>
        </tr>
        <tr>
            <td><strong>Age</strong></td>
            <td><?php echo $age; ?></td>
        </tr>
        <tr>
            <td><strong>Address</strong></td>
            <td><?php echo $address; ?></td>
        </tr>
    </tbody>
</table>
</body>
</html>