<!DOCTYPE html>
<html>
<head>
    <title>Show Annual Expenses</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <form method="post">
        <label for="years">Eter number of years:</label>
        <input type="text" name="years" id="years">
        <input type="submit" value="Show costs">
    </form>
    <?php
        if(isset($_POST['years']) && !empty($_POST['years'])):
            $years = intval($_POST['years']);
            //var_dump($years);
            ?>
    <table>
        <thead>
			<tr>
				<th>Year</th>
				<th>January</th>
				<th>February</th>
				<th>March</th>
				<th>April</th>
				<th>May</th>
				<th>June</th>
				<th>July</th>
				<th>August</th>
				<th>September</th>
				<th>October</th>
				<th>November</th>
				<th>December</th>
				<th>Total:</th>
			</tr>
        </thead>
        <tbody>
		
        <?php
        $total = 0;
        $currentYear = date("Y");
        for($i = 0; $i < $years; $i++):
        //var_dump($currentYear);
        ?>
			<tr>
				<td><?=$currentYear?></td>
        <?php
        for($j = 0; $j < 12; $j++):
        $currMonth = rand(50, 1000);
        //var_dump($currMonth);
        ?>		
				<td><?=$currMonth?></td>
        <?php
        $total += $currMonth;
        endfor; 
		?>
				<td><?=$total?></td>
        <	/tr>
        <?php
        $currentYear = $currentYear + 1;
        $total = 0;
        //var_dump($currentYear);
        endfor;
        ?>
        </tbody>
    </table>
    <?php endif; ?>
</body>
</html>