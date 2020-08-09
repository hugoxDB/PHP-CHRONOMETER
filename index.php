<?php

//SOLVE THE HTTP PROTOCOL PROBLEM
header( $_ENV['SERVER_PROTOCOL']." 404 Not Found", true );

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
	<link rel="shortcut icon" href="#" />

	<script type="text/javascript">
		var time_hour = <?php echo $time['hour']; ?>;
		var time_minutes = <?php echo $time['minutes']; ?>;
		var time_seconds = <?php echo $time['seconds']; ?>;

		

	</script>
</head>

<body>

	<div class="container">
		<div id="box-chronometer">
			
				asas
		</div>

	</div>



</body>
</html>