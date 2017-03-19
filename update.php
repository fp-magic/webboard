<html>
<body>
<?php
	$con = mysql_connect("localhost:3306","root","root");
	mysql_select_db("my_db", $con);
	if (isset($_COOKIE["user"]))
	{
		$a=$_COOKIE["user"];
	}else
	{
		$a=$_SERVER["REMOTE_ADDR"];
	}
	$b=$_POST["writing"];
	mysql_query("INSERT INTO cont (name,writing) VALUES ('$a','$b')");
	mysql_close($con);
?>
	<script language=JavaScript>
		parent.location.reload();
	</script>
</body>
</html>