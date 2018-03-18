<!DOCTYPE html>
<HTML lang="en">
<HEAD>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Signup Page </title>
    <link rel='stylesheet' href='css/style.css' />
</HEAD>
<body>

	<p>
		<h1>Signup</h1>
<form action="register.php" method="POST">
		<label>Username:</label>
		<input type="text" id="newuser" name="newuser" maxlength="20"/>
	
	</p>

	<p>
		<label>Password:</label>
		<input type="password" id="newpass" name="newpass" maxlength="20"/>
	
	</p>
		<p>
		<label>Repeat Password:</label>
		<input type="password" id="newpass" name="cnewpass" maxlength="20"/>
	
	</p>
	<p>
		
		<input type="submit" value="Signup" id="signup" name="signup"/>
	
	</p> 
</form>	
</body>
<?php
session_start();
if(isset($_SESSION[`name`])){
//echo "<script type='text/javascript'>window.location.href = 'home.php';</script>";
header('Location: ./home.php');
}

?>