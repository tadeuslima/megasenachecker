<?php 

/*$selectednumbers = array();

for ($i=0; $i <= 60; $i++) { 
	if ($_POST["cell".$i] == 'on')
	{
		array_push($selectednumbers, $i);
	}
}

echo '<pre>'; print_r($selectednumbers); echo '</pre>';*/

$target_dir = "upload/";
$target_file = $target_dir."numbers.csv";
move_uploaded_file($_FILES["numbers"]["tmp_name"], $target_file);
chmod($target_dir."numbers.csv", 0777);

$file = fopen($target_file, "r");
while (!feof($file)) {
	echo '<pre>';print_r(fgetcsv($file));echo '</pre>';
}

fclose($file);
?>