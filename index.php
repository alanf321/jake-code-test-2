<?php
$url = 'people.json'; 
$data = file_get_contents($url);
$array = json_decode($data);
//print_r($array);
foreach ($array as $el) {
	$el->age += 5;
}
//print_r($array);
?>
