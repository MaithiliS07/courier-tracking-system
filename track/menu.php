<?php
 require("lock.php");
?>
<html>
<head>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<style>
body{
    margin: 0;
    padding: 0;
	background-size: cover;
    background-position: center;
    font-family: sans-serif;
}
.heading {
	 font-family: sans-serif;
	 font-weight: bold;
	 font-size:60px;
	 
}
.menubox{display: flex;
justify-content: center; 
	margin:10% 0;
	width:100%;
    height:200px;
    color:#fff;
	
    position: absolute;
 	
}

.menubox p{
margin:0.5px;
font-weight: bold;
font-family: sans-serif;
font-size:19;
}
.btn
{   	
	height: 170px;
	width: 170px;
	border-radius: 20px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    margin:20px;
	transition: width 0.4s, height 0.4s;
	
   
}
.btn i{
	font-size: 60px;
	
}
.btn{
	border: 4px solid #E50914;
	 color: #E50914;
     background:#fff;
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
  border: 4px solid #fff;
  background:#E50914;
  color:#fff;
  width: 190px;
  height:190px;
  transition: width 0.4s, height 0.4s;
 }	
.log{
	margin-right:20px;
	height:50px;
	width:100px;
	border-radius: 5px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    float:right;
	background:#E50914;
	color:#fff;
	font-family:sans-serif;
	font-size:18px;
}

	
</style>
</head>
<body>
<form method="POST">
<div class="menubox">
<button name="staff" value="Staff" class="btn" type="submit"><i class='fas fa-users'></i><br/><p>Staff</p></button>
<button name="package" value="Package" class="btn" type="submit" ><i class='fas fa-box-open'></i><br/><p>Package</p></button>
<button name="search" value="Search Parcel" class="btn" type="submit" ><i class='fa fa-search'></i><br/><p>Search Parcel</p></button>
</div>
<button name="logout" type="submit" class="log">Logout</button>

</form>
</body>
</html>
<?php
if(isset($_POST['staff']))
	header('location:staff.php');
if(isset($_POST['package']))
	header('location:package.php');
if(isset($_POST['search']))
	header('location:searchp.php');
if(isset($_POST['logout']))
	header('location:logout.php');
?>