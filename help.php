<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
<style>
input {
  width:70%;
  margin-left:15%;
   margin-bottom:10px;
   height:7%;
   padding:8px;
  border:1px solid #216353;
  letter-spacing:1px;
  font-family:'Abel';
 }

.btn{   
	width: 20%;
	font-family:'Abel';
	line-height:7px;
    border: 4px solid;
	color:#fff;
    background:#E50914;
	margin-left:40%;
	margin-top:30px;
	letter-spacing:3px;
	font-size:16px;
    border-radius:15px;
	margin-bottom:10%;

  
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
  color:white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  transition: width 0.4s, height 0.4s;
 }	
 .box{
	margin-left:25%;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	width:50%;
	border-radius:10px;
 }
 .box p{
  margin-left:15%;
  line-height:10px;
  color:#216353;
  font-family: 'Abel';
  font-size:20px;
 }
 .heading{
 padding-top:30px;
 padding-left:15%;
 font-family:'Abel';
 color:#E50914;
 font-size:30px;
}
</style>
</head>
<body>

<div class="box">
<form method="POST">
<h3 class="heading">Help</h1>
<p>Name</p>
  <input type="text"  name="name" value="">
   <p>Email Address</p> 
  <input type="text" name="email" value="">
  <p>Phone Number</p> 
  <input type="number" name="phno" value=""  maxlength="10" >
   <p>Your Query</p> 
  <input type="text" name="query" value="" style="height:20%;" >
 
  <button value="Submit" class="btn"><h4>SUBMIT</h4></button>
  </form>
</div>
<?php

if($_SERVER['REQUEST_METHOD']=="POST")
	{
	header("Location:index.html");
	}
	?>