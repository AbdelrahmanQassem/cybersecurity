<!DOCTYPE html>
<HTML lang="en">
<HEAD>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Messaging System </title>
    <link rel='stylesheet' href='css/style.css' />
</HEAD>

<body>
<pre><h1>                                   Team 4 Messaging System</h1></pre>

 <p><a href="signup.php"><h2>Register </h2></a> </p>
 <p><a href="login.php"><h2>Login </h2></a> </p>

</body>



</html>
<?php
session_start();
if(isset($_SESSION[`name`])){
//	echo "<script type='text/javascript'>window.location.href = 'home.php';</script>";
header('Location: ./home.php');

}
//else header('Location: ./index.php');
?>