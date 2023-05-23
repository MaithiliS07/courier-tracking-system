<html>

<head>
 <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
<style>

.field{
	margin-top:10%;
	margin-left:30%;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	width:40%;
}
.txt{
	margin-left:60px;
	margin-right:30px;
	padding-left:10px;
	margin-bottom:10px;
	border:none;
	width:70%;
	border-bottom:2px solid black;
	height:40px;
	
}
.btn{
	
	margin-left:35%;
	margin-top:30px;
	margin-bottom:30px;
	border-radius:10px;
	color:white;
	width:30%;
	font-family:'Abel';
    border:2px solid;
	height:8%;
	background:#E50914;
	font-size:18px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
 
	
}
.btn::after{
  background: #fff;
  transition: 0.4s;
}
.btn:hover::after{
  transform: scale(1.3);
  opacity: 0;
}
.btn:hover
{ 
  border: 2px solid #fff;
  background:black;
  color:#fff;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  transition: width 0.4s, height 0.4s;
 }	
.heading{
 padding-top:30px;
 padding-left:30px;
 font-family:'Abel';
	
}
</style>
</head>
<body>
<form method="POST">
<div class="field">
<h1 class="heading">ADMIN LOGIN</h1>
<input type="text" name="user" placeholder="Username" class="txt"><br>
<input type="password" name="pass" placeholder="Password" class="txt"><br>
<input type="submit" name="submit" value="SUBMIT" class="btn">

</div>
</form>
</body>
</html>
<?php
session_start();
if(isset($_SESSION['login_user']))
{
header("Location:menu.php");	
}
if($_SERVER['REQUEST_METHOD']=="POST")
{
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	if($user=="admin" && $pass="admin1234"){
		$_SESSION['login_user']=$user;
		header("Location:menu.php");
		
	}
	
	else 
		echo '<script>alert("YOUR LOGIN NAME OR PASSWORD IS INVALID");</script>';
}
?>




