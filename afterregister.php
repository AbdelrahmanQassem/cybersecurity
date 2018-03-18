<!DOCTYPE html>
<HTML lang="en">
<HEAD>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Registration Confirmed </title>
    <link rel='stylesheet' href='css/style.css' />
</HEAD>
<body>

<pre><h1>                                   Registration Confirmed</h1></pre>
<h2>You may now</h2> <a href="login.php"><h2> login </h2></a> 

</body>



</html>
<?php
session_start();
if(isset($_SESSION[`name`])){
//	echo "<script type='text/javascript'>window.location.href = 'home.php';</script>";
header('Location: ./home.php');
}


?>