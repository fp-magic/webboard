<html>
<body bgcolor="#009933">
<?php
	$con = mysql_connect("localhost:3306","root","root");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("my_db", $con);	
	$a=$_POST["rname"];
	$b=$_POST["rpassword"];
	mysql_query("INSERT INTO Persons (name,password)
	VALUES ('$a','$b')");
	mysql_close($con);
?>
	you have registered successfully!<br/>
	<p><a href="maincolumn.php">please return!</a></p>
</body>
</html>