<!DOCTYPE html>
<html>
<head>
    <title>Sidebar Builder</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form method="post">
        <div>
            <label for="categories">Categories:</label>
            <input type="text" name="categories" id="categories" required="requared"/>
        </div>
        <div>
            <label for="tags">Tags:</label>
            <input type="text" name="tags" id="tags" required="requared"/>
        </div>
        <div>
            <label for="months">Months:</label>
            <input type="text" name="months" id="months" required="requared"/>
        </div>
        <input type="submit" value="Generate" name="submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
    $categories = explode(', ', $_POST['categories']);
    $tags = explode(', ', $_POST['tags']);
    $months = explode(', ', $_POST['months']);
    ?>

    <section>
        <h1>Categories</h1>
        <ul>
            <?php
            for ($cat = 0; $cat < count($categories); $cat++) {
                ?>
                <li><?= $categories[$cat] ?></li>
            <?php } ?>
        </ul>
    </section>

    <section>
        <h1>Tags</h1>
        <ul>
            <?php
            for ($tag = 0; $tag < count($tags); $tag++) {
                ?>
                <li><?= $tags[$tag] ?></li>
            <?php } ?>
        </ul>
    </section>

    <section>
        <h1>Months</h1>
        <ul>
            <?php
            for ($mon = 0; $mon < count($months); $mon++) {
                ?>
                <li><?= $months[$mon] ?></li>
            <?php
            }
    } ?>
        </ul>
    </section>
</body>
</html>