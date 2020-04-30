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
<link rel="icon" type="image/jpg" href="">
<title>
Profile
</title>
</head>
<body class="animation-area">
   <?=$_SESSION['sess_user'];?>
<a style="text-decoration:none;"href=""><h1 class="fontt">XCH<span style="color:red;">ange</span></h1></a><img src="" alt="logo" style="width:40px;height:40px;" class="pos">
<div id="navbar">
<a class="active " href=""><i class="fa fa-user"></i>&nbspProfile</a>
<a href="">Questions&nbsp<i class="fa fa-question"></i></a>
<a href="">Answers&nbsp<i class="fa fa-server"></i></a>
<a href="">About Us&nbsp<i class="fa fa-address-book"></i></a>

</div>
<div class="pro">
<h1 class='hd'>User Profile</h1>
<div class='rt'>	<a href="logout.php" class="buttonn">Logout</a>
</div>
<br><br>
<div class="n">
	<h2 class='hg'>Username: </h1><?php
  while($row=mysqli_fetch_assoc($query))
  {
  $dbusername=$row['username'];
  }
  echo $dbusername;
  ?><br>
	<h2 class='hg'>Email: </h1><?php
 	echo $email;
  	?>
  </div>
<div class="c">
<a href="">
<div class="c1">
<h1 align="center" style="color: purple;" class="d1">
<br><br>Questions
</h1>
<p align="center" class="p1">
Questions asked by you<br> to the community
</p>
</div>
</a>
<a href="">
<div class="c2">
<h1 align="center" style="color:purple;" class="d2">
<br><br>Answers<i class="fa fa-server"></i>
</h1>
<p align="center" class="p2">
Contributions by you <br> for the community
</p>
</div>
</a>
</div>
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
}                                                                      
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
.pro{
	background-color: rgba(0,255,255,0.4);
	width:90%;
	margin-top:10px ;
	margin-left:70px ;
}
.hd{
	text-align:center;
	font-size:50px;
}
.hg{
	color:purple;
}
.rt{
	float:right;
}
.n{
	padding:30px;
	color: blue;
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
}                                                                             /* till here */

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
</style>
</body>
</html>