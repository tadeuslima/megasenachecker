<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<title>Mega-Sena Checker</title>
</head>
<body>
	<h1>MEGA-SENA CHECKER</h1>
	<p>Please insert the bet numbers below or upload a CSV file with the chosen numbers</p>
	<form action="#">
		<table>
			<?php 
				for ($i=1; $i <= 60; $i++) { 
					if ($i % 10 == 1) 
					{ ?>
					<tr>
						<td><input type="checkbox" id="cell<?=$i?>" name="cell<?=$i?>"><?=$i?></td>
					<?php } else if ($i % 10 == 0){ ?>
					<td><input type="checkbox" id="cell<?=$i?>" name="cell<?=$i?>"><?=$i?></td></tr>
					<?php } else { ?>
						<td><input type="checkbox" id="cell<?=$i?>" name="cell<?=$i?>"><?=$i?></td>
					<?php }
			} ?>
		</table>
		<button type="submit">SUBMIT</button>
	</form>

</body>
</html>