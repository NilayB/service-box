 <?php
$user = $_GET["username"];

//Temporary Part
exec("home/nilay/Desktop/RSA\ Algorithm/save.sh '$user' ");

?>

<!DOCTYPE HTML>
<html>
  <head>
    <title> LOGIN PAGE </title>
	<style>
	body{
				background-color:white;
				color:#009688;
				padding:20px;
			}
		header{
				background-color: #F44336;
				color: white;
				padding:10px;
			}
			#log{
				position:relative;
				top:50px;
				left:200px;
				border:solid #607D8B 4px;
				width:600px;
				padding:100px;
			}
			#msg{
				color: red;
				display: block;
				text-align: center;
				position:relative;
				top:-10px;
			}
	</style>
  </head>
   <body>
	<div  >
		<a href="index.php" ><h2>HOME</h2> </a>
	</div>
	<header>
	<h1><center>SERVICE BOX ADMIN LOGIN PORTAL</center></h1>
	</header>
	<div id="log">
	<h1 > WELCOME TO THE LOGIN PAGE<br> (FOR AUTHORISED USERS ONLY) </h1>
	<form  action="" method="POST"  >
	  Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="username" placeholder="enter your username" required><br><br>
	 Password:<input type="password" name="password1" placeholder="enter your password" required ><br><br>
	 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="submit" class="submit" name="login" value="login" ><input type="submit" class="submit" name="forget" value="forgot password" >
	
	</form>
</div><?php if(!empty($message)): ?>
		<p id="msg"> <?= $message ?></p>
	<?php endif; ?>
<br><br>
   </body>
</html>
