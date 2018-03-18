<!DOCTYPE html>
<HTML lang="en">
<HEAD>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Send a message </title>
    <link rel='stylesheet' href='css/style.css' />
</HEAD>
<body>
<h1>Send</h1>
<form action="" method="POST">
	<p>
		<label>to (Username:)</label>
		<input type="text" id="touser" name="touser"/>
	
	</p>
	<p>
		<label>content:</label><br>
		<textarea id="content" name="content"></textarea>
	
	</p>
	<p>
		
		<input type="submit" value="Send" id="btn" name="Send"/>
	
	</p> <br/> <br/>
</form>
</body>
</html>
<?php
session_start();
//echo"sssssssssssss";
$key= md5('thisistherealme?');
function encrypt($string,$key){
	$string=rtrim(base64_encode(MCRYPT_ENCRYPT(MCRYPT_RIJNDAEL_256,$key,$string,MCRYPT_MODE_ECB)));
	RETURN $string;
	
}



// Create connection
$db_name = "id4450544_ntl";
$mysql_username = "id4450544_abdoqasem95";
$mysql_password = "12345678";
$server_name = "localhost";
$conn = mysqli_connect($server_name, $mysql_username, $mysql_password,$db_name);// Check connection

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	} 
	$mess=encrypt($_POST['content'],$key);
	 $sql =$conn->prepare("SELECT * FROM `users` WHERE username =? ");
	 $sql->bind_param("s",$_POST['touser']);
	 $sql->execute();
	 $sql->store_result();
	
if (isset($_POST['content'])&& ISSET($_POST['touser'])&&$sql->num_rows == 1&&$_POST['touser']!=$_SESSION[`name`])

	{//echo"ddddddddddddddd";
		$sqli = $conn->prepare("INSERT INTO `messages` ( `sender`, `reciever`,`message`) VALUES ( ?, ?,?)");
		$sqli->bind_param("sss",$_SESSION[`name`],$_POST['touser'],$mess);
		$sqli->execute();
//	echo "<script type='text/javascript'>window.location.href = 'confirm.php';</script>";
		header('Location: ./confirm.php');
	}

//else echo"Error sending the message "



?>
<?php
session_start();
if(!isset($_SESSION[`name`]))
{
	header('Location: ./login.php');
	
}

?>
