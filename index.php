<?php

$hostname = trim(shell_exec("hostname"));
$serverip = $_SERVER['SERVER_ADDR'];
$uptime = shell_exec("uptime");

?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>
<?php 
	echo $hostname . " [ " . $_SERVER['SERVER_ADDR'] . " ] &nbsp;&nbsp;&nbsp; ";
	
	if ($hostname == "raspberrypi01")
		echo " GPIO";
	else if ($hostname == "raspberrypi02")
		echo " PlexMediaServer";
	else if ($hostname == "raspberrypi03")
		echo " MagicMirror";
	else if ($hostname == "raspberrypi04")
		echo " RetroPi";
?>

</h1>

Uptime: <?php echo $uptime; ?><br>


<h3>Actions</h3>

<ul>
	<li><a href="execute.php?cmdid=1" class="button">Reboot</a> <br>&nbsp;
	<li><a href="execute.php?cmdid=2" class="button">Shutdown</a><br>&nbsp;

<?php
	if ($hostname == "raspberrypi03") { ?>
	<li><a href="execute.php?cmdid=3" class="button">Display On</a><br>&nbsp;
	<li><a href="execute.php?cmdid=4" class="button">Display Off</a><br>&nbsp;
<?php } ?>
</ul>

<h3>Applications</h3>

<ul>
	
<?php
if ($hostname == "raspberrypi02") { ?>
	<li><a href="http://<?php echo $serverip; ?>:32400/web/index.html" class="button">Plex Media Server</a><br>&nbsp;
<?php 
} 

if ($hostname == "raspberrypi03") { ?>
	<li><a href="execute.php?cmdid=5" class="button">Start MagicMirror</a><br>&nbsp;
	<li><a href="execute.php?cmdid=6" class="button">Stop MagicMirror</a><br>&nbsp;
	<li><a href="execute.php?cmdid=7" class="button">Restart MagicMirror</a><br>&nbsp;
<?php
}
?>
				
</ul>


<h3>Services</h3>

	<ul>
	<li><a href="http://<?php echo $serverip; ?>/pisys/sysinfo.php">sysinfo</a>
	<li><a href="http://<?php echo $serverip; ?>/pisys/gpio.php">GPIO readall</a>
	<li><a href="http://<?php echo $serverip; ?>/pisys/phpinfo.php">phpinfo</a>
	<li><a href="http://<?php echo $serverip; ?>:8088/monitorix">Monitorix</a>
	<li><a href="http://<?php echo $serverip; ?>/phpsysinfo">phpsysinfo</a>
	</ul>

<h3>System Commands</h3>
	<ul>
	<li><a href="execute.php?cmdid=8" class="button">ps -aux</a><br>&nbsp;
	</ul>
	
<h3>Log Files</h3>

	<ul>
	<li><a href="http://<?php echo $serverip; ?>/pisys/taillog.php?file=1">/home/pi/testgpio.log</a>
	<li><a href="http://<?php echo $serverip; ?>/pisys/taillog.php?file=2">/var/log/syslog</a>
	<li><a href="http://<?php echo $serverip; ?>/pisys/taillog.php?file=3">/var/log/user.log</a>
	<li><a href="http://<?php echo $serverip; ?>/pisys/taillog.php?file=4">/var/log/boot.log</a>
	<li><a href="http://<?php echo $serverip; ?>/pisys/taillog.php?file=5">/var/log/picmdd/cron-photo.log</a>
	<li><a href="http://<?php echo $serverip; ?>/pisys/taillog.php?file=6">/var/log/picmdd/gpio.log</a>
	<li><a href="http://<?php echo $serverip; ?>/pisys/taillog.php?file=7">/var/log/picmdd/picmdd.log</a>

	</ul>


</body>
</html>
