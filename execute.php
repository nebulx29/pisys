<?php

$cmdid  = $_GET['cmdid'];
$cmds   = array(	1 => "sudo shutdown -r now",
					2 => "sudo shutdown -h now",
					3 => "sudo /home/pi/bin/display-on.sh",
					4 => "sudo /home/pi/bin/display-off.sh",
					5 => "sudo -u pi /home/pi/bin/mm-start.sh",
					6 => "sudo -u pi /home/pi/bin/mm-stop.sh",
					7 => "sudo -u pi /home/pi/bin/mm-restart.sh",
					8 => "ps -aux"
				);

?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<head>
	<script>
	window.onload = function gotoPrevPage() {
	   //window.history.back();
	}
	</script>
</head>
<body>

<?php
		echo "executing '" . $cmds[$cmdid] . "'";
		$output = shell_exec($cmds[$cmdid]);
		echo $output;
?>

</body>
</html>