
<html>
<body bgcolor="#009933">
<?php
	$a=$_POST["name"];
	$b=$_POST["password"];
	$con = mysql_connect("localhost:3306","root","root");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("my_db", $con);
	
	$result = mysql_query("SELECT * FROM Persons WHERE name='$a'");
	$flag=0;
	while($row = mysql_fetch_array($result))
	{
		if($row['password']!=$b)
		{
			echo 'wrong password!<br/>';
		}else
		{
			echo 'login successfully!<br/>';
			echo "Welcome " . $a . "!<br>";	
			echo '<p><a href="maincolumn.php">please return!</a></p>';
			$flag=1;
		}
	}	
?>
</body>
</html>
<?php 
	if($flag!=0)setcookie("user", $_POST["name"] , time()+600);
?>
<script language=JavaScript>
parent.location.reload();
</script>