<html>
<head>
 <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>

<style>

.field{
	margin-top:7%;
	margin-left:20%;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);	width:55%;
}
.txt{
	margin-left:50px;
	margin-right:30px;
	padding-left:10px;
	margin-bottom:10px;
	border:none;
	width:80%;
	border-bottom:2px solid #E50914;
	height:40px;
	
}
.btn{
	border-radius:5px;
	color:white;
	width:30%;
	font-family: sans-serif;
	border: 2px solid white;
   	height:50px;
	background:#E50914;
	font-size:18px;
	margin-top:20px;
	margin-bottom:50px;
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
 color:#E50914;
	
}
</style>
</head>
<body>
<form action="staffinsert.php" method="POST">
<div class="field">
<center>
<h3 class="heading">STAFF REGISTRATION</h1>
<input type="text" name="sid" placeholder="Staff ID" class="txt" ><br>
<input type="text" name="sname" placeholder="Staff Name" class="txt" ><br>
<input type="text" name="smno" placeholder="Mobile No." class="txt"><br>
<input type="text" name="saddr" placeholder="Address" class="txt"><br>
<input type="submit" name="submit" value="Add Staff" class="btn">
</center>
</div>
</form>
</body>
</html>
