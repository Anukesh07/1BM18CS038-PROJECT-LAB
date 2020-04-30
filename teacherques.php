<?php
$conn= mysqli_connect('localhost','Anukesh','Anukesh','project') ;
if(!$conn)
{
	echo'connection error:'.mysqli_connect_error() ;
}
$email = $_SESSION['sess_user'];
$sq = 'select question_id from requests where email='.$email;
$sql = 'select * from ques where question_id='.$sq ;
$result = mysqli_query($conn, $sql) ;
$queses = mysqli_fetch_all($result, MYSQLI_ASSOC) ;
mysqli_free_result($result) ;
?>
<?php   
    if(isset($_POST['submit']))
    {  
       session_start() ;
       $_SESSION['submit']=$_POST['submit'] ;
       header('Location: answer.php') ;

    }
?>
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Cinzel Decorative' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css?family=Audiowide&display=swap" rel="stylesheet">
<link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title> QUEStions </title>
</head>
<style @import url('https://fonts.googleapis.com/css?family=Audiowide&display=swap');>

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

	#navbar
	{
  		overflow: hidden;
  		background-color: #333;
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

	.boxx
	{
		margin-top:40px ;
		margin-left:300px ;
		background:rgba(128, 0, 128,0.5) ;
		background-image:url(".jpg") ;
		background-position: center;
		padding:10px ;
		text-align:center ;
		width: 60% ;
		border-radius:10% ;
	}


	::placeholder
	{
		color:black ;
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
		outline: none;
  		opacity: 1;
		outline: none;
	}
	button:active
	{
		outline: none;
  		background-color:#000d33;
  		box-shadow: 0 5px #666;
  		transform: translateY(4px);
		outline: none;
	}

	.me
	{
  		padding: 10px;
		  font-size: 20px;
  		width: 20px;
  		text-align: center;
  		text-decoration: none;
  		margin: 5px 2px;
	}
	.me:hover
	{
    		opacity: 0.7;
	}
 	.right
	{
  		float: right;
	}

</style>
<body class="animation-area">
<a style="text-decoration:none;"href=""><h1 class="fontt">XCH<span style="color:red;">ange</span></h1></a><img src="bmscex.png" alt="logo" style="width:40px;height:40px;" class="pos" >
<div id="navbar">
   <a  href=""><i class="fa fa-home"></i>&nbsp Home</a>
   <a  href="questions.php"><i class="fa fa-question"></i>ASK</a>
   <a class="active" href="">Requests &nbsp<i class="fa fa-question"></i></a>
   <a href="allans.php">Answers &nbsp<i class="fa fa-server"></i></a>
   <a  href="about.html"><i class="fa fa-address-book"></i>&nbsp About Us</a>

</div>
<?php foreach($queses as $ques)
{?>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" >
    <button class="boxx" name="submit" value="<?php echo htmlspecialchars($ques['question_id']) ;?>"type="submit">
    <h4 style="color:#000d33 ; font-family: Times New Roman, Times, serif;"><i>Asked by :- </i>    <?php echo htmlspecialchars($ques['User_name']) ;?></h4>
    <h4 style="color:#ffffe6 ;font-family:Comic Sans MS, cursive, sans-serif"> <?php echo htmlspecialchars($ques['questions']) ;?></h4>
    </button>
    </form>  
<?php } ?>

<br><br>
<footer>
  <a href="#" class="fa fa-facebook me"></a>
  <a href="#" class="fa fa-linkedin me"></a>
  <a href="#" class="fa fa-instagram me"></a>
  <a href="#" class="fa fa-reddit me"></a>
  <a href="#" class="fa fa-youtube me"></a>
  <span style="color:white;"class="right">&copy; Copyright 2019 XCHange Corporation &#174;<br>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Partnered with Stack Overflow&trade;</span>

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

function required()
{
	var ques = document.getElementById("place").value ;
	if(ques.length==0)
	{
		alert("first write your doubt") ;
		return false ;
	}
}


</script>
</body>
</style>
</html>
