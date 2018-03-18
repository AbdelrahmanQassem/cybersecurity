<!DOCTYPE html>
<HTML lang="en">
<HEAD>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Messaging Center </title>
    <link rel='stylesheet' href='css/style.css' />
</HEAD>
<body>
<pre><h1>                                Messaging Center</h1></pre>

 <p><a href="send.php"><h2>Send New Message </h2></a> </p>
 <div><a href="read.php"><h2>Your messages</h2></a></div>
<div><a href="logout.php">Logout</a></div>
</body>

</html>


<?php
session_start();

if(!isset($_SESSION[`name`]))
{
	header('Location: ./login.php');
	
}

?>

