<html>
<body bgcolor="#CCFFCC">
<?php
	if (isset($_COOKIE["user"]))
		echo 'Welcome ' . $_COOKIE["user"] . '!<br>';
	else
		echo 'Welcome ,please login,or be an anonymous!<br>';
?>
<p>please write something<br></p>
<form action="update.php" method="post">
<input type="text" name="writing">
</form>
<?php
	$con = mysql_connect("localhost:3306","root","root");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("my_db", $con);	
	$result = mysql_query("SELECT * FROM cont");
	echo "<table border='0'>
	<tr>
	<th>name</th>
	<th>content</th>
	</tr>";
	while($row = mysql_fetch_array($result))
	{
		echo "<tr>";
		echo "<td>" . $row['name'] . "</td>";
		echo "<td>" . $row['writing'] . "</td>";
	echo "</tr>";
	}
	echo "</table>";
	mysql_close($con);
?>
</body>
</html>