<html>
<head>
	<title>connecting database</title>
</head>
<center>
	<body>
		<?php
		$starconn=mysqli_connect("localhost","root","") or
		 die("couldnt conect");
		mysqli_select_db($starconn,"student");
		$name=str_replace(' ','-',$_POST['name']);
		$name=preg_replace('/[^A-Za-z0-9\-]/', '',$name);
		$year=str_replace(' ','-',$_POST['year']);
		$year=preg_replace('/[^A-Za-z0-9\-]/', '',$year);
		$perc=str_replace(' ','-',$_POST['perc']);
		$perc=preg_replace('/[^A-Za-z0-9\-]/', '',$perc);
		$sql="update data SET Name='$name', Year='$year', Percentage='$perc' where RollNo='$_POST[rollno]'";
		if(mysqli_query($starconn,$sql))
		header("refresh:2; url=database.php");
		echo "updating....";
		?>
		</body>
		</center>
		</html>  