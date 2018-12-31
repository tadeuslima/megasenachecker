<?php 

$drawnnumbers = array();

for ($i=1; $i <= 6 ; $i++) { 
	// echo $_POST["drawn".$i];
	array_push($drawnnumbers, $_POST["drawn".$i]);
}

echo '<pre>';print_r($drawnnumbers);echo '</pre>';

$target_dir = "upload/";
$target_file = $target_dir."numbers.csv";
move_uploaded_file($_FILES["numbers"]["tmp_name"], $target_file);
chmod($target_dir."numbers.csv", 0777);

$count = 0;
$hits = 0;
$file = fopen($target_file, "r");
while (!feof($file)) {
	// echo '<pre>'; print_r( fgetcsv($file) );echo '</pre>'; 
	$currentgame = fgetcsv($file);
	foreach ($drawnnumbers as $key => $value){
		if (in_array($value, $currentgame))
		{
			$hits++;
		}
	}
	echo "Game {$count} -> {$hits} hits<br>";
	$count++; $hits = 0;
}

fclose($file);
?>