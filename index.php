<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<title>Mega-Sena Checker</title>
</head>
<body>
	<h1>MEGA-SENA CHECKER</h1>
	<p>Please insert the bet numbers below or upload a CSV file with the chosen numbers</p>
	<table>
		<?php 
			for ($i=1; $i <= 60; $i++) { 
				if ($i % 10 == 1) 
				{ ?>
				<tr>
					<td><?=$i?></td>
				<?php } else if ($i % 10 == 0){ ?>
				<td><?=$i?></td></tr>
				<?php } else { ?>
					<td><?=$i?></td>
				<?php }

		} ?>
	</table>

</body>
</html>