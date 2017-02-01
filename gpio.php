<?php
	
$gpioreadall = "\n " . trim(shell_exec("gpio readall"));
	
?>

<html>
<head>
	<meta http-equiv="refresh" content="1">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<pre>
	<?php echo $gpioreadall; ?>
</pre>
</body>
</html>
