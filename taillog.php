<?php

$logfileid = $_GET['file'];
$logfiles = array(	1 => "/home/pi/testgpio.log",
					2 => "/var/log/syslog",
					3 => "/var/log/user.log",
					4 => "/var/log/boot.log",
					5 => "/var/log/picmdd/cron-photo.log",
					6 => "/var/log/picmdd/gpio.log",
					7 => "/var/log/picmdd/picmdd.log"
				);

$command = "tail -1000 " . $logfiles[$logfileid];
exec($command, $output, $retval);

?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h3>Logfile <pre><?php echo $logfiles[$logfileid]; echo " (" . $logfileid . ")"?></pre></h3>

<pre>
<?php 
for ($i=0; $i<sizeof($output); $i++)
echo $output[$i] . "\n"; 
?>
</pre>
</body>
</html>