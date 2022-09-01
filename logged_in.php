<?php
session_start();
?>
<html>
<head>
	<title>Userhome</title>
</head>
<body>
	<center>
		<h2>welcome user <?php echo $_SESSION['Username'];?>
	</h2>
	<h2>Logged in successfully</h2>
	</center>
</body>
</html>