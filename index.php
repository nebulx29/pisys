<?php

$hostname = trim(shell_exec("hostname"));
$serverip = $_SERVER['SERVER_ADDR'];

?>

<html>
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

<h3>Actions</h3>

<ul>
	<li><a href="reboot.php">Reboot</a><br>&nbsp;
	<li><a href="shutdown.php">Shutdown</a><br>&nbsp;

<?php
	if ($hostname == "raspberrypi03") { ?>
	<li><a href="display_on.php">Display On</a><br>&nbsp;
	<li><a href="display_off.php">Display Off</a><br>&nbsp;
<?php } ?>
</ul>

<h3>Applications</h3>

<ul>
	
<?php
if ($hostname == "raspberrypi02") {
	echo "<li><a href=\"http://" . $serverip . ":32400/web/index.html\">Plex Media Server</a><br>&nbsp;";
}

if ($hostname == "raspberrypi03") {
	echo "<li><a href=\"mm-start.php\">Start MagicMirror</a><br>&nbsp;";
	echo "<li><a href=\"mm-stop.php\">Stop MagicMirror</a><br>&nbsp;";
	echo "<li><a href=\"mm-restart.php\">Restart MagicMirror</a><br>&nbsp;";
}
?>
				
</ul>


<h3>Services</h3>

	<ul>
	<li><a href="http://<?php echo $serverip; ?>/sys/sysinfo.php">sysinfo</a><br>&nbsp;
	<li><a href="http://<?php echo $serverip; ?>/sys/gpio.php">GPIO readall</a><br>&nbsp;
	<li><a href="http://<?php echo $serverip; ?>/sys/phpinfo.php">phpinfo</a><br>&nbsp;
	<li><a href="http://<?php echo $serverip; ?>:8088/monitorix">Monitorix</a><br>&nbsp;
	<li><a href="http://<?php echo $serverip; ?>/phpsysinfo">phpsysinfo</a><br>&nbsp;
	</ul>



</body>
</html>
