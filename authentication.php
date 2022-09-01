<html>
<head>
	<title>securing php application</title>
</head>
<body>
	<center>
		<p><h1>Welcome to our website</h1></p>
		<p><b>create account</b></p>
		<?php

		echo "<tr><form action=creating.php method=post>";
		echo "<td><input type=submit value=create_account>";
		echo "</form></tr></td>";
		?>
		<p><b>login to Account</b></p>
		<?php
		echo "<table>";
		echo "<tr><form action=Login.php method=post>";
		echo "<td><input type=submit value=Go_to_Login>";
		echo "</form></tr></td>";
		echo "</table>";
		?>
	</center>
</body>
</html>