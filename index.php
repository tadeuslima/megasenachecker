<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="styles.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript" src="scripts.js"></script>
		<title>Mega-Sena Checker</title>
	</head>
	<body>
		<h1>MEGA-SENA CHECKER</h1>
		<p>Please insert the bet numbers below or upload a CSV file with the chosen numbers</p>
		<form action="formhandler.php" method="post">
			<table>
				<?php 
					for ($i=1; $i <= 60; $i++) { 
						if ($i % 10 == 1) 
						{ ?>
						<tr>
							<td>
								<label for="cell<?=$i?>"><?=$i?></label>
								<input type="checkbox" id="cell<?=$i?>" name="cell<?=$i?>">
							</td>
						<?php } else if ($i % 10 == 0){ ?>
						<td>
							<label for="cell<?=$i?>"><?=$i?></label>
							<input type="checkbox" id="cell<?=$i?>" name="cell<?=$i?>">
						</td>
					</tr>
						<?php } else { ?>
							<td>
								<label for="cell<?=$i?>"><?=$i?></label>
								<input type="checkbox" id="cell<?=$i?>" name="cell<?=$i?>">
							</td>
						<?php }
				} ?>
			</table>
			<button type="submit">SUBMIT</button>
		</form>

		<h1>UPLOAD A CSV FILE</h1>
		<form action="formhandler.php" method="POST" enctype="multipart/form-data">
			<input type="file" name="numbers" accept=".csv">
			<button type="submit">UPLOAD FILE</button>
		</form>

	</body>
</html>