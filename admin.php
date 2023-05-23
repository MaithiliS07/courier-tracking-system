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
.menubox{
	margin:10% 30%;
	width:500px;
    height:200px;
    color:#fff;
    position: absolute;
    padding: 70px 30px;
	
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
</style>
</head>
<body>
<div class="menubox">
<a href="staff.php"><button value="Staff" class="btn"><i class='fas fa-users'></i><br/><p>Staff</p></button></a>
<a href="package.php"><button value="Package" class="btn"><i class='fas fa-box-open'></i><br/><p>Package</p></button></a>

</div>
</body>
</html>