<?php
$con= mysqli_connect('localhost','Anukesh','Anukesh','project') or die(mysql_error()) ;
if(!$con)
{
	echo'connection error:'.mysqli_connect_error() ;
}
session_start() ;

     
      $email = $_SESSION['sess_user'];
      $query=mysqli_query($con,"SELECT * FROM userprofile WHERE email='".$email."'");
      $numrows=mysqli_num_rows($query);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Coda' rel='stylesheet'>
<link rel="icon" type="image/jpg" href="C:/Users/Anukesh/Downloads/logo2.jpg">
<title>
HOME
</title>
</head>
<body class="animation-area">
   <?=$_SESSION['sess_user'];?>
<a style="text-decoration:none;"href=""><h1 class="fontt">XCH<span style="color:red;">ange</span></h1></a><img src="C:/Users/Anukesh/Downloads/logo2.png" alt="logo" style="width:40px;height:40px;" class="pos">
<div id="navbar">
<a class="active" href=""><i class="fa fa-home"></i>&nbspHome</a>
<a href="">Questions&nbsp<i class="fa fa-question"></i></a>
<a href="">Answers&nbsp<i class="fa fa-server"></i></a>
<a href="">About Us&nbsp<i class="fa fa-address-book"></i></a>
<button class="sign" onclick="on()">Profile</button>           <!--changes-->
</div>
<div class="card" id="prof" onclick="off()">                                     <!--from here-->
<br>
<div class="n">
	<span>Username: </span><?php
  while($row=mysqli_fetch_assoc($query))
  {
  $dbusername=$row['username'];
  }
  echo $dbusername;
  ?><br>
	<span>Email: </span><?php
 	echo $email;
  	?>
  </div><br><br>
  <div class="q">
<a href="userquestion.php">
<div class="q0">
<p align="center" style="color: purple;" class="w1">
<br>Questions<i class="fa fa-question"></i>
</p>
</div>
</a>
<a href="useranswer.php">
<div class="q00">
<p align="center" style="color:purple;" class="w2">
<br>Answers<i class="fa fa-server"></i>
</p>
</div>
</a>
</div>
<div>
	<a href="logout.php" class="buttonn">Logout</a>
</div>
</div>                                                           <!--till here-->
<div class="p">
<h1 align="center" class="m">Welcome to XCHange
</h1>
</div>
<pre>

</pre>
<div class="l">
<div class="l1">
For students</div> <div class="l2">By students
</div>
<p align="center" style="color:green">
XCHange is a platform which helps students<br> to interact with their fellow BMSCEians,<br> question/answer regarding anything BMSCE and also share anything at one place
</p>
</div>
<pre>

</pre>
<div class="f">
<div class="c">
<a href="">
<div class="c1">
<h1 align="center" style="color: purple;" class="d1">
<br><br>Questions<i class="fa fa-question"></i>
</h1>
<p align="center" class="p1">
Ask any question you have<br> regarding anything
</p>
</div>
</a>
<a href="">
<div class="c2">
<h1 align="center" style="color:purple;" class="d2">
<br><br>Answers<i class="fa fa-server"></i>
</h1>
<p align="center" class="p2">
Answer any questions asked <br> the community
</p>
</div>
</a>
</div>
<div class="i">
	<a href="">
	Want to Know More About Us?</a>
</div>
</div>
<br><br>
<div class="t">
<footer>
  <a href="#" class="fa fa-facebook me"></a>
  <a href="#" class="fa fa-linkedin me"></a>
  <a href="#" class="fa fa-instagram me"></a>
  <a href="#" class="fa fa-reddit me"></a>
  <a href="#" class="fa fa-youtube me"></a>
  <pre style="color:white;">&copy; Copyright 2019 XCHange Corporation&#174;
Partnered with Stack Overflow&trade;</pre>

</footer>
</div>
<script>
var navbar = document.getElementById("navbar") ;
var sticky = navbar.offsetTop ;
window.onscroll =  function(){myFunction()} ;
function myFunction()
{
	if (window.pageYOffset >= sticky)
	{
    		navbar.classList.add("sticky") ;
  	}
	else
	{
    		navbar.classList.remove("sticky");
  	}
}                                                                       //from here
document.getElementById("prof").style.display="none";
function on() {
  document.getElementById("prof").style.display="block";
}
function off() {
	document.getElementById("prof").style.display="none";
}                                                                       //till here
</script>
<style>
	@import url('https://fonts.googleapis.com/css?family=Audiowide&display=swap');
.animation-area
{
	background: linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB, #E74C3C, #8E44AD);
	background-size: 400%;
	width: 100%;
	position: relative;
	animation: change 13s ease-in-out infinite;
	font-family: Arial, Helvetica, sans-serif;
	background-repeat: no-repeat;
}
@keyframes change{
	0%{
	  background-position: 0% 50%;
	}
	50%{
	  background-position: 100% 50%;
	}
	100%{
	  background-position: 0% 50%;
	}
  }
.p
  {
  text-align: center;
  width: 100%;
  margin: auto;
  }
.m
{
font-size: 600%;
color: gold;
text-align: center;
}
.card {                                                                     /* from here */
	position: absolute;
  display: none;
  width: 30%;
  height: 33%;
  left: 50;
  right: 0;
	background-color: #d8f0e5;
  z-index: 1;
  text-align: center;
  }
.q {
	text-align: center;
width: 70%;
height: 150px;
margin: auto;
font-family: coda;
}
.q0 {
	border-radius: 50%;
width: 100px;
height: 100px;
display: inline-block;
float: left;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
background-color: #FF6347;
}
.q0:hover{
	background-color:#00FFFF;
}
.q00 {
	border-radius: 50%;
width: 100px;
height: 100px;
display: inline-block;
float: right;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
background-color: #FF6347;
}    
.q00:hover{
	background-color:#00FFFF;
}                                                                 
.buttonn {
	background-color: green;
	border: none;
	color: white;
	padding: 15px 32px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 16px;
	margin: 1px 1px;
	cursor: pointer;
	-webkit-transition-duration: 0.4s;
	transition-duration: 0.4s;
  }
  .buttonn:hover {
	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
  }                                                                                  /* till here */

  .button1:hover {
	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
  }

  .button2:hover {
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
  }
.l{
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	height: 200px;
	background-color: #d8f0e5;
	margin: auto;
	text-align: center;
}
.l1
{
	color: red;
	font-size: 300%;
	position: relative;
    animation-name: left;
    animation-duration: 7s;
}
.l2
{
	color: red;
	font-size: 300%;
	position: relative;
    animation-name: right;
    animation-duration: 7s;
}
@keyframes left {
	0%   {left:-1000px;}
	50%  {left:0px;}
}
@keyframes right {
	0%   {right:-1000px;}
	50%  {right:0px;}
}
h1
{
color: black;
}
p
{
color: black;
}
.fontt{
	font-family: 'Audiowide', cursive;
  }
.pos
{
	position: absolute;
	top: 1px;
	left: 165px;
}
.c
{
text-align: center;
width: 50%;
height: 400px;
margin: auto;
font-family: coda;
}
.c1
{
border-radius: 50%;
width: 300px;
height: 300px;
display: inline-block;
float: left;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.c2
{
border-radius: 50%;
width: 300px;
height: 300px;
display: inline-block;
float: right;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.c1 .p1
{
	visibility: hidden;
}
.c1:hover .p1
{
	visibility: visible;
	color: blue;
}
.c2 .p2
{
	visibility: hidden;
}
.c2:hover .p2
{
	visibility: visible;
	color: blue;
}
.c1:hover .d1
{
	visibility: hidden;
}
.c2:hover .d2
{
	visibility: hidden;
}
.i
{
	text-align: center;
	font-size: 200%;
}
#navbar
	{
		overflow: hidden;
		background-color: #333;
		z-index:2;
	}

	#navbar a
	{
  		float: left;
  		display: block;
  		color: #f2f2f2;
  		text-align: center;
  		padding: 14px 40px;
  		text-decoration: none;
  		font-size: 17px;
	}

	#navbar a:hover
	{
  		background-color: #ddd;
  		color: black;
	}

	#navbar a.active
	{
 		background-color:  #0047b3;
  		color: white;
	}

	#navbar button.sign                                        /* changes mainly in name and colour */
	{
		float: right;
		display: block;
		background-color:#333;
		border:none;
  		color:#f2f2f2;
  		text-align: center;
  		padding: 14px 40px;
  		text-decoration: none;
  		font-size: 17px;
	}
	#navbar button.sign:hover
	{
  		background-color: #ddd;
  		color: black;
	}                                                        /* till here */
	.sticky
	{
  		position: fixed;
  		top: 0;
  		width: 100%;
	}

	.sticky + .content
	{
  		padding-top: 60px;
	}
.me{
		padding: 10px;
		font-size: 20px;
		width: 20px;
		text-align: center;
		text-decoration: none;
		margin: 5px 2px;
	  }
.me:hover {
		  opacity: 0.7;
}
</style>
</body>
</html>