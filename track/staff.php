
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
<style>
.sidenav {
  height: 100%;
  width: 15%;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav button {

 padding: 6px 8px 6px 16px;
 text-decoration: none;
  font-size: 18px;
  font-family:'Abel';
  color: #818181;
  display: block;
  border-bottom:1px solid #fff;
}

.menubtn{
border:0; 
background:black;
 margin-left:10px;
 margin-right:10px;
}
.menubtn::after{
  color: white;
  transition: 0.4s;
}
.menubtn:hover::after{
  transform: scale(1.3);
  opacity: 0;
}

.menubtn:hover
{ 
  color:white;
  transition: width 0.4s, height 0.4s;
 }	
.main {
  margin-left: 15%; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}


</style>
</head>
<body>
<form method="POST">
<div class="sidenav">
  <button type="submit" name="add" class="menubtn" >Add Staff Details</button>
  <button type="submit" name="view" class="menubtn">View Staff Details</button>
</div>

<div class="main" >
<?php
if(isset($_POST['add']))
	include('add.php');
if(isset($_POST['view']))
	include('view.php');

?>
</div>

 </form>  
</body>
</html> 
