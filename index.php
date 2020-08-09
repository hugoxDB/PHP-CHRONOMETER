<?php
//ENABLE CODE ERROR DISPLAY
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

//SET THE HOUR STANDARD
date_default_timezone_get('America/Sao_Paulo');

$current_hour = date('H:i:s');


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