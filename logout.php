<html>
<body>
<?php
if(isset($_COOKIE["user"]))
{
	setcookie("user", "", time()-3600);
	echo "<p>logout successfully!</p>";
}else
{
	echo "<p>you have not login yet!</p>";
}
?>
<script language=JavaScript>
parent.location.reload();
</script>
<p><a href="maincolumn.php">please return!</a></p>
</body>
</html>