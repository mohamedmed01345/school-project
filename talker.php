<?php
session_start();
$_SESSION["name"] = $_POST["name"];
$_SESSION["age"] = $_POST["age"];
echo"<h1>Hello ".$_SESSION["name"]."</h1>";
echo"My name is Adam<br>
I'm Under Consracting right now...<br>
So sorry,I'm not active yet";
?>
<style>
body{
	font-family: arial;
}
</style>