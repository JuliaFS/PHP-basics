<?php
$result = "";
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];
    $result = "My name is $name. I am $age years old. I am $sex.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Get Form Data</title>
    <style>
        input[type="text"]{
            margin-bottom: 5px;
        }
        input[type="submit"]{
            margin-bottom: 10px;
            margin-top: 10px;
            color: blue;
        }
        label {
            display: block;
        }
        div{
            color: blue;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <form method="post" action="">
        <label for="name"></label>
        <input type="text" name="name" placeholder="Name..">
        <label for="age"></label>
        <input type="text" name="age" placeholder="Age..">
        <label for="male"><input type="radio" id="male" name="sex" value="male">Male</label>
        <label for="female"><input type="radio" id="female" name="sex" value="female">Female</label>
        <input type="submit" name="submit">
    </form>
    <div><?php echo $result; ?></div>
</body>
</html>