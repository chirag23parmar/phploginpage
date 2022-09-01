<?php
session_start();
?>
<html>
<head>
	<title>Userhome</title>
</head>
<body>
	<center>
		<?php
			echo $_SESSION['message'];
		?>
		<h2>hey..
	</h2>
	<h2>your login is invalid</h2>
	</center>
</body>
</html>