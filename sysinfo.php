<?php

$hostname = trim(shell_exec("hostname"));
$unameout = shell_exec("uname -a");
$vmstatout = nl2br(shell_exec("vmstat"));
$lsbrelease = shell_exec("lsb_release -a");
$uptime = shell_exec("uptime");
$serverip = $_SERVER['SERVER_ADDR'];

?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h3>System Information</h3>

	<table>
		<tr>
			<td>Server</td>
			<td>
				<pre>
Server Addr: <?php echo $_SERVER['SERVER_ADDR'] . "\n" ?>
Server Name: <?php echo $hostname . "\n" ?>
Request Method: <?php echo $_SERVER['REQUEST_METHOD'] . "\n" ?>
Remote IP: <?php echo $_SERVER['REMOTE_ADDR'] . "\n" ?>
Remote Port: <?php echo $_SERVER['REMOTE_PORT'] ?>
				</pre></td>
		</tr><tr>
			<td>uname</td>
			<td><pre><?php echo $unameout ?></pre></td>
		</tr><tr>
			<td>ubuntu</td>
			<td><pre><?php echo $lsbrelease ?></pre></td>
		</tr><tr>
			<td>uptime</td>
			<td><pre><?php echo $uptime ?></pre></td>
		</tr><tr>
			<td>vmstat</td>
			<td><pre><?php echo $vmstatout ?></pre></td>
		</tr>
	</table>
</body>