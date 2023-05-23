<?php
session_start();
if(!isset($_SESSION['login_user']))
{
header("Location:adminlogin.php");
}
$user_check=$_SESSION['login_user'];
	
?>