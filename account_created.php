<?php
session_start();
?>
<html>
<head>
<title>User Home</title>
</head>
<body>
<center>
<h2>welcome user <?php echo $_SESSION['Username']; ?></h2>
<h2>Account created successfully</h2>
<a href="login.php">Go to login page</a>
</center>
</body>
</html>