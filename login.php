<?php
session_start();
$starconn=mysqli_connect("localhost","root","","student");
if(isset($_POST['login']))
{
	$user_name=$_POST['Username'];
	$pass=$_POST['Password'];
	$sql="SELECT * FROM login WHERE Username='$user_name' and Password='$pass'";
	$val=mysqli_query($starconn,$sql);
	if(mysqli_fetch_array($val))
	{
		$_SESSION['message']="you are now logged in to your account";
		$_SESSION['Username']=$user_name;
		header("Location:logged_in.php");
	}
	else
	{
		$_SESSION['message']="error in logging in";
		header("Location:error.php");
	}
}
?>


<html>
<head>
	<title>login</title>
</head>
<body>
	<center>
	<form method="post" action="login.php">
	<table>
		<tr>
			<td>Enter username:</td>
			<td><input type="text" name='Username'></td>
		</tr>
		<tr>
			<td>Enter password:</td>
			<td><input type="Password" name='Password'></td>
		</tr>
		<tr>
			<td colspan="2"><center><input type="submit" name='login' value="Login"></center></td>
		</tr>
	</table>
	</form>
	</center>
</body>
</html>