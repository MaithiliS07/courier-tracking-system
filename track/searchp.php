<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
<style>
.display{
	background:red;
    width:40%;
	height:60%;
	margin-left:20%;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);	width:55%;
}
.txt{
		font-size: 20px;
		font-family:'Abel';
        border-radius: 5px;
        border:3px solid #E50914;
		width:50%;
        height:8%;
}
.sbtn{   height:8%;
        width:100px;
	    font-size: 20px;
		border-radius:5px;
		background:#E50914;
        font-family:'Abel';
        color:white;
}

h3{
font-family:'Abel';}

</style>
</head>
<body>
<form method="POST">
<div name="search" >
<input type="text" name="pid" placeholder="Parcel ID" class="txt">
<input type="submit"  name="pbtn" class="sbtn" value="SEARCH"> </div>

<h3>Parcel Details</h3>
<?php
if(isset($_POST['pbtn']))
	include('pkg.php');
?>

</form>
</body>
</html>