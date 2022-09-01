<?php
	session_start();
	
	$starconn=mysqli_connect("localhost","root","","student");
	
	if(isset($_POST['create']))
	{
	$user_name=preg_replace('/[^A-Za-z0-9\-]/', '',$_POST['Username']);
	$pass=str_replace(';','',$_POST['Password']);
	$pass2=$_POST['Password2'];
	if($pass==$pass2)
	{
			$pass=md5($pass);
	$sql="insert into login(Username,Password) values('$user_name','$pass')";
	mysqli_query($starconn,$sql);
	$_SESSION['message']="you have now created your account";
	$_SESSION['Username']=$user_name;
	header("location:account_created.php");
	}
	else
	{
	$_SESSION['message']="The two passwords dont match";
	header("location:error.php");
	}
}
?>
	
<html>
<head>
<title>crteating login</title>
</head>
<body>
	<center>
		<form method="post" action="creating.php">
			<table>
				<tr>
					<td>Enter a username:</td>
					<td><input type="text" name='Username'></td>
				</tr>
				<tr>
					<td>Enter a password:</td>
					<td><input type="Password" name='Password'></td>
				</tr>
				<tr>
					<td>Enter a Re-password:</td>
					<td><input type="Password" name='Password2'></td>
				</tr>
				<tr>
					<td>
					<center>
						<input type="submit" name='create' value="create a new account"></center></td>
				</tr>
			</table>
			</form>
			</center>
		</body>
		</html>
						

