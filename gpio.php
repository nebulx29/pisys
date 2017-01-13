<?php
	
$gpioreadall = "\n " . trim(shell_exec("gpio readall"));
	
?>

<html>
<head>
	<meta http-equiv="refresh" content="1">
</head>
<body>
<pre>
	<?php echo $gpioreadall; ?>
</pre>
</body>
</html>
