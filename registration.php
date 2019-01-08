<?php
include("function.php");
?>


<!doctype html>
<html lang="en-US">
<head>
<title> 
Registration
</title>
<style>
<meta name="viewport" content="width=device-width, initial-scale=1">
div.container {
    width: 10%;
    border: 1px solid gray;
	
}
input[type=text], input[type=password] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}.button{
	background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.cancel{
	background-color:red;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
footer {
    padding: 1em;
    color: black;
    background:lightyellow;
    clear: left;
    text-align:center;
	height:25px;
}

header {
    padding: 1em;
    color: white;
    background-color:lightyellow;
    clear: left;
    text-align:center;
	height:90px;
}
.side{
	width:200px;
	float:left;
	padding-top:15px;
	padding-left:38px;
}
.side a{
	background-color:powderblue;
    color: black;
    display: block;
    padding: 15px;
    text-decoration:none;
	font-size:15px;
}
.side a:hover{
background-color:green;	
}
.right{
	width:200px;
	float:right;
	padding-top:15px;
	padding-right:38px;
}
.right a{
	background-color:powderblue;
    color: black;
    display: block;
    padding: 15px;
    text-decoration:none;
	font-size:15px;
}
.right a:hover{
background-color:green;	
}
.nev ul li {
  overflow: hidden;
  background-color: #333;
  float: left;
  display:block;
}
.nev ul li a{
  padding: 30px 70px;
  color: #f2f2f2;
  text-align: center;
  text-decoration: none;
  font-size: 20px;
}
.nev ul li a:hover{
	  background-color: #ddd;
     color: black;
}
 .nev ul li a.active{
	 background-color: #4CAF50;
}
 .main{
	 width:828px;
	 height:800px;
	 background-color:white;
	 float:left;
	 margin-top:15px;
	 margin-left:15px;
	 margin-bottom:50px;
 } 
</style>
</head>
<body style="background-color:blue;">
 <div class="container">
<header>
<span style="float:left; display:inline; padding-left:10px;"><img src="logo.gif"/></span>
<span style="float:right; display:inline; padding-right:10px;"><img src="logo.png"/></span>
</header>
</div>
<div class="nev">
<ul>
<li><a class="active" href="index.php"><img style="width:35px; height:20px;" src="home.png"/></a></li>
<li><a href="#">About Us</a></li>
<li><a href="ticket.php">Book ticket</a></li>
<li><a href="enquiries.php">Enquiries</a></li>
<li><a href="#">Profile</a></li>
<li><a href="#">Feedback</a></li>
</ul>
</div>
<div>

<marquee behavior="left" style="font-size:25px; color:black; margin-top:10px; "><a href="index.php" style="text-decoration:none; color:yellow;" 
>Welcome To My Railway Ticket Reservation System Manit </a></marquee>
</div>
<div class="side">
<a href="enquiries.php">Enquries</a>
<a href="#">Refund Rules</a>
<a href="#">User Information</a>
<a href="#"></a>
<a href="#"></a>
<a href="#"></a>
<a href="#"></a>
<a href="#">Suggesions</a>
<a href="#">Advertise with us</a>
</div>
<div class="main">
<form action="registration.php" method="post">

    &nbsp;&nbsp;&nbsp;<label><b>First Name</b></label>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" placeholder="Enter First name" name="fname" required>
        <br>
		&nbsp;&nbsp;&nbsp;<label><b>Last Name</b></label>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" placeholder="Enter Last name" name="lname" required>
        <br>
		 &nbsp;&nbsp;&nbsp;<label><b>Email</b></label>
		 &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" placeholder="Enter Email" name="email" required>
        <br>
		 &nbsp;&nbsp;&nbsp;<label><b>Phone No.</b></label>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" placeholder="Enter Phone No." name="phone" required>
        <br>
		 &nbsp;&nbsp;&nbsp;<label><b>Age</b></label>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" placeholder="Enter Age" name="age" required>
        <br>
		 &nbsp;&nbsp;&nbsp;<label><b>State</b></label>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" placeholder="Enter State" name="state" required>
        <br>
    &nbsp;&nbsp;&nbsp;<label><b>Password</b></label>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="password" placeholder="Enter Password" name="psw" required />
      <br> 
      &nbsp;&nbsp;&nbsp;<label><b>Confirm Password</b></label>
	&nbsp;
    <input type="password" name="cpsw" placeholder="Confirm Password" required />
        <br>	  
    <label>
	<br>
      &nbsp;&nbsp;&nbsp;<input type="checkbox" checked="checked"> Remember me
    </label>&nbsp;&nbsp;&nbsp;
	<p style="font-size:20px;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If already a member then please <u style="color:green; font-size:30px;"><a href="lo.php">Login</a></u></p>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="submit"  name="submit" value="Sign In" class="button"/>

&nbsp; &nbsp; <a href="lo.php"><input type="submit" value="Cancel" name="cancel" class="cancel"/></a>

 </form>
</div>
<div class="right">
<a href="#">Enquries</a>
<a href="#">Refund Rules</a>
<a href="#">User Information</a>
<a href="#"></a>
<a href="#"></a>
<a href="#"></a>
<a href="#"></a>
<a href="#">Suggesions</a>
<a href="#">Advertise with us</a>
</div>
<footer>Copyright &copy; Indian Railway</footer>
</body>
</html>
 <?php 
    registration();
	 
 ?>