<html>
<body>

<?php
		echo "executing 'sudo shutdown -h now'";		
		$output = shell_exec("sudo shutdown -h now");
?>

</body>
</html>