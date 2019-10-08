<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>


<?php
echo '<table class="table table-bordered table-hover table-striped text-center">';

for ($x = 1; $x <= 10; $x++) {
	
	echo '<td class="table-info">Tabla del '.$x.'</td>';
	for($y = 1; $y <= 10; $y++){
		 
		echo '<th class="table-warning">'.$x*$y.'</th>';
		
	}
	echo '</tr>';
}

echo '</table>';
?>
</body>
</html>