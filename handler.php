<?php
$user = $_POST["user"];
$pass = $_POST["pass"];
if ($user == "root" && $pass == "root"){
}
else{
	exit("<center>Username or Password is wrong<br>
	404 User not found</center>");
}
?>
<html>
<head>
<title>Asking</title>
<link rel="stylesheet" href="css\handler.css">
<center>
<div>Hello...<br>
I need some information from you to continue our little session.<br></div>
<form action="talker.php" method="post">
<label>
	<input type="text" placeholder="Enter your name, please" name="name" required id="inputs">
	<br>                                                                         
	<!--<input type="number" placeholder="Enter your age, please" name="age" required id="inputs">-->
	<br>
	<input type="submit" value="Continue">
</label>
</form>
</center>