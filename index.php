<?php
//ENABLE CODE ERROR DISPLAY
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

//SET THE HOUR STANDARD
date_default_timezone_get('America/Sao_Paulo');

$current_time = date('H:i:s');
$explode_time = explode(':',$current_time);
//array(3) { [0]=> string(2) "hour" [1]=> string(2) "minutes" [2]=> string(2) "seconds" } 

$time = array('hour' => $explode_time[0], 'minutes' => $explode_time[1], 'seconds' => $explode_time[2]);


?>

<!DOCTYPE html>
<html>
<head>
	<title>CHRONOMETER</title>
	<meta charset="utf-8">
</head>
<body>

	<div class="container">
		<div class="box-chronometer">
			

		</div>

	</div>

</body>
</html>