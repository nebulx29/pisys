<html>
<body>

<?php
		echo 'executing \'sudo shutdown -r now\'';		
		$output = shell_exec("sudo shutdown -r now");
		echo $output;
?>

</body>
</html>