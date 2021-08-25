<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body>


	<h1>This is the Home page</h1>

	<br>
	Hello, <?php echo $user_data['user_name']; ?>

	<h3>E books for Sem6 Subjects are given as below<h3>
	<ul>
	<li><a href="spccindex.html">SPCC</a></li>
	<li><a href="dwmindex.html">DWM</a></li>
	<li><a href="cssindex.html">CSS</a></li>
	<li><a href="erpindex.html">ERP</a></li>
	<li><a href="mlindex.html">ML</a></li>
	<li><a href="seindex.html">SE</a></li>
	</ul>

	<a href="logout.php">Logout</a>
</body>
</html>