<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Cinzel Decorative' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css?family=Audiowide&display=swap" rel="stylesheet">
<link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title> About Us </title>
</head>
<style @import url('https://fonts.googleapis.com/css?family=Audiowide&display=swap');>

	body
	{
		font-family: 'Cinzel Decorative';
	}
	.aboutus
	{
		max-height:210px ;
		background-image:url("pinkkau.jpg") ;
		background-size:  64% 100%;
		background-repeat:no-repeat ;
   		display:block;
   		float:left;
   		width:100% ;
		font-family:Comic Sans MS ;
	}

	.aboutus:hover
	{
		height:190px ;
		width :110% ;
		background-image:url("pinkkau.jpg") ;
		background-size:  64% 100%;
		background-repeat:no-repeat ;
   		display:block;
   		float:left;
	}
	.mission
	{
		text-align:right ;
		height:193px ;
		width :96% ;
		margin-top:250px ;
		margin-down:100px ;
		background-image:url("blueem.jpg") ;
		background-size:  64% 100%;
		background-repeat:no-repeat ;
		background-position: center;
		font-family:Comic Sans MS ;
	}

	.mission:hover
	{
		height:200px ;
		width :103% ;
		background-image:url("blueem.jpg") ;
		background-size:  64% 100%;
		background-repeat:no-repeat ;
	}

	.service
	{
		text-align:center ;
		height:134px ;
		width :96% ;
		margin-top:40px ;
		margin-down:200px ;
		background-image:url("yllowser.jpg") ;
		background-size:  64% 100%;
		background-repeat:no-repeat ;
		font-family:Comic Sans MS ;
	}

	.service:hover
	{

		height:140px ;
		width :110% ;
		background-image:url("yllowser.jpg") ;
		background-size:  64% 100%;
		background-repeat:no-repeat ;
	}

	body
	{
		background-size: cover;
	}

	.ab
	{
		color:black ;
		text-align:center ;
		font-size:50px ;
	}

	.boxx
	{
		margin-top:100px ;
		margin-down:40px ;
		margin-left:450px ;
		background:rgba(0,0,0,0) ;
		background-image:url(".jpg") ;
		background-position: center;
		padding:10px ;
		text-align:center ;
		width: 40% ;
		background-color: #00FFFF;
		border-radius:10% ;
		font-family: Arial, Helvetica, sans-serif;
		opacity:0.8;
	}
	.fr
	{
		background-color: white;
		border-radius:20% ;
	}
	button
	{
  		background-color:#0047b3;;
  		color:black;
		font-size:20 ;
  		padding: 20px;
  		border-radius: 25px;
  		cursor: pointer;
  		width:30%;
  		opacity: 0.9;
	}

	button:hover
	{
  		opacity: 1;
	}
	button:active
	{
		outline: none;
  		background-color: #001a66;
  		box-shadow: 0 5px #666;
  		transform: translateY(4px);
	}

	h2
	{
		color:black ;
		text-align:center ;
		padding-top : 60px ;
	}
	h3
	{
		color:white ;
	}
	p
	{
		color:white ;
		padding :25px ;
		font-size:20 ;
	}

	div
	{
		text-align:center ;
		font-size:15 ;
	}
	input
	{
		color : white ;
		font-size:15 ;
		background: rgba(0,0,0,0) ;
		width: 50% ;
		height: 23px ;
		border: none ;
		border-bottom: 1px solid white ;
	}
	input:focus
	{
 		 outline: none;
		border-bottom: 1px solid #660000 ;
	}
	::placeholder
	{
		opacity:5 ;
		border:none ;
		color: white ;
	}

	::placeholder:focus
	{
		border:none ;
	}
	.contact
	{
		color:white ;
		font-family:Comic Sans MS ;
		text-align:center ;
   		display:block;
   		float:left;
   		width:27% ;
   		border:transparent ;
		border-radius:50% ;
   		padding: 10px;
		margin:30px ;
	}


	#navbar
	{
  		overflow: hidden;
  		background-color: #333;
		font-family:Times New Roman ;
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

	#navbar .sign
	{
		float :right ;
	}

	.jai
	{
		color:transparent ;
		font-family: 'Cinzel Decorative';
	}
	.jai:hover
	{
		color:#990033 ;
		font-family: 'Cinzel Decorative';
	}

	.arun
	{
		color:transparent ;
		font-family: 'Cinzel Decorative';
	}
	.arun:hover
	{
		color:#006622;
		font-family: 'Cinzel Decorative';
	}

	.anukesh
	{
		color:transparent ;
		font-family: 'Cinzel Decorative';
	}
	.anukesh:hover
	{
		color: #000099 ;
		font-family: 'Cinzel Decorative';
	}
	.animation-area
	{
  		background: linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB, #E74C3C, #8E44AD);
  		background-size: 600%;
		background-repeat:no-repeat ;
  		position: relative;
  		animation: change 13s ease-in-out infinite;
	}

	@keyframes change
	{
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

	.fontt
	{
  		font-family: 'Audiowide', cursive;
	}

	.pos
	{
		position:absolute ;
		top:1px ;
		left:170px ;
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
 .right{
	font-family:Times New Roman ;
  float: left;
}
.right1{
	font-family:Times New Roman ;
  float: right;
}
.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
  float:left;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
.lb{
	float:left;
	color:darkblue;
	font-size:large;
}
.inp{
	float:left;
	padding:10px;
}
input[type=text], textarea {
  width: 100%;
  height: 5%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
  background-color: white;
  color:black;
}
input[type=email] {
  width: 100%;
  height: 5%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
  background-color: white;
  color:black;
}
input[type=submit] {
  background-color: dodgerblue;
  color: white;
  padding: 6px 20px;
  border: none;
  height:40px;
  border-radius: 4px;
  cursor: pointer;
  font-size:large;
}

input[type=submit]:hover {
  background-color: #00FFFF;
}
</style>

<body class="animation-area">
<a style="text-decoration:none;"href=""><h1 class="fontt">XCH<span style="color:red;">ange</span></h1></a><img src="bmscex.png" alt="logo" style="width:40px;height:40px;" class="pos" >
<div id="navbar">
   <a  href="D:/project lab/webd/Stack.html"><i class="fa fa-home"></i>&nbsp Home</a>
   <a href="D:/project lab/project/ques.html">Questions &nbsp<i class="fa fa-question"></i></a>
   <a href="D:\project lab\answers.html">Answers &nbsp<i class="fa fa-server"></i></a>
   <a class="active" href="D:/project lab/project/about.html"><i class="fa fa-address-book"></i>&nbsp About Us</a>

</div>
<h1  class="ab" style="letter-spacing:8px ; margin-top:43px ;">   About web-site  </h1>

<div class="aboutus">
<p style="font-size:1.3vw; color:black">
<b>&nbsp XCHange is a network<br> of question-and-answer (Q&A) <br>
websites on topics in diverse fields.
</b>
</p>
</div>

<div class="mission">
<p  style="font-size:1.2vw;color:black ; margin-right:257px ;">
	<b>  the website is available free and
	 <br> exclusively for BMSCEians letting :<br>
	  - Students to contact with teachers <br>
	   - Students to contact with each other  <br>
	    - Asking reasonable questions and doubts <br>
	   - Solving queries <br>
	</b>
</p>
</div>
<p class="service" style="font-size:1.2vw;color:black ;">
	<b><br>XCHange is a website which <br> enables
	 any member of BMSCE to contact<br>
	 fellow BMSCEians. <br>
	sign up and enjoy the free service<br>
	</b>
</p>

<div class="boxx">
<div class="fr">
<img src="contactus.jpg" style="height:200px ;border-radius:50% ; opacity:70% ;" ></img>
<h1 style="color:black ;">   Contact Us  </h1>
</div>
<div>
<form action="about.php" style="max-width:500px;margin:auto">
    <label class="lb" for="name">Name</label>
    <input type="text" name="name" placeholder="Your name.." required>

    <label class="lb" for="email">Email</label>
    <input type="email" name="email" placeholder="Your email.." required>

    <label class="lb" for="Rate">What do you think of us?</label>
    <textarea name="subject" placeholder="Write something.." style="height:200px" required></textarea>

    <input type="submit" value="Submit">
  </form>
</div>
</div>

<h2 style="margin-top:40px ;margin-bottom:40px ;letter-spacing:8px ;">About The Creators</h2>
<li class="contact">
<img src="contact131.jpg" style="height:200px ; border-radius:50% ; opacity:0.6 ;" ></img>
<h3 style="color:black"> K . Arun Teja</h3>
<h4 style="color:black"> Status </h4>
<p class="arun"  style="font-family:Comic Sans MS ;"> A student currently recieving higher education in BMSCE,Bangalore <br>dept. of Computer Science and Engg..<br>
 he undertook the project in 3rd semester .
</p>
</li>
<li class="contact">
<img src="contact121.jpg" style="height:200px ;border-radius:50% ; opacity:0.6 ;" ></img>
<h3 style="color:black"> J . Anukesh</h3>
<h4 style="color:black"> Status </h4>
<p class="anukesh"  style="font-family:Comic Sans MS ;"> A student currently recieving higher education in BMSCE,Bangalore <br>dept. of Computer Science and Engg..<br>
 he undertook the project in 3rd semester .
</p>
</li>
<li class="contact">
<img src="dscontact.jpg" style="height:200px ;border-radius:50% ; opacity:0.6 ;" ></img>
<h3 style="color:black">Jai Jain</h3>
<h4 style="color:black"> Status </h4>
<p  class="jai" style="font-family:Comic Sans MS ;"> A student currently recieving higher education in BMSCE,Bangalore <br>dept. of Computer Science and Engg..<br>
 he undertook the project in 3rd semester .
</p>
</li>

<footer>
  <a href="#" class="fa fa-facebook me"></a>
  <a href="#" class="fa fa-linkedin me"></a>
  <a href="#" class="fa fa-instagram me"></a>
  <a href="#" class="fa fa-reddit me"></a>
  <a href="#" class="fa fa-youtube me"></a>
	<br>
  <span style="color:white; text-align:left ;" class="right">&copy; Copyright 2019 XCHange Corporation&#174;<br> Partnered with Stack Overflow&trade;</span>

</footer>

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
<?php
$con= mysqli_connect('localhost','Anukesh','Anukesh','project') or die(mysql_error()) ;
if($_SERVER['REQUEST_METHOD']=='POST')
{
	
	$name=mysqli_real_escape_string($con,$_POST['name']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$subject=mysqli_real_escape_string($con,$_POST['subject']);
	$sql="INSERT INTO feedback(name,email,comments) VALUES('$name','$email','$subject')";
	if(mysqli_query($con,$sql))
    {
		echo 'Thanks for the feedback!' ;
		header('Location: about.php') ;
		
    }
    else
    {
        echo 'error:'.mysqli_error($conn) ;      
	}
}
?>
</body>
</html>
